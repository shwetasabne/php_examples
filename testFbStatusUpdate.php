<?php

class TestLogin extends PHPUnit_Extensions_Selenium2TestCase {

	public function setUp()
	{
		$this->setHost('localhost');
		$this->setPort(4444);
		$this->setBrowser('firefox');
		$this->setBrowserUrl('http://www.google.com');
	}
	
	public function testCanAccess(){
		
		$this->url('http://www.facebook.com');
		sleep(30);
	    // setElementText
	    $element = $this->byId("email");
	    $element->click();
	    $element->clear();
	    $element->value("sheer_shweta@yahoo.co.in");
	    // setElementText
	    $element = $this->byId("pass");
	    $element->click();
	    $element->clear();
	    $element->value("Dunder31*");
	    // clickElement
	    $this->byId("u_0_n")->click();
	    // clickElement
	    $this->byLinkText("Shweta")->click();
		sleep(30);
	    $element = $this->byId("u_jsonp_2_r");
	    $element->click();
	    $element->clear();
	    $element->value("Trying once more... just to make sure my script's good and it's not a fluke !!!");
	    // clickElement
	    $this->byXPath("//div[@class='_2yg']//button[.='Post']")->click();
		
	}

}