<?php

class SeleneseTests extends PHPUnit_Extensions_SeleniumTestCase{

    protected function setUp(){
        $this->setHost('127.0.0.1');
        $this->setPort(4444);
        $this->setBrowser('*firefox');
        $this->setBrowserUrl('http://localhost:8080');
        $this->setTimeout(100);
    }

    public function testSeleniumFile(){
        $this->open('http://localhost:8080');
        $this->assertEquals("CakePHP: the rapid development php framework: Home", implode(',', $this->getAllWindowTitles()));
        try{
            $this->assertEquals("CakePHP: the rapid development php framework: Home", implode(',', $this->getAllWindowTitles()));
        } catch(PHPUnit_Framework_AssertionFailedError $e){
            array_push($this->verificationErrors, $e->toString());
        }
    }
}