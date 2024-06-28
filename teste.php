<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    if(isset($_POST['submit']))
    {
        //print_r($_POST['pf_nome_cliente']);
        //print_r($_POST['pf_data_nascimento']);
       // print_r($_POST['pf_cpf_cliente']);
       // print_r($_POST['email_cliente']);
       // print_r($_POST['senha_cliente']);
       // print_r($_POST['telefone_cliente_2']);
       // print_r($_POST['telefone_cliente']);
        include_once('db.php');
        
        $nome = $_POST['pf_nome_cliente'];
        $data_nasc = $_POST['pf_data_nascimento'];
        $cpf = $_POST['pf_cpf_cliente'];
        $email = $_POST['email_cliente'];
        $senha = $_POST['senha_cliente'];
        $telefone1 = $_POST['telefone_cliente_2'];
        $telefone2 = $_POST['telefone_cliente'];

        $result = mysqli_query($conexao, "INSERT INTO dados(pf_nome_cliente,pf_data_nascimento,pf_cpf_cliente,email_cliente,senha_cliente,telefone_cliente_2,telefone_cliente)   
        VALUES('$nome','$data_nasc','$cpf','$email','$senha','$telefone1','$telefone2')");
    }
?>
    <H1>ola mundo</H1>
</body>
</html>