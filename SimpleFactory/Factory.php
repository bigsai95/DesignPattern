<?php
namespace SimpleFactory;

class Factory {
    public static function build($type){
        switch ($type) {
            case "Member":
                return new Member();
                break;
            case "Admin":
                return new Admin();
                break;
        }
    }
}