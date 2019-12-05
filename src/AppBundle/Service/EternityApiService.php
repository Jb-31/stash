<?php
/**
 * Created by PhpStorm.
 * User: achantioux
 * Date: 10/01/18
 * Time: 11:49
 */

namespace AppBundle\Service;


use AppBundle\Entity\Eternity;
use AppBundle\Entity\Ticket;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;

class EternityApiService
{
    const NEED_AUTH_ERROR = 'you need to authenticate first';

    /** @var  EntityManager $em */
    protected $em;

    /** @var  Container $container */
    private $container;

    /**
     * @param EntityManager $entityManager
     * @param Container $container
     */
    public function __construct(EntityManager $entityManager, Container $container)
    {
        $this->em = $entityManager;
        $this->container = $container;
    }

    public function makeRequest(Eternity $ET, User $usr, $email = null, $cb = null,$exp_m = null,$exp_y = null){

        $session = $this->container->get('session');
        $token = $session->get('ETERNITY_TOKEN_'.$ET->getName(),null);
        if($token === null){
            $token = $this->askForAuthentification($ET,$usr);
            $session->set('ETERNITY_TOKEN_'.$ET->getName(),$token);

        }
        $result = $this->searchUsers($ET,$email,$cb);
        $result_test = json_decode($result,true);
        if(is_null($result_test) || (array_key_exists('error',$result_test) && $result_test['error'] == self::NEED_AUTH_ERROR))
        {
            // le token est expiré ou non setté
            $token = $this->askForAuthentification($ET,$usr);
            $session->set('ETERNITY_TOKEN_'.$ET->getName(),$token);
            $result = $this->searchUsers($ET,$email,$cb);
        }
        return $result;
    }

    private function askForAuthentification(Eternity $Et,User $usr){

        $url = $Et->getUrlApi().'grc-api/authenticate';
        /** @var User $user */

        $params = [
            'username' => $Et->getLogin(),
            'password' => $Et->getPwd(),
            'user_email' => $usr->getEmail(),
            'user_role'  => $usr->getRoles()
        ];


        $return = $this->curl_call($url,true,true,$params );
        $return = json_decode($return,true);

        if(is_array($return)) {
            if (array_key_exists('token', $return)) {
                $token = $return['token'];
                return $token;
            } else {
                throw new \Exception('Bad credentials to connect eternity');
            }
        }else{
            throw new \Exception('Problem connecting to  eternity');
        }
        return null;
    }


    private function searchUsers(Eternity $et,$email,$pan){
        $url = $et->getUrlApi().'grc-api/secured/users/search';
        $params = [];
        if(!is_null($email) && $email != ''){
            $params['email'] = $email;
        }
        if(!is_null($pan) && $pan != ''){
            $params['pan'] = $pan;
        }
        $session = $this->container->get('session');
        $token = $session->get('ETERNITY_TOKEN_'.$et->getName());
        $return = $this->curl_call($url,true,true,$params,$token);
        return $return;
    }


