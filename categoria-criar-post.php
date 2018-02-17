<?php
 require_once './classes/Categoria.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$categoria = new Categoria();
$categoria->nome = filter_input(INPUT_POST,'nome');
$categoria->inserir();
header('Location:categorias.php');