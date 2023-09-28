<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Math component
 */
class MathComponent extends Component
{
    public function add($a=3, $b=2)
    {
        echo($a + $b);
    }
}
