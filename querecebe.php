<?php include_once "configusu.php";?>
<html>
<body>
    <?php
    $nome =$_POST["name_cad"];
    $telefone =$_POST["tel_cad"];
    $email =$_POST["email_cad"];
    $senha =$_POST["senha_cad"];
        
    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
    mysqli_select_db($conn, '$dbname');
    $sql = "INSERT INTO tbcadastrousu (nome, senha, email, telefone) VALUES ('$nome', '$telefone', '$email', '$senha')";
    if (mysqli_query($conn, $sql)){
        echo "<script> alert ('Salvei seus dados !'); window.location = 'cadastrousu1.php'; </script>";
    }else{

        echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>
