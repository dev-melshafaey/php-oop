<?php

abstract class European {

    protected $currency;

    abstract function set_country();

    protected function set_currency() {
        $this->currency = 'Euro';
    }

}
