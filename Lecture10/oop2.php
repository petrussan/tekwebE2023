<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    class RestoMenu {
        //properties
        private $name;
        private $price;

        //constructor
        //function __construct($name, $price) {
        //    $this->name = $name;
        //    $this->price = $price;
        //}

        //destructor
        //function __destruct() {

        //}

        //methods
        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }

        function set_price($price){
            $this->price = $price;
        }

        function get_price(){
            return $this->price;
        }
    }

    class FoodMenu extends RestoMenu {
        public $kategori = "Makanan";
        public $icon = "./img/food.jpg";
    }

    class DrinkMenu extends RestoMenu {
        public $kategori = "Minuman";
        public $icon = "./img/drink.png";
    }

    class SnackMenu extends RestoMenu {
        public $kategori = "Snack";
        public $icon = "./img/snack.png";
    }


    $menu1 = new FoodMenu();
    $menu1->set_name("Mie Goreng");
    $menu1->set_price(15000);

    echo "<img src='". $menu1->icon . "'>";
    echo "Kategori: ". $menu1->kategori;
    echo "<BR>";
    echo "Menu 1: ".$menu1->get_name();
    echo "<BR>";
    echo "Harga: Rp ".$menu1->get_price();
    echo "<P>";

    var_dump($menu1);
    echo "<P>";
    var_dump($menu1 instanceof RestoMenu);


?>    
</body>
</html>
