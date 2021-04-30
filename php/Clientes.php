<?php

class Clientes {
    
    public function enviarEmailEu(){
        //1 – Definimos Para quem vai ser enviado o email
        $para = "maylonhe@gmail.com";
        //2 - resgatar os campos digitados no formulário e grava nas variaveis
    
        $assunto = "Contato do Curso de Marketing";
        $email = $_POST['email'];
        $tel = $_POST['tel'];
    
        //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
    
        $mensagem = "E-mail: </strong>".$email;
        $mensagem .= "<br>  <strong>Telefone: </strong>".$tel;
    
        $header = "MIME-Version: 1.0\n";
        $header .= "Content-type: text/html; charset=utf-8\n";
        $header .= "from: $email\n";
    
        $envio = mail($para, $assunto, $mensagem, $header);  //função que faz o envio do email.
    }

    public function enviarEmailCliente(){
        //EMAIL PARA O CLIENTE
    
        //1 – Definimos Para quem vai ser enviado o email
        $paraC = $_POST['email'];
        //2 - resgatar os campos digitados no formulário e grava nas variaveis
    
        $assuntoC = "Acesse a Aula 01 Agora [Curso Grátis]";
        $emailC = "gcarlossantana329@gmail.com";
        $nomeC = "Gabriel Carlos";
    
        //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
        $mensagemC = "Aqui está seu acesso à Aula 01 do Curso Grátis, um Curso que vai te ensinar o passo a
        passo de como utilizar as duas melhores ferramentas para fazer vendas todos os dias,
        sem que precise investir muito dinheiro ou aparecer na internet!
        Para acessar é só clicar nesse link: <br> <br>";
        $mensagemC .= "<br> <strong>LINK AULA 01 ->: </strong> https://go.hotmart.com/H48483774R?ap=7144";
        $mensagemC .= "<br> <strong>LINK AULA 02 ->: </strong> https://go.hotmart.com/H48483774R?ap=225b";
        $mensagemC .= "<br> <strong>LINK AULA 03 ->: </strong> https://go.hotmart.com/H48483774R?ap=2f25";
    
    
        //5 – agora inserimos as codificações corretas e  tudo mais.
        $headersC = "MIME-Version: 1.0\n";
        $headersC .= "Content-type: text/html; charset=utf-8\n";
        $headersC .= "from: gcarlossantana329@gmail.com\n";
    
    
        $envioCliente = mail($paraC, $assuntoC, $mensagemC, $headersC);  //função que faz o envio do email.
    
        if($envio){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.location.href='../obrigado.html';
            </SCRIPT>");
        }else{
            echo "A mensagem não pode ser enviada";
        }

    }

    public function enviarEmail(){
        //1 – Definimos Para quem vai ser enviado o email
        $para = "maylonhe@gmail.com";
        //2 - resgatar os campos digitados no formulário e grava nas variaveis
    
        $assunto = "Contato do Curso de Marketing";
        $email = $_POST['email'];
        $tel = $_POST['tel'];
    
        //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
    
        $mensagem = "E-mail: </strong>".$email;
        $mensagem .= "<br>  <strong>Telefone: </strong>".$tel;
    
        $header = "MIME-Version: 1.0\n";
        $header .= "Content-type: text/html; charset=utf-8\n";
        $header .= "from: $email\n";
    
        $envio = mail($para, $assunto, $mensagem, $header);  //função que faz o envio do email.
    
    
        //EMAIL PARA O CLIENTE
    
        //1 – Definimos Para quem vai ser enviado o email
        $paraC = $email;
        //2 - resgatar os campos digitados no formulário e grava nas variaveis
    
        $assuntoC = "Acesse a Aula 01 Agora [Curso Grátis]";
        $emailC = "gcarlossantana329@gmail.com";
        $nomeC = "Gabriel Carlos";
    
        //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
        $mensagemC = "Aqui está seu acesso à Aula 01 do Curso Grátis, um Curso que vai te ensinar o passo a
        passo de como utilizar as duas melhores ferramentas para fazer vendas todos os dias,
        sem que precise investir muito dinheiro ou aparecer na internet!
        Para acessar é só clicar nesse link: <br> <br>";
        $mensagemC .= "<br> <strong>LINK AULA 01 ->: </strong> https://go.hotmart.com/H48483774R?ap=7144";
        $mensagemC .= "<br> <strong>LINK AULA 02 ->: </strong> https://go.hotmart.com/H48483774R?ap=225b";
        $mensagemC .= "<br> <strong>LINK AULA 03 ->: </strong> https://go.hotmart.com/H48483774R?ap=2f25";
    
    
        //5 – agora inserimos as codificações corretas e  tudo mais.
        $headersC = "MIME-Version: 1.0\n";
        $headersC .= "Content-type: text/html; charset=utf-8\n";
        $headersC .= "from: gcarlossantana329@gmail.com\n";
    
    
        $envioCliente = mail($paraC, $assuntoC, $mensagemC, $headersC);  //função que faz o envio do email.
    
        if($envio){
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.location.href='../obrigado.html';
            </SCRIPT>");
        }else{
            echo "A mensagem não pode ser enviada";
        }
    }

    public function cadastrarCliente(){
        include("Conexao.php");
        $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
        $tel = mysqli_real_escape_string($conexao, trim($_POST['tel']));
        
        $sql = "INSERT INTO usuario (tel_usuario, email_usuario) VALUES ('$tel', '$email')";
        if($conexao->query($sql) === TRUE) {
            $_SESSION['cad_usuario_realizado'] = true;
        } 

    }

    public function mostrarCliente(){
        include("Conexao.php");

        $sql = "SELECT * FROM usuario";
        $result = mysqli_query($conexao, $sql);

        while($row= mysqli_fetch_assoc($result)){
            echo '
            <div class="row cliente">
                <div class="col-md-4 cliente-dados">
                    '.$row['tel_usuario'].'
                </div>
                <div class="col-md-5 cliente-dados">
                    '.$row['email_usuario'].'
                </div>
                <div class="col-md-1 cliente-dados">
                    <span id="btnExcluir" onmouseover=setAttribute("id","btnOn") onmouseout=setAttribute("id","btnOff") onclick=location.href="php/apagarCliente.php?id='.$row['id_usuario'].'"; style="font-size: 1.5em; cursor: pointer;"><i class="fa fa-trash"></i></i></span>
                </div>
                <div class="col-md-2 cliente-dados">
                    <button type="button" class="btn btn-primary">Lembrar</button>
                </div>
            </div>     
            ';       
        }
    }



    public function excluirCliente($id){
        include('Conexao.php');
        $idCliente = $_GET['id'];

        $sql = "DELETE FROM usuario WHERE id_usuario='$id'";
        $result = mysqli_query($conexao, $sql);

    }



}

?>