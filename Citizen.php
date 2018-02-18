<?php

class Citizen extends European implements American {

    private $country;

    public function get_id() {
        
    }

    public function get_birthplace() {
        
    }

    public function set_country() {
        $this->country = 'USA';
    }

}
