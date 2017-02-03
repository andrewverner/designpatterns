<pre>
<?php
/**
 * Created by PhpStorm.
 * User: Denis.Khodakovskiy
 * Date: 03.02.17
 * Time: 0:32
 */

spl_autoload_register(function ($className) {
    if (file_exists("{$className}.php")) require "{$className}.php";
});


