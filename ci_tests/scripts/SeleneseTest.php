<?php

class SeleneseTests extends PHPUnit_Extensions_SeleniumTestCase{
    // set html test directory
    public static $seleneseDirectory = './html/';

    protected function setUp(){
        $this->setHost('127.0.0.1');
        $this->setPost(4444);
        $this->setBrowser('*firefox');
        $this->setBrowserUrl('http://localhost:8080');
        $this->setTimeout(100);
    }

    public function testSeleniumFile(){
        $this->open('http://localhost:8080');
        $this->runSelenese('sample_test_case.html');
    }
}