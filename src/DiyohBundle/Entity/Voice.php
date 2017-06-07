<?php

namespace DiyohBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voice
 *
 * @ORM\Table(name="voice")
 * @ORM\Entity(repositoryClass="DiyohBundle\Repository\VoiceRepository")
 */
class Voice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Discussion")
     * @ORM\JoinColumn(name="discussion_id", referencedColumnName="id")
     */
    private $discussionId;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    private $authorId;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="send_datetime", type="datetime")
     */
    private $sendDatetime;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set discussionId
     *
     * @param integer $discussionId
     * @return Voice
     */
    public function setDiscussionId($discussionId)
    {
        $this->discussionId = $discussionId;

        return $this;
    }

    /**
     * Get discussionId
     *
     * @return integer 
     */
    public function getDiscussionId()
    {
        return $this->discussionId;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Voice
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set authorId
     *
     * @param integer $authorId
     * @return Voice
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer 
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set sendDatetime
     *
     * @param \DateTime $sendDatetime
     * @return Voice
     */
    public function setSendDatetime($sendDatetime)
    {
        $this->sendDatetime = $sendDatetime;

        return $this;
    }

    /**
     * Get sendDatetime
     *
     * @return \DateTime 
     */
    public function getSendDatetime()
    {
        return $this->sendDatetime;
    }
}
