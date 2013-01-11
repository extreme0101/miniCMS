<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TEventPaid
 *
 * @ORM\Table(name="t_event_paid")
 * @ORM\Entity
 */
class TEventPaid extends \Model
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
     * @var integer
     *
     * @ORM\Column(name="event_id", type="integer", nullable=false)
     */
    private $eventId;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=255, nullable=true)
     */
    private $currencyCode;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="how_to_buy", type="string", nullable=true)
     */
    private $howToBuy;

    /**
     * @var string
     *
     * @ORM\Column(name="where_to_buy_location_code", type="string", length=255, nullable=true)
     */
    private $whereToBuyLocationCode;


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
     * Set eventId
     *
     * @param integer $eventId
     * @return TEventPaid
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * Get eventId
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set currencyCode
     *
     * @param string $currencyCode
     * @return TEventPaid
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currencyCode
     *
     * @return string 
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return TEventPaid
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set howToBuy
     *
     * @param string $howToBuy
     * @return TEventPaid
     */
    public function setHowToBuy($howToBuy)
    {
        $this->howToBuy = $howToBuy;

        return $this;
    }

    /**
     * Get howToBuy
     *
     * @return string 
     */
    public function getHowToBuy()
    {
        return $this->howToBuy;
    }

    /**
     * Set whereToBuyLocationCode
     *
     * @param string $whereToBuyLocationCode
     * @return TEventPaid
     */
    public function setWhereToBuyLocationCode($whereToBuyLocationCode)
    {
        $this->whereToBuyLocationCode = $whereToBuyLocationCode;

        return $this;
    }

    /**
     * Get whereToBuyLocationCode
     *
     * @return string 
     */
    public function getWhereToBuyLocationCode()
    {
        return $this->whereToBuyLocationCode;
    }
}
