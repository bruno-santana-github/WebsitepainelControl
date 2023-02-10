<?php
    include('config.php');
	if(isset($_POST['id'])){
	 //$pdo = new PDO('mysql:host=localhost;dbname=bootstrap_projeto','root','');
	 $sql = MySql::conectar()->prepare("DELETE FROM `tb_equipe` WHERE id = ?");
	 $sql->execute(array($_POST['id']));
	}
?>