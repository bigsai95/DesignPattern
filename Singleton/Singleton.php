<?php
namespace Singleton;

/**
 * 獨體模式
 * Class Singleton
 *
 * @package Singleton
 */
class Singleton
{
    private $conut;
    private static $instance;

    private function __construct() {
        $this->conut = 0 ;
    }

    public static function getInstance() {
        if ( empty( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function add() {
        $this->conut++;
    }

    public function get() {
        return $this->conut;
    }
}
