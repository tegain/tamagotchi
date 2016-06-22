<?php

namespace Gheb\Fish\FishBundle\Services;

use Gheb\Fish\FishBundle\Entity\Fish;

/**
 * Class PlayfullEffect
 * @author  Grégoire Hébert <gregoire@opo.fr>
 * @package Gheb\Fish\FishBundle\Services
 */
class PlayfullObligation extends AbstractLifeObligation
{
    public function applyEffect(Fish &$fish)
    {
        if ($fish->getPlayfull() >= 8) {
            $fish->setHealth($fish->getHealth() - 1);
            $this->application .= 'Playfull >= 8 :'."\t".' -1 Health'."\n";
        }
    }
}