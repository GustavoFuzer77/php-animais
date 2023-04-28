<?php

require_once "models/Conexao.php";
class AnimaisDAO extends Conexao
{

    public function __construct()
    {
        parent::__construct();
    }
    public function listarAnimais()
    {
        try {
            $sql = "SELECT * FROM animais";
            //prepara a frase sql antes de executar
            $stm = $this->db->prepare($sql);
            //executa a frase sql no BD
            $stm->execute();
            //fecha a conexao com o BD
            $this->db = null;
            //returna o resultado no formato de OBJETOS
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $err) {
            echo 'Caught exception: ' . $err;
        }

    }

    public function adicionar()
    {

    }
}