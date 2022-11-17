<?php
require_once 'test.php';
require_once 'PHPUnit/Autoload.php';
use PHPUnit\Framework\TestCase;
class MyClassTest extends TestCase {
    public function testRevertCharacters(){
        $tst=new StringReverse();
        $this->assertEquals("атекна,ремирП отэ",$tst->revertCharacters('это Пример,анкета'));
    }
}
?>