<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="weapon")
 */
class Weapon
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $damage;

    /**
     * @ORM\Column(type="decimal")
     */
    protected $damageDistanceCoef;

    /**
     * @ORM\Column(type="integer")
     */
    protected $fireRate;

    public function __construct(string $name, int $damage, float $damageRangeCoef, int $fireRate)
    {
        $this->name = $name;
        $this->damage = $damage;
        $this->damageDistanceCoef = $damageRangeCoef;
        $this->fireRate = $fireRate;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function getDamageDistanceCoef(): float
    {
        return $this->damageDistanceCoef;
    }

    public function getFireRate(): int
    {
        return $this->fireRate;
    }
}
