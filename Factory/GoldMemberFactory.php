<?php
namespace Factory;

class GoldMemberFactory implements IFactory{
    public function make(){
        return new GoldMember();
    }
}