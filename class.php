<?php

    class person{

        var $name = "Ade";

        function set_name($new_name){
            $this->name = $new_name;
        } 

        function get_name(){
            return $this->name;
        }

    }

?>