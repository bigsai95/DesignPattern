<?php
namespace Factory;

class MemberFactory implements IFactory {
    public function make(){
        return new Member();
    }
}