<?php

class Man extends Human {
    
    protected $height,$weight;

    public function __construct($name, $age) {
        parent::__construct('man');
        $this->name = $name;
        $this->age = $age;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_age() {
        return $this->age;
    }

    public function get_type() {
        return $this->type;
    }
    
    public function set_height($height) {
        $this->height = $height;
    }
    
    public function get_height() {
        return $this->height;
    }

}
