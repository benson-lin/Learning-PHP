<?php

namespace MessageTest\Email;


class EmailSend {

    public static function sendEmail() {

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://baidu.com');
        echo $res->getStatusCode();
        echo $res->getHeaderLine('content-type');
        echo $res->getBody();
    }
}