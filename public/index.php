<?php

class Tabletop {

    private $color;
    private $material;
    private $height;
    private $width;

    function set_color($color) {
        $this->color = $color;
    }

    function set_material($material) {
        $this->material = $material;
    }

    function set_height($height) {
        $this->height = $height;
    }

    function set_width($width) {
        $this->width = $width;
    }

    function get_color() {
        return $this->color;
    }

    function get_material() {
        return $this->material;
    }

    function get_height() {
        return $this->height;
    }

    function get_width() {
        return $this->width;
    }
}

$mijntabletop = new Tabletop()
?>
