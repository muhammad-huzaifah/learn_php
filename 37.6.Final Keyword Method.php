<?php
class Fruit {
    final public function intro() {

    }
}

class Strawberry extends Fruit {
    // will result in error
    public function intro() {

    }
}