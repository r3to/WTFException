<?php

class WTFException extends Exception
{

    public function __construct($message = null, $code = null)
    {
        if (! $message) {
            $message = "WTF!?";
        } else {
            $message = "WTF!? " . $message;
        }
        
        parent::__construct($message, $code);
    }
}

?>