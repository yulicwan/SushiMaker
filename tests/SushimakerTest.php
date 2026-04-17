<?php
/**
 * Tests for SushiMaker
 */

use PHPUnit\Framework\TestCase;
use Sushimaker\Sushimaker;

class SushimakerTest extends TestCase {
    private Sushimaker $instance;

    protected function setUp(): void {
        $this->instance = new Sushimaker(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sushimaker::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
