<?php

class View {

    protected $data = array();
    protected $path;
    private $output;

    public function View ($path, $data) {

        $this->set_path($path);
        $this->set_data($data);
    }


    private function set_path ($path) {

        if ($path) {
            $this->path = $path;
        }
    }

    public function set_data ($data) {

        if (is_array($data)) {
            $this->data = array_merge($this->data, $data);
        }
    }


    public function get ($data = array()) {

        $this->set_data($data);
        extract($this->data);

        ob_start();
        
            include dirname(__FILE__) . '/../views/' . $this->path;
            $this->output = ob_get_contents();
        
        ob_end_clean();

        return $this->output;
    }
    
}

/*
 * Shortcut for fast implementation
 */
function get_view ($path, $data = array()) {
    $v = new View($path, $data);
    return $v->get();
}

?>