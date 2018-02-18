<?php

class Human {

    public static $count = 0;

    public function __construct($type) {
        echo '<br />' . __CLASS__ . ' just initiated<br />';
        $this->type = $type;
    }

    //called when end of file reaced or object destroyed using unset method
    public function __destruct() {
        echo '<br />' . __CLASS__ . ' just destroyed<br />';
    }

    public static function get_count() {
        return ++self::$count;
    }

}
