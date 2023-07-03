<?php  

    session_start();//startar
    session_unset();//apagar tudo
    session_destroy();//destroir

      if($_SESSION["nome"]==null){
        header("location:../index.php");
      }else{
        echo "NAO";
      }

    //header("location:../index.php");
?>