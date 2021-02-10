<?php

class Character {
    private int $_health;
    private int $_mana;
    private $_Stuff;

    public function __construct() {
        $this->_stuff = new Stuff();
    }

    public function __destruct() {

    }

    public function chat(string $charac) {
        return $charac;

    }

}


class Orc extends Character {

    private int $_healt = 1000;

    public function useHammer () {
        return true;
    }

    public function useSword () {
        return true;
    }

}


class Stuff {
    private string $_head;
    private string $_body;
    private string $_weapon;

    public function __construct() {
    }

    public function view () {
        return '';
    }

    public function __destruct() {
    }
}


?>