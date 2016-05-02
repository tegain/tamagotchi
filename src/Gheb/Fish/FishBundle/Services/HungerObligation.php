<?php

namespace Gheb\Fish\FishBundle\Services;

use Gheb\Fish\FishBundle\Entity\Fish;

/**
 * Class HungerEffect
 * @author  Grégoire Hébert <gregoire@opo.fr>
 * @package Gheb\Fish\FishBundle\Services
 */
class HungerObligation implements AbstractLifeObligation
{
    public static function applyEffect(Fish &$fish)
    {
        // As it's too low, it's getting worse for it's life
        if ($fish->getHunger() <= 2) {
            $fish->setHealth($fish->getHealth() - 5);
        }

        // As it's too high, it's getting worse for it's life
        if ($fish->getHunger() >= 8) {
            $fish->setHealth($fish->getHealth() - 5);
        }
    }
}