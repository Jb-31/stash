<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TicketRepository")
 */
class Ticket
{

    const DEMAND_FROM_LIST = ['TCHAT ONLINE', 'TCHAT OFFLINE','MAIL', 'TELEPHONE'];
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User",inversedBy="tickets")
     * @ORM\JoinColumn(name="grc_user_id",referencedColumnName="id")
     */
    private $grc_user;

    /**
     * @var Eternity
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Eternity",inversedBy="tickets")
     * @ORM\JoinColumn(name="eternity_id",referencedColumnName="id")
     */
    private $eternity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255)
     */
    private $source;


    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cb_lastNumbers", type="integer", nullable=true)
     */
    private $cbLastNumbers;

    /**
     * @var int
     *
     * @ORM\Column(name="cb_exp_month", type="smallint",nullable=true)
     */
    private $cbExpMonth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cb_exp_year", type="smallint", nullable=true)
     */
    private $cbExpYear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="text", nullable=true)
     */
    private $comments;

    /**
     * @var float
     *
     * @ORM\Column(name="refunded_amount", type="float")
     */
    private $refundedAmount;

    /**
     * @var bool
     *
     * @ORM\Column(name="was_unsuscribed", type="boolean")
     */
    private $wasUnsuscribed;

    /**
     * @var string
     *
     * @ORM\Column(name="logs", type="text")
     */
    private $logs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="matched_user_id", type="integer", nullable=true)
     */
    private $matchedUserId;


    public function __construct(){
        $this->createdAt = new \DateTime();
        $this->comments ='';
        $this->refundedAmount=0;
        $this->wasUnsuscribed=false;
        $this->logs = '';
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Ticket
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set source.
     *
     * @param string $source
     *
     * @return Ticket
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }



    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Ticket
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cbLastNumbers.
     *
     * @param int|null $cbLastNumbers
     *
     * @return Ticket
     */
    public function setCbLastNumbers($cbLastNumbers = null)
    {
        if($cbLastNumbers != '' && is_integer($cbLastNumbers)){
            $this->cbLastNumbers = $cbLastNumbers;
        }


        return $this;
    }

    /**
     * Get cbLastNumbers.
     *
     * @return int|null
     */
    public function getCbLastNumbers()
    {
        return $this->cbLastNumbers;
    }

    /**
     * Set cbExpMonth.
     *
     * @param int $cbExpMonth
     *
     * @return Ticket
     */
    public function setCbExpMonth($cbExpMonth)
    {
        $this->cbExpMonth = $cbExpMonth;

        return $this;
    }

    /**
     * Get cbExpMonth.
     *
     * @return int
     */
    public function getCbExpMonth()
    {
        return $this->cbExpMonth;
    }

    /**
     * Set cbExpYear.
     *
     * @param int|null $cbExpYear
     *
     * @return Ticket
     */
    public function setCbExpYear($cbExpYear = null)
    {
        $this->cbExpYear = $cbExpYear;

        return $this;
    }

    /**
     * Get cbExpYear.
     *
     * @return int|null
     */
    public function getCbExpYear()
    {
        return $this->cbExpYear;
    }

    /**
     * Set comments.
     *
     * @param string|null $comments
     *
     * @return Ticket
     */
    public function setComments($comments = null)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments.
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set refundedAmount.
     *
     * @param float $refundedAmount
     *
     * @return Ticket
     */
    public function setRefundedAmount($refundedAmount)
    {
        $this->refundedAmount = $refundedAmount;

        return $this;
    }

    /**
     * Get refundedAmount.
     *
     * @return float
     */
    public function getRefundedAmount()
    {
        return $this->refundedAmount;
    }

    /**
     * Set wasUnsuscribed.
     *
     * @param bool $wasUnsuscribed
     *
     * @return Ticket
     */
    public function setWasUnsuscribed($wasUnsuscribed)
    {
        $this->wasUnsuscribed = $wasUnsuscribed;

        return $this;
    }

    /**
     * Get wasUnsuscribed.
     *
     * @return bool
     */
    public function getWasUnsuscribed()
    {
        return $this->wasUnsuscribed;
    }

    /**
     * Set logs.
     *
     * @param string $logs
     *
     * @return Ticket
     */
    public function setLogs($logs)
    {
        $this->logs = $logs;

        return $this;
    }

    public function addLog($log){
        $this->logs.='
        '.date('d/m/Y H:i:s').' '.$log;
    }

    /**
     * Get logs.
     *
     * @return string
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Set matchedUserId.
     *
     * @param int|null $matchedUserId
     *
     * @return Ticket
     */
    public function setMatchedUserId($matchedUserId = null)
    {
        $this->matchedUserId = $matchedUserId;

        return $this;
    }

    /**
     * Get matchedUserId.
     *
     * @return int|null
     */
    public function getMatchedUserId()
    {
        return $this->matchedUserId;
    }


    public function setGrcUser(User $user){
        if($user === null){
            if($this->grc_user !== null){
                $this->grc_user->getTickets()->removeElement($this);
            }
            $this->grc_user = null;
        }else{
            if(!$user instanceof User){
                throw new InvalidArgumentException('$group must be null or instance of AppBundle\User');
            }

            if($this->grc_user !== null){
                $this->grc_user->getTickets()->removeElement($this);
            }

            $this->grc_user = $user;
            $user->getTickets()->add($this);
        }
    }

    public function getGrcUser(){
        return $this->grc_user;
    }

    public function setEternity(Eternity $eternity){
        if($eternity === null){
            if($this->eternity !== null){
                $this->eternity->getTickets()->removeElement($this);
            }
            $this->eternity = null;
        }else{
            if(!$eternity instanceof Eternity){
                throw new InvalidArgumentException('$group must be null or instance of AppBundle\User');
            }

            if($this->eternity !== null){
                $this->eternity->getTickets()->removeElement($this);
            }

            $this->eternity = $eternity;
            $eternity->getTickets()->add($this);
        }
    }

    public function getEternity(){
        return $this->eternity;
    }
}
