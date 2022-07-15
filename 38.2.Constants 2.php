<?php
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for vising W3Schools.com!";
    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye();
$goodbye->byebye();