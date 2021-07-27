<?php

require "libs/rb-mysql.php";

R::setup( 'mysql:host=localhost;dbname=GoodFood',
    'root', 'root' );

session_start();