<?php


namespace app\api\controller;

use Ehua\Caiji\Selenum;
use Facebook\WebDriver\WebDriverBy;

require "vendor/autoload.php";
class Temp
{

    static function init()
    {
        for ($i = 0; $i < 100; $i++) {

            $data['email'] = rand(1000000, 99999999) . '@qq.com';
            $driver = Selenum::init();
            $driver->get('http://i66.duokuai02.com:5658/invite?code=lsmp3Ifs');
            $driver->findElement(WebDriverBy::xpath('//*[@id="email"]'))->sendKeys($data['email']);
            $driver->findElement(WebDriverBy::xpath('//*[@id="passwd"]'))->sendKeys($data['email']);
            $driver->findElement(WebDriverBy::xpath('//*[@id="repasswd"]'))->sendKeys($data['email']);
            $driver->findElement(WebDriverBy::xpath('//*[@id="register-confirm"]'))->click();

            sleep(5);
            $driver->close();
        }

    }
}
Temp::init();