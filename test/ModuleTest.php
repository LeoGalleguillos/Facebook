<?php
namespace LeoGalleguillos\FacebookTest;

use LeoGalleguillos\Facebook\Module;
use PHPUnit\Framework\TestCase;

class ModuleTest extends TestCase
{
    protected function setUp()
    {
        $this->module = new Module();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(Module::class, $this->module);
    }
}
