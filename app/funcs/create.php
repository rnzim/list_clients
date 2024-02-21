<?php

if(isset($_POST['nome'],$_POST['telefone'],$_POST['email'])){
   if(array_count_values($_POST)>0){
     header("Location: /crud/index.php?status=success");
     exit;
   }
  
}else{
    header("Location: /crud/index.php?status=info");
    exit;
}
?>