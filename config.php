<?php

@$db = mysqli_connect('localhost', 'root', '', 'text') or die('No connect to DB');
mysqli_set_charset($db, 'utf8') or die("Can't set sharset");

?>