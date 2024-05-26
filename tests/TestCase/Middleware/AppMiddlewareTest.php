<?php
declare(strict_types=1);

namespace App\Test\TestCase\Middleware;

use App\Middleware\AppMiddleware;
use Cake\TestSuite\TestCase;

/**
 * App\Middleware\AppMiddleware Test Case
 */
class AppMiddlewareTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Middleware\AppMiddleware
     */
    protected $App;

    /**
     * Test process method
     *
     * @return void
     * @uses \App\Middleware\AppMiddleware::process()
     */
    public function testProcess(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
