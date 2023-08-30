<?php 
include 'conecta.php';
$nome = $_POST["nome"];
$celular = $_POST["celular"];
$query = $con->query("SELECT * FROM cliente WHERE nome='$nome'AND celular='$celular'");
if (mysqli_num_rows($query)>0) {
    echo "<script language='javascript' type='text/javascript'> 
            alert('Cliente já está em nossa base de dados!');
            window.location.href='index.php'
            </script>";
            exit();
}else{
    $sql="INSERT INTO cliente(nome,celular) VALUES ('$nome','$celular) ";
    if (mysqli_query($con, $sql)) {
        echo "<script language='javascript' type='text/javascript'> 
            alert('Cliente salvo com sucesso!');
            window.location.href='index.php'
            </script>";
            exit();
    }else{
        echo "<script language='javascript' type='text/javascript'> 
            alert('Não foi possivel inserir o cliente!');
            window.location.href='index.php'
            </script>";
            exit();
    }
}
?>