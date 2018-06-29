<?php

class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \AcceptanceTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $this->tester->wantTo('ensure that home page works');
        $this->tester->amOnPage('/');
        $this->tester->seeElement('body');
        $this->tester->see('Docker nginx server with php-fpm');
        $this->tester->makeScreenshot('success-home');
    }
}