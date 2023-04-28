<?php

require_once "controllers/DAO/AnimaisDAO.class.php";


class LinkAnimais implements Componente
{
   

    public function __construct()
    {
    }

    public function render()
    {
        echo "<a href='index.php?controle=AnimaisController&metodo=listar'>animais</a>";
    }
}