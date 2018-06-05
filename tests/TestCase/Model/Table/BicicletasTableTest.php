<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BicicletasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BicicletasTable Test Case
 */
class BicicletasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BicicletasTable
     */
    public $Bicicletas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bicicletas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bicicletas') ? [] : ['className' => BicicletasTable::class];
        $this->Bicicletas = TableRegistry::getTableLocator()->get('Bicicletas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bicicletas);

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

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
