<?php
/**
 * Tests for NodeNet
 */

use PHPUnit\Framework\TestCase;
use Nodenet\Nodenet;

class NodenetTest extends TestCase {
    private Nodenet $instance;

    protected function setUp(): void {
        $this->instance = new Nodenet(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodenet::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
