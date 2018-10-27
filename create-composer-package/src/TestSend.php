<?php

use MessageTest\Email\EmailSend;

class TestSend {

    public function send()
    {
        EmailSend::sendEmail();
    }
}
$autoload =  '../vendor/autoload.php';
require $autoload;

$test = new TestSend();
$test->send();