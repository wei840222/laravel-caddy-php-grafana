<?php
    $mysqli = new mysqli("mysql", "root", "root", "test");
    $name=substr(md5(rand()),0,6);
    $result = $mysqli->query("INSERT INTO `test` (`id`, `name`, `gender`) VALUES (NULL, '".$name."', '1')");
?>