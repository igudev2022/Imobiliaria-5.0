<?php 
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $nome;
    $valor_criptografado = sha1($senha);
    
    $con = mysqli_connect("127.0.0.1","root","","imobiliaria");

    //teste
    //$sql = "UPDATE usuarios SET senha = '$valor_criptografado' WHERE id=1";
   // mysqli_query($con,$sql);

   
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$valor_criptografado'";

    $result = mysqli_query($con, $sql);

     if (mysqli_num_rows($result) > 0) {
        header("location:../view/painel.php");
        while($row = mysqli_fetch_assoc($result)) {
          $nome = $row["nome"];
          session_start();
          $_SESSION["nome"] = $nome;
        }
      } else {
        echo "USUÁRIO NÃO ENCONTRADO!!!";
        header("location:../view/login.php");
     }
     
      mysqli_close($con); 

      session_start();
      $_SESSION["nome"] = $nome;

?>