    public function getUserInfo(Ticket $ticket){
        $session = $this->container->get('session');
        $token = $session->get('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),null);

        $url = $ticket->getEternity()->getUrlApi().'grc-api/secured/user/infos/'.$ticket->getMatchedUserId();

        if($session->get('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),null) === null){
            $token = $this->askForAuthentification($ticket->getEternity(),$ticket->getGrcUser());
            $session->set('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),$token);
        }

        $result = $this->curl_call($url,false,true,[],$token);
        $result_test = json_decode($result,true);

        if(!is_null($result_test) &&  array_key_exists('error',$result_test) && $result_test['error'] == self::NEED_AUTH_ERROR)
        {
            // le token est expiré
            $token = $this->askForAuthentification($ticket->getEternity(),$ticket->getGrcUser());
            $session->set('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),$token);
            $result =  $this->getUserInfo($ticket);
        }
        return $result_test;


    }

    private function curl_call($url,$isPost=true,$hasReturn=false,$postParams=[],$token=null){

        $result = null;
        $ch = curl_init();
        $curlConfig = array(
            CURLOPT_URL            => $url,
            CURLOPT_POST           => $isPost,
            CURLOPT_RETURNTRANSFER => $hasReturn,
            CURLOPT_POSTFIELDS     => http_build_query($postParams),
            CURLOPT_CONNECTTIMEOUT_MS => 3500,
            CURLOPT_TIMEOUT_MS => 3500
        );

        if($token !== null){
            $head = [];
            $head[] = 'content-type: application/x-www-form-urlencoded';
            $head[] = 'authorization: Bearer '.$token;

            $curlConfig[CURLOPT_HTTPHEADER]= $head;
        }

        curl_setopt_array($ch, $curlConfig);
        if ($hasReturn) {
            $result = curl_exec($ch);
        } else {
            curl_exec($ch);
        }



        if ($errno = curl_errno($ch)) {
            $error_message = curl_strerror($errno);
            echo "cURL error ({$errno}):\n {$error_message}";
            return $error_message;
        }
        curl_close($ch);
        return $result;
    }

    public function unsuscribeUser($userId,$ticket){
        $session = $this->container->get('session');
        $token = $session->get('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),null);

        $url = $ticket->getEternity()->getUrlApi().'grc-api/secured/user/unsuscribe/'.$userId;

        if($session->get('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),null) === null){
            $token = $this->askForAuthentification($ticket->getEternity(),$ticket->getGrcUser());
            $session->set('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),$token);
        }

        $result = $this->curl_call($url,false,true,[],$token);
        $result_test = json_decode($result,true);

        if(array_key_exists('error',$result_test) && $result_test['error'] == self::NEED_AUTH_ERROR)
        {
            // le token est expiré
            $token = $this->askForAuthentification($ticket->getEternity(),$ticket->getGrcUser());
            $session->set('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),$token);
            $result = $this->curl_call($url,false,true,[],$token);
            $result_test = json_decode($result,true);
        }

        return $result_test;
    }


    public function refundTransaction($trId,$ticket){
        $session = $this->container->get('session');
        $token = $session->get('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),null);

        $url = $ticket->getEternity()->getUrlApi().'grc-api/secured/tr/refund/'.$trId;

        if($session->get('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),null) === null){
            $token = $this->askForAuthentification($ticket->getEternity(),$ticket->getGrcUser());
            $session->set('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),$token);
        }

        $result = $this->curl_call($url,false,true,[],$token);
        $result_test = json_decode($result,true);

        if(is_null($result_test) && array_key_exists('error',$result_test) && $result_test['error'] == self::NEED_AUTH_ERROR)
        {
            // le token est expiré
            $token = $this->askForAuthentification($ticket->getEternity(),$ticket->getGrcUser());
            $session->set('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),$token);
            $result = $this->curl_call($url,false,true,[],$token);
            $result_test = json_decode($result,true);
        }

        return $result_test;
    }

    public function getMessageForGrc($subId,$ticket){
        $session = $this->container->get('session');
        $token = $session->get('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),null);

        $url = $ticket->getEternity()->getUrlApi().'grc-api/secured/sub/message/'.$subId;
        if($session->get('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),null) === null){
            $token = $this->askForAuthentification($ticket->getEternity(),$ticket->getGrcUser());
            $session->set('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),$token);
        }
        $result = $this->curl_call($url,false,true,[],$token);

        $result_test = json_decode($result,true);
        if(array_key_exists('error',$result_test) && $result_test['error'] == self::NEED_AUTH_ERROR)
        {
            // le token est expiré
            $token = $this->askForAuthentification($ticket->getEternity(),$ticket->getGrcUser());
            $session->set('ETERNITY_TOKEN_'.$ticket->getEternity()->getName(),$token);
            $result = $this->curl_call($url,false,true,[],$token);
            $result_test = json_decode($result,true);
        }
        return $result_test;
    }
}