<?php
/* dummy root object */
require_once "restful.php";

date_default_timezone_set("UTC");

class Backend extends DefaultIRest {
    public static function instance() {
        static $instance;
        if (!($instance instanceof self))
            $instance = new self();
        return $instance; 
    }

    protected function __construct() {
    }
};
?>