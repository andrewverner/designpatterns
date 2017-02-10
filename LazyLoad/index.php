<?php
/**
 * Created by PhpStorm.
 * User: dkhodakovskiy
 * Date: 10.02.17
 * Time: 17:18
 */

require_once 'Product.php';

Product::getProduct('Product 1');
Product::getProduct('Product 2');
Product::getProduct('Product 1');
Product::getProduct('Product 3');
Product::getProduct('Product 2');
Product::getProduct('Product 4');
Product::getProduct('Product 4');
Product::getProduct('Product 3');
Product::getProduct('Product 1');

//Product 1 is undefined. Initializing...
//Product 2 is undefined. Initializing...
//Product 1 already exists
//Product 3 is undefined. Initializing...
//Product 2 already exists
//Product 4 is undefined. Initializing...
//Product 4 already exists
//Product 3 already exists
//Product 1 already exists
