<?php 
          
         $obs = $_POST['obs'];
         $cod = $_POST['cod'];          
         
         echo $cod;
         echo $obs;  

        include 'conexao.php';
        $sql = "UPDATE ORCAMENTO SET observacoes = '{$obs}' WHERE cod = '{$cod}'";
        
        
       $msg = (mysqli_query($con, $sql)) ? "<h2 class='enviado-sucesso'>Observação enviada com sucesso!</h2>" : " <h2 class='nao-enviado'>Infelizmente houve um erro!</h2>";
      header("location:msg.php?msg=".$msg); 
          
?>