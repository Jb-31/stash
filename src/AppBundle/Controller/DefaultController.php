<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ticket;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->redirectToRoute('ticket_home');
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/ticket", name="ticket_home")
     * @Security("has_role('ROLE_GRC')")
     */
    public function ticketAction(Request $request)
    {
        $etRepo = $this->getDoctrine()->getRepository('AppBundle:Eternity');
        $TicketRepo = $this->getDoctrine()->getRepository('AppBundle:Ticket');
        $etList = $etRepo->findAll();
        $results = null;

        if ($request->isMethod('POST')) {
            $idT = $request->request->get('ticket',null) ;
            if(!is_null($idT) && $idT != '' ){
                $ticket = $TicketRepo->find($idT);
            }else{
                $ticket = new Ticket();
            }



            // on crée le ticket pour le suivit.
            /** @var User $usr */
            $usr= $this->get('security.token_storage')->getToken()->getUser();
            $ticket->setGrcUser($usr);
            $et = $etRepo->find($request->request->get('eternity_platform'));
            $ticket->setEternity($et);
            $ticket->setEmail($request->request->get('email',null));
            $ticket->setCbLastNumbers(intval($request->request->get('pan',null)));
            $ticket->setComments($request->request->get('comments'));
            $ticket->setSource($request->request->get('demand_from'));
            $ticket->addLog('['.$usr->getUsername().'] Search with email='.$ticket->getEmail().' , pan='.$ticket->getCbLastNumbers());
            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();



            $session = $request->getSession();
            $session->set('current_ticket',$ticket);

            $EtApiService = $this->get('app.eternity_api');
            $results = $EtApiService->makeRequest($et,$usr,$request->request->get('email'),$request->request->get('pan',null));

            $results = json_decode($results);

        } else
        {
            $ticket = new Ticket();
        }



        return $this->render('ticket/home.html.twig',
            [
                'demand_from' => Ticket::DEMAND_FROM_LIST,
                'eternity_list' => $etList,
                'results' => $results,
                'ticket' => $ticket,
            ]);
    }

    /**
     * @Route("/ticket/{ticketId64}/user/{id64}", name="grc_api_user_details")
     * @Security("has_role('ROLE_GRC')")
     */
    public function viewUserAction($ticketId64, $id64){
        $ticketId = base64_decode($ticketId64);
        $userId = base64_decode($id64);


        // mise à jour du ticket
        $TicketRepo = $this->getDoctrine()->getRepository('AppBundle:Ticket');
        $ticket = $TicketRepo->find($ticketId);
        if(is_null($ticket)){
            throw new NotFoundHttpException('Ce ticket est introuvable');
        }
        $ticket->setMatchedUserId($userId);

        $em = $this->getDoctrine()->getManager();
        $em->flush();



        // appel du service ETAPI pour récupérer les infos du user
        $EtApiService = $this->get('app.eternity_api');
        $usersInfos = $EtApiService->getUserInfo($ticket);

        $email = $usersInfos['user']['email'];
        $ticket->setEmail($email);
        $em->flush();


        return $this->render(':ticket:userView.html.twig',
            array(
                    'ticket' => $ticket,
                    'userInfos' => $usersInfos,
                    'userId64' => $id64,
                    'ticketId64' => $ticketId64
            ));

    }

    /**
     * @Route("/ws/user/unsuscribe", name="grc_api_user_unsuscribe")
     * @Security("has_role('ROLE_GRC')")
     */
    public function unsuscribeAction(Request $request){
        $ticket64 = $request->get('ticket');
        $user64 = $request->get('user');
        $ticketId =  base64_decode($ticket64);
        $userId = base64_decode($user64);

        /** @var User $logguedUser */
        $logguedUser = $this->getUser();

        // mise à jour du ticket
        $TicketRepo = $this->getDoctrine()->getRepository('AppBundle:Ticket');
        $ticket = $TicketRepo->find($ticketId);
        if(is_null($ticket)){
            throw new NotFoundHttpException('Ce ticket est introuvable');
        }
        $ticket->setMatchedUserId($userId);
        $ticket->addLog($logguedUser->getUsername().' unsuscribe action on user '.$userId);
        $ticket->setWasUnsuscribed(true);
        $this->getDoctrine()->getManager()->flush();

        $EtApiService = $this->get('app.eternity_api');
        $return = $EtApiService->unsuscribeUser($userId, $ticket);
        if(!is_null($return)){
            $return = ['result' => 'ok'];
        }
        return new JsonResponse($return);
    }


    /**
     * @Route("/ws/tr/refund", name="grc_api_tr_refund")
     * @Security("has_role('ROLE_GRC')")
     */
    public function refundAction(Request $request){
        $ticket64 = $request->get('ticket');
        $trId64 = $request->get('transaction');
        $trAmount = $request->get('amount');
        $ticketId =  base64_decode($ticket64);
        $trId = base64_decode($trId64);

        /** @var User $logguedUser */
        $logguedUser = $this->getUser();

        // mise à jour du ticket
        $TicketRepo = $this->getDoctrine()->getRepository('AppBundle:Ticket');
        $ticket = $TicketRepo->find($ticketId);
        if(is_null($ticket)){
            throw new NotFoundHttpException('Ce ticket est introuvable');
        }
        $ticket->addLog($logguedUser->getUsername().' refunded '.($trAmount/100).'€ from  Transaction '.$trId);
        $ticket->setWasUnsuscribed(true);
        $ticket->setRefundedAmount($ticket->getRefundedAmount()+$trAmount);
        $this->getDoctrine()->getManager()->flush();

        $EtApiService = $this->get('app.eternity_api');
        $return = $EtApiService->refundTransaction($trId, $ticket);
        if(!is_null($return)){
            $return = ['result' => 'ok'];
        }
        return new JsonResponse($return);
    }

    /**
     * @Route("/ws/sub/message", name="grc_api_sub_message")
     * @Security("has_role('ROLE_GRC')")
     */
    public function getMessageGRC(Request $request){
        $ticket64 = $request->get('ticket');
        $subId64 = $request->get('sub');
        $ticketId =  base64_decode($ticket64);
        $subId = base64_decode($subId64);

        $TicketRepo = $this->getDoctrine()->getRepository('AppBundle:Ticket');
        $ticket = $TicketRepo->find($ticketId);
        if(is_null($ticket)){
            throw new NotFoundHttpException('Ce ticket est introuvable');
        }


        $EtApiService = $this->get('app.eternity_api');
        $return = $EtApiService->getMessageForGrc($subId, $ticket);

        return new JsonResponse($return);
    }

    /**
     *  @Route("/tp/tp_generator",name="trustpilotgenerator")
     *  @Security("has_role('ROLE_GRC')")
     */
    public function trustPilotGenerator(){
        return $this->render(':default:trustpilotGenerator.html.twig');
    }

    /**
     *  @Route("/tp/tp_generator/generate",name="generate_tp_link")
     *  @Security("has_role('ROLE_GRC')")
     */
    public function generateTrustPilot(Request $request){
        $email = $request->get('email');
        $prenom =  $request->get('prenom');
        $nom =  $request->get('nom');



        $businessUnitID = '4d19c91a00006400050e5041';
        $trustpilotReference = uniqid($email, true);
        $name = $prenom.' '.$nom;
        //demande d'auth
        $vars = 'grant_type=password&username=cmacaudiere@hipay.com&password=ChocolatChaud5592&code=';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.trustpilot.com/v1/oauth/oauth-business-users-for-applications/accesstoken");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$vars);  //Post Fields
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Basic [WldZZEJ5YWh2aUxWOFdEd2xqbEQzaXozcVQ1VUd0TEc6UzZOQ3FQOUdPcUhzMmlZTw==]',
            'Content-Type: application/x-www-form-urlencoded'
        ));
        $auth_result = curl_exec ($ch);
        curl_close ($ch);

        $auth_result = json_decode($auth_result,true);
        $apiTOKEN = $auth_result['access_token'];


        $url = "https://invitations-api.trustpilot.com/v1/private/business-units/".$businessUnitID."/invitation-links?token=".$apiTOKEN;
        // CALL Demande d'invitation
        $vars = 'trustpilotReference='.$trustpilotReference.'&name='.$name.'&email='.$email.'&redirectUri=http://hipay.com&locale=FR-fr';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$vars);  //Post Fields
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Basic [WldZZEJ5YWh2aUxWOFdEd2xqbEQzaXozcVQ1VUd0TEc6UzZOQ3FQOUdPcUhzMmlZTw==]',
            'Content-Type: application/x-www-form-urlencoded'
        ));


        $logger = $this->get('logger');
        $logger->addInfo('calling CURL url : '.$url);
        $link_generated = curl_exec ($ch);


        if ($errno = curl_errno($ch)) {
            $error_message = curl_strerror($errno);
            echo "cURL error ({$errno}):\n {$error_message}";
            $logger->addError("cURL error ({$errno}):\n {$error_message}");
        }
        curl_close ($ch);


        $link_generated = json_decode($link_generated,true);
        $trustpilotLink = $link_generated['url'];

        return new JsonResponse(['tp_link' => $trustpilotLink]);
    }

}
