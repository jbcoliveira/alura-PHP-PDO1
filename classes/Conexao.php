<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author joao
 */
class Conexao {
    public static function conectar(){
        return new PDO('mysql:host=127.0.0.1;dbname=estoque', 'root', '123456');
    }
}
