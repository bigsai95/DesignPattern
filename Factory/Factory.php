<?php
namespace Factory;

class Factory {
    public static function build($type){
        switch ($type) {
            case "Member":
                return new Member();
                break;
            case "Designer":
                return new Designer();
                break;
        }
    }
}