<?php
/**
 * Created by PhpStorm.
 * User: geoffrey.polan
 * Date: 28/11/17
 * Time: 08:33
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Potion
 * @ORM\Entity
 * @ORM\Table(name="potion")
 */
class Potion
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @var string
     * @ORM\Column(type="string", length=40)
     */
    protected $name;
    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $heathLimit;
    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $healthPoint;

    public function __construct(string $name,int $heathLimit,int $healthPoint)
    {
        $this->name = $name;
        $this->heathLimit = $heathLimit;
        $this->healthPoint = $healthPoint;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getHeathLimit(): int
    {
        return $this->heathLimit;
    }

    /**
     * @param int $heathLimit
     */
    public function setHeathLimit(int $heathLimit)
    {
        $this->heathLimit = $heathLimit;
    }

    /**
     * @return int
     */
    public function getHealthPoint()
    {
        return $this->healthPoint;
    }

    /**
     * @param int $healthPoint
     */
    public function setHealthPoint($healthPoint)
    {
        $this->healthPoint = $healthPoint;
    }

}