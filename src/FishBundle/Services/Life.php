<?php

namespace FishBundle\Services;

use Doctrine\Common\Collections\ArrayCollection;
use FishBundle\Entity\Fish;

/**
 * Class Life
 *
 * @author  Grégoire Hébert <gregoire@opo.fr>
 */
class Life
{
    /**
     * @var ArrayCollection
     */
    private $obligations;

    public function __construct()
    {
        $this->obligations = new ArrayCollection();
    }

    /**
     * Add a life obligation
     *
     * @param $obligation
     */
    public function addObligation($obligation)
    {
        if (!$this->obligations->contains($obligation)) {
            $this->obligations->add($obligation);
        }
    }

    public function applyEffect(Fish $fish)
    {
        if ($fish->getHealth() == 0) {
            return;
        }

        foreach ($this->obligations as $obligation) {
            if ($obligation instanceof AbstractLifeObligation) {
                $obligation->applyEffect($fish);
            }
        }
    }
}