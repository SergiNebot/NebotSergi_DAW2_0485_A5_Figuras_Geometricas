<?php
class Figura {
    function set_figura(){
        $this->figura = $_SESSION['figura'];
    }

    function get_figura(){
        return $this->figura;
    }
}
?>