<?php
require_once 'test.php';
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase {
    public function testRevertCharacters(){
        $this->assertEquals("Тевирп! Онвад ен ьсиледив",revertCharacters("Привет! Давно не виделись"));
    }
}
?>