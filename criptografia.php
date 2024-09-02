<?php
$senha='123456';

echo $senha."<br>";

echo "MD5 :<br>";
echo md5($senha)."<br><hr>";

echo "HASH :<br>";
$hash=password_hash($senha,PASSWORD_DEFAULT);
echo $hash;



?>