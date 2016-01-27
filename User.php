<?php
/**
 * Created by PhpStorm.
 * User: jlaouadi
 * Date: 26/01/2016
 * Time: 11:56
 */


class User {
    protected $name;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function talk() {
        return "Hello world!!!";
    }

}