<?php
	abstract class Conexao
	{
		public function __construct(protected $db = null)
		{
			$parametros = "mysql:host=localhost;dbname=animais;charset=utf8mb4";
			
			$this->db = new PDO($parametros, "root", "");
		}
		
		
	}
?>