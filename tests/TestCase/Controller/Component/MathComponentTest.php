<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\MathComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\MathComponent Test Case
 */
class MathComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\MathComponent
     */
    public $Math;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $controller = new Controller();
        $registry = new ComponentRegistry();
        $this->Math = new MathComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Math);

        parent::tearDown();
    }
    public function testAdd()
    {
        $result = $this->Math->add(2, 3);
        $this->assertEquals(5, $result);
    }
}
