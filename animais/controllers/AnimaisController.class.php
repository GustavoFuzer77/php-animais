<?php
require_once "controllers/DAO/AnimaisDAO.class.php";
class AnimaisController
{

    public function listar()
    {

        $animaisDAO = new AnimaisDAO();
        $data = $animaisDAO->listarAnimais();

        require_once "views/animais.php";
    }
}