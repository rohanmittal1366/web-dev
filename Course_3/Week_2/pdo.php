<?php

/**
 * Created by PhpStorm.
 * User: cuiziang
 * Date: 2018-06-04
 * Time: 8:13 PM
 */

$pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=course', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
