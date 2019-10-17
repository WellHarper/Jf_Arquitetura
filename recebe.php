
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

     if(empty($_POST['email'])){
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
if(empty($_POST['predio'])){
		$_SESSION['vazio_predio'] = "Campo Nome/Razão Social é obrigatório";
		$url = 'http://localhost/Jf_Arquitetura/#orcamento';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $predio = $_POST["predio"];
		$_SESSION['value_predio'] = $predio;
         


 }}




// }
 if(isset($_POST['tel'])) {
 $tel = $_POST["tel"];
     
     $_SESSION['value_tel'] = $tel;

     $tel = str_replace('(', '', $tel);
     
     $tel = str_replace(')', '', $tel);
     
     $tel = str_replace('-', '', $tel);
     
     
 }
if(isset($_POST['cel'])) {


     if(empty($_POST['cel'])){
		$_SESSION['vazio_cel'] = "Campo celular é obrigatório";
		$url = 'http://localhost/Jf_Arquitetura/#orcamento';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $cel = $_POST["cel"];
		$_SESSION['value_cel'] = $cel;
         
  $cel = str_replace('(', '', $cel);

  $cel = str_replace(')', '', $cel);
 
  $cel = str_replace('-', '', $cel);     
        
	}}
    
  
//     
// }
if(isset($_POST['endereco'])) {

if(empty($_POST['endereco'])){
		$_SESSION['vazio_endereco'] = "Campo endereco é obrigatório";
		$url = 'http://localhost/Jf_Arquitetura/#orcamento';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
        $end = $_POST["endereco"];
		$_SESSION['value_endereco'] = $end;
         


 }}
if(isset($_POST['tipo'])) {

if(empty($_POST['tipo'])){
		$_SESSION['vazio_tipo'] = "Campo tipo de serviço é obrigatório";
		$url = 'http://localhost/Jf_Arquitetura/#orcamento';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else
    
    $tipo = $_POST["tipo"];
    $_SESSION['value_tipo'] = $tipo;
    }



// }
// if(isset($_POST['andares'])) {
//$andares = $_POST["andares"];
// }
// if(isset($_POST['aps'])) {
//$aps = $_POST["aps"];
// }
// if(isset($_POST['elev'])) {
//$elev = $_POST["elev"];
// }
// if(isset($_POST['idade'])) {
//$idade = $_POST["idade"];
// }
// if(isset($_POST['det'])) {
//$detalhe = $_POST["det"];
// }
 
$status = 0;



if(!empty($nome) && !empty($email) && !empty($cel && !empty($end))){
    




$sql = "INSERT INTO orcamento VALUES (null, '{$tipo}', '{$nome}','{$predio}', '{$email}', '{$andares}','{$aps}','{$end}','{$elev}','{$idade}','{$tel}','{$cel}','{$detalhe}', '{$status}')";


$msg = (mysqli_query($con, $sql)) ? "Gravado com sucesso" : "Erro ao gravar";

header("location:msg.php?msg=".$msg);

}

   
    
?>    