<?php
class Fruit {
    final public function intro() {

    }
}

class Stawberry extends Fruit {
    // will result in error
    public function intro() {

    }
}