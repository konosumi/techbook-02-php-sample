<?php
class DateTime {
    function __construct() { }
    public function example() { return "The DateTime Class"; }
}

// Fatal error: Cannot declare class DateTime, because the name is already in use in...
$datetime = new DateTime();
echo $datetime->example();
