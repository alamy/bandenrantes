<?php 

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $tipo = $_POST['tipo'];

    $texto .=  "Nome: " . $nome . "\n\n ";
    $texto .= "Telefone: " . $telefone . "\n\n ";
    $texto .= "E-mail: " . $email . "\n\n ";
    $texto .= "Tipo: " . $tipo . "\n\n ";
    $texto .= "Endereço: " . $endereco . "\n\n ";
    $texto .=  $mensagem;

    $para = "alamyplayer1@gmail.com";

    $enviar = mail($para, $assunto, $texto);

    if ($enviar) {
        echo "<script> 
            alert('Sua mensagem foi enviada com sucesso')
            </script>"; 
        header("Location: http://www.autoescolabandeirantes.com");

    }else {
            echo "<script> 
            alert('Sua mensagem foi NÃO enviada com sucesso')
            </script>"; 
        header("Location:  http://www.autoescolabandeirantes.com");

    }

?>