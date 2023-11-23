<?php

class Tabletop {

    private string $color;
    private string $material;
    protected int $height;
    protected int $width;

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

class Vrachtwagen extends Tabletop {

    private int $laadvermogen;
    private string $lading;

    function set_laadvermogen($laadvermogen) {
        $this->laadvermogen = $laadvermogen;
    }

    function set_lading($lading) {
        $this->lading = $lading;
    }

    function get_laadvermogen() {
        return $this->laadvermogen;
    }

    function get_lading() {
        return $this->lading;
    }

    function set_height($height) {
        $this->height = $height / 2;
    }

    function set_width($width) {
        $this->width = $width / 2;
    }

    function voeg_lading_toe($hoeveelheid) {
        echo "Lading toegevoegd: $hoeveelheid kg<br>";
    }

    function verwijder_lading($hoeveelheid) {
        echo "Lading verwijderd: $hoeveelheid kg<br>";
    }
}

$vrachtwagen = new Vrachtwagen();

$vrachtwagen->set_color("Blauw");
$vrachtwagen->set_material("Staal");
$vrachtwagen->set_height(200);
$vrachtwagen->set_width(400);
$vrachtwagen->set_laadvermogen(5000);
$vrachtwagen->set_lading("Pakketten");

echo "Overschreven height: " . $vrachtwagen->get_height() . "<br>";
echo "Overschreven width: " . $vrachtwagen->get_width() . "<br>";

$vrachtwagen->voeg_lading_toe(1000);
$vrachtwagen->verwijder_lading(500);

echo "Color: " . $vrachtwagen->get_color() . "<br>";
echo "Material: " . $vrachtwagen->get_material() . "<br>";
echo "Laadvermogen: " . $vrachtwagen->get_laadvermogen() . " kg<br>";
echo "Lading: " . $vrachtwagen->get_lading() . "<br>";
?>
