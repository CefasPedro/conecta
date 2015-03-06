<?php
/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 06/03/2015
 * Time: 16:38
 */

namespace CefasPedro\Conecta;


class Conecta extends \PDO {

    private static $instancia;

    /* public function Conn($dsn, $username = "", $password = "") {
         // O construtro abaixo é o do PDO
         parent::__construct($dsn, $username, $password);
     }*/

    public static function getInstance() {
        // Se o a instancia não existe eu faço uma
        if(!isset( self::$instancia )){
            try {
                self::$instancia = new Conn("mysql:host=localhost;dbname=banco", "root", "senha");
            } catch ( Exception $e ) {
                echo 'Erro ao conectar';
                exit ();
            }
        }
        // Se já existe instancia na memória eu retorno ela
        return self::$instancia;
    }
}
