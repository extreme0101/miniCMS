<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TPrivacy
 *
 * @ORM\Table(name="t_privacy")
 * @ORM\Entity
 */
class TPrivacy extends \Model
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="privacy_type", type="string", nullable=false)
     */
    private $privacyType;

    /**
     * @var string
     *
     * @ORM\Column(name="privacy_action", type="string", nullable=false)
     */
    private $privacyAction;

    /**
     * @var string
     *
     * @ORM\Column(name="privacy_action_value", type="text", nullable=false)
     */
    private $privacyActionValue;


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
     * Set code
     *
     * @param string $code
     * @return TPrivacy
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set privacyType
     *
     * @param string $privacyType
     * @return TPrivacy
     */
    public function setPrivacyType($privacyType)
    {
        $this->privacyType = $privacyType;

        return $this;
    }

    /**
     * Get privacyType
     *
     * @return string 
     */
    public function getPrivacyType()
    {
        return $this->privacyType;
    }

    /**
     * Set privacyAction
     *
     * @param string $privacyAction
     * @return TPrivacy
     */
    public function setPrivacyAction($privacyAction)
    {
        $this->privacyAction = $privacyAction;

        return $this;
    }

    /**
     * Get privacyAction
     *
     * @return string 
     */
    public function getPrivacyAction()
    {
        return $this->privacyAction;
    }

    /**
     * Set privacyActionValue
     *
     * @param string $privacyActionValue
     * @return TPrivacy
     */
    public function setPrivacyActionValue($privacyActionValue)
    {
        $this->privacyActionValue = $privacyActionValue;

        return $this;
    }

    /**
     * Get privacyActionValue
     *
     * @return string 
     */
    public function getPrivacyActionValue()
    {
        return $this->privacyActionValue;
    }
}
