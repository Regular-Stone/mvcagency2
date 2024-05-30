<?php
    if($_SERVER['SERVER_NAME'] == 'localhost'){
        define('ROOT', 'http://localhost/mvcagency/');
    } else if ($_SERVER['SERVER_NAME'] == 'mvcagency.herokuapp.com'){
        define('ROOT', 'https://mvcagency.herokuapp.com/');
    }