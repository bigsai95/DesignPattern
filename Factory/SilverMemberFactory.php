<?php
namespace Factory;

class SilverMemberFactory implements IFactory{
    public function make(){
        return new SilverMember();
    }
}