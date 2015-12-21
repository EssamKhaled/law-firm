<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Layout {

    private $obj;
    private $layout_view;
    private $data_list = array();
    private $block_list, $block_new, $block_replace = false;

    function Layout() {
        $this->obj = & get_instance();
        $this->layout_view = "frontend/Layout.php";
        // Grab layout from called controller
        if (isset($this->obj->layout_view))
            $this->layout_view = $this->obj->layout_view;
    }

    function view($view, $data = null, $return = false) {
        $data['content'] = $this->obj->load->view($view, $data, true);

        // inject data resources
        foreach ($this->data_list as $v) {
            foreach ($v as $key => $value) {
                $data[$key] = $value;
            }
        }

        // Render template
        $this->block_replace = true;
	    echo $this->obj->load->view('frontend/layout', $data, true);
    }

    /**
     * Adds Date resource to current page
     * @param $item
     */
    function data($item) {
        $this->data_list[] = $item;
    }

    /**
     * inherit template block
     *
     * @param string $name
     */
    function block($name = '') {        
        if ($name != '') {
            $this->block_new = $name;
            ob_start();
        } else {
            if ($this->block_replace) {
                // If block was overriden in template, replace it in layout
                if (!empty($this->block_list[$this->block_new])) {
                    ob_end_clean();
                    echo $this->block_list[$this->block_new];
                }
            } else {
                $this->block_list[$this->block_new] = ob_get_clean();
            }
        }
    }

}
