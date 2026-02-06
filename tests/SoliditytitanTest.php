<?php
/**
 * Tests for solidityTitan
 */

use PHPUnit\Framework\TestCase;
use Soliditytitan\Soliditytitan;

class SoliditytitanTest extends TestCase {
    private Soliditytitan $instance;

    protected function setUp(): void {
        $this->instance = new Soliditytitan(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditytitan::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
