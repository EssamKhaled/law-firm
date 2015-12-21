<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Compress {

    public function index() {
        $CI = & get_instance();
        $buffer = $CI->output->get_output();

        $search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s', '#(?://)?<!\[CDATA\[(.*?)(?://)?\]\]>#s');
        $replace = array('>', '<', '\\1', "//&lt;![CDATA[\n" . '\1' . "\n//]]>");

        $buffer = preg_replace($search, $replace, $buffer);

        $CI->output->set_output($buffer);
        $CI->output->_display();
    }

}

