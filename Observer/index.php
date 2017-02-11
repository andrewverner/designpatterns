<pre>
<?php
/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 09.02.17
 * Time: 17:22
 */

spl_autoload_register(function ($className) {
    if (file_exists("{$className}.php")) require "{$className}.php";
});

$smsObserver = new SMSObserver();
$emailObserver = new EmailObserver();

$product1 = new Product('Milk');
$product1->attachObserver($smsObserver);
$product1->attachObserver($emailObserver);

$product2 = new Product('Bread');
$product2->attachObserver($smsObserver);

$product1->setDiscount(10);
$product2->setDiscount(12);

//SMS: Milk has a discount of 10%
//Email: Milk has a discount of 10%
//SMS: Bread has a discount of 12%
