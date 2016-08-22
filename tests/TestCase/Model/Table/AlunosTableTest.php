<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlunosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlunosTable Test Case
 */
class AlunosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AlunosTable
     */
    public $Alunos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.alunos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Alunos') ? [] : ['className' => 'App\Model\Table\AlunosTable'];
        $this->Alunos = TableRegistry::get('Alunos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Alunos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
