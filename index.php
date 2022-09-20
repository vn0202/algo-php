<?php
include  "vendor/autoloader.php";
$question = new \vendor\Question("vu van Nghia","Nguyen Khanh Huyen");

$test = new \vendor\QuestionsList();

var_dump($test->parse('question.md')->getAll());

