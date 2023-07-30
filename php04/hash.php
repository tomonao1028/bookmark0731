<?php

$pw = password_hash('test', PASSWORD_DEFAULT);
echo$pw;
echo"<br>";
var_dump(password_verify('test1',$pw));
