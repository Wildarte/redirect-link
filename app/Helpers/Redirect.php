<?php


class Redirect{

    public static function url($url){

        header('Location: '.URL.$url.'');

    }

}