
<?php

 if(isset($_POST['nome'])) {
$nome = $_POST["nome"];
 }
 if(isset($_POST['email'])) {
$email = $_POST["email"];
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




include 'conexao.php';

$sql = "INSERT INTO orcamento VALUES (null, '{$tipo}', '{$nome}','{$predio}', '{$email}', '{$andares}','{$aps}','{$end}','{$elev}','{$idade}','{$tel}','{$cel}','{$detalhe}', '{$status}')";

 if (mysqli_query($con, $sql)) {
       
     echo ("boa");
       
       
}

    else {
        
        
        echo("ERROU");
        
    }


    
?>    