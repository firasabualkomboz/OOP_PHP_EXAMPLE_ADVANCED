<?php
setcookie('name','thecode',time() + 60 , '/');

echo '<pre>';

var_dump($_COOKIE);

echo '</pre>';
