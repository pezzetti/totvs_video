<?php

/**
 * Created by PhpStorm.
 * User: rafaelpezzetti
 * Date: 14/09/17
 * Time: 19:36
 */

class DisplayHook
{
    public function captureOutput()
    {
        $this->CI =& get_instance();
        $output = $this->CI->output->get_output();
        if (ENVIRONMENT != 'testing') {
            echo $output;
        }
    }
}