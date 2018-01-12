<?php

namespace FishBundle\Entity;

/**
 * Class Fish
 *
 * @author  Grégoire Hébert <gregoire@opo.fr>
 */
class Fish
{
    /**
     * @var int
     */
    private $health;

    /**
     * @var int
     */
    private $hunger;

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $lifeTick;

    /**
     * @var int
     */
    private $playfull;

    /**
     * @var int
     */
    private $sleepiness;

    public function __construct()
    {
        $this->health     = 300;
        $this->hunger     = 3;
        $this->sleepiness = 3;
        $this->playfull   = 3;
        $this->lifeTick   = 0;
    }

    public function addLifeTick(): void
    {
        $this->lifeTick++;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @return int
     */
    public function getHunger(): int
    {
        return $this->hunger;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getLifeTick(): int
    {
        return $this->lifeTick;
    }

    /**
     * @return int
     */
    public function getPlayfull(): int
    {
        return $this->playfull;
    }

    /**
     * @return int
     */
    public function getSleepiness(): int
    {
        return $this->sleepiness;
    }

    /**
     * @param int $health
     */
    public function setHealth($health): void
    {
        $this->health = min(300, max(0, $health));
    }

    /**
     * @param int $hunger
     */
    public function setHunger($hunger): void
    {
        $this->hunger = min(10, max(0, $hunger));
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param $lifeTick
     */
    public function setLifeTick($lifeTick): void
    {
        $this->lifeTick = $lifeTick;
    }

    /**
     * @param int $playfull
     */
    public function setPlayfull($playfull): void
    {
        $this->playfull = min(10, max(0, $playfull));
    }

    /**
     * @param int $sleepiness
     */
    public function setSleepiness($sleepiness): void
    {
        $this->sleepiness = min(10, max(0, $sleepiness));
    }
}
