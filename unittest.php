<?php
require_once 'test.php';
use PHPUnit\Framework\TestCase;
class UnitTest extends TestCase {
    public function testRevertCharacters(){
        $this->assertEquals("атекна,ремирП отэ",revertCharacters('это Пример,анкета'));
    }
}
?>