<?php

declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\PagesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\PagesController Test Case
 *
 * @uses \App\Controller\PagesController
 */
class PagesControllerTest extends TestCase {
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Pages',
    ];
}
