
<?php
session_start();
include 'conexao.php';


 if(isset($_POST['nome'])) {
     if(empty($_POST['nome'])){
		$_SESSION['vazio_nome'] = "Campo nome é obrigatório";
		$url = 'http://localhost/Jf_Arquitetura/#orcamento';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else
     {
		$_SESSION['value_nome'] = $nome = $_POST['nome'];
        
	}
 }


 if(isset($_POST['email'])) {

     if(!empty($email)){
		$_SESSION['vazio_email'] = "Campo email é obrigatório";
		$url = 'http://localhost/Jf_Arquitetura/#orcamento';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_email'] = $email = $_POST['email'];
        
	}
 }



 if(isset($_POST['predio'])) {
$predio = $_POST["predio"];
 }
 if(isset($_POST['tel'])) {
   $tel = $_POST["tel"];
   
 $tel = str_replace('(', '', $tel);
 
  $tel = str_replace(')', '', $tel);
  
 $tel = str_replace('-', '', $tel);
     

  

 }
 if(isset($_POST['cel'])) {
$cel = $_POST["cel"];
     
    
     
     $cel = str_replace('(', '', $cel);
 
  $cel = str_replace(')', '', $cel);
  
 $cel = str_replace('-', '', $cel);
     
     
 }
 if(isset($_POST['endereco'])) {
$end = $_POST["endereco"];
 }
 if(isset($_POST['tipo'])) {
$tipo = $_POST["tipo"];
 }
 if(isset($_POST['andares'])) {
$andares = $_POST["andares"];
 }
 if(isset($_POST['aps'])) {
$aps = $_POST["aps"];
 }
 if(isset($_POST['elev'])) {
$elev = $_POST["elev"];
 }
 if(isset($_POST['idade'])) {
$idade = $_POST["idade"];
 }
 if(isset($_POST['det'])) {
$detalhe = $_POST["det"];
 }
 
$status = 0;



if(!empty($nome) && !empty($email)){
    




$sql = "INSERT INTO orcamento VALUES (null, '{$tipo}', '{$nome}','{$predio}', '{$email}', '{$andares}','{$aps}','{$end}','{$elev}','{$idade}','{$tel}','{$cel}','{$detalhe}', '{$status}')";


$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

header("location:msg.php?msg=".$msg);

}

   
    
?>    