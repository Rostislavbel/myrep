<?php 
header('Content-Type: text/html; charset=utf-8');

require_once 'a.php';
require_once 'b.php';
require_once 'EmailAddress.php';
use A\subA\A as new_name;

A\A::say();
echo '<br>';
B\A::say();
new_name::say();
B\A::give();

use ZZZ\Validator\EmailAddress as  EmailAddress; 
$s= new EmailAddress;


?> 