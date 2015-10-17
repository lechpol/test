<?php
/**
 * Created by PhpStorm.
 * User: hubert
 * Date: 17.10.15
 * Time: 11:40
 */
 error_reporting(E_ALL);
 ini_set('dispaly_errors', 1);

require_once 'vendor/Employee.php';
echo 'Hubert';
spl_autoload_register('AutoLoder');
/**
 *
 * @param $className
 */

function AutoLoader($className)
{
    $class= str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once 'vendor/'.$class.'.php';
}
$jon =new Employee("Jon", "smith", 22, Employee::GENDER_FEMALE);
echo $jon->hello();
