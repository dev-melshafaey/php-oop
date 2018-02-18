<?php

function __autoload($class_name) {
    require_once $class_name . '.php';
}

$ahmed = new Man('ahmed', 25);
do {
    echo $ahmed->get_name() . ' and his number is ' . Human::get_count() . '<br>';
} while (Human::$count < 10);

$ahmed->set_height(177);
echo $ahmed->get_height();
