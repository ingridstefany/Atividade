<?php
// conexão com os campos em php
if(isset ($_post['submit']))
{
 $nome = ($_post['nome']);
 $endereco = ($_post['endereco']);
 $cep = ($_post['cep']);
 $bairro = ($_post['bairro']);
 $cidade = ($_post['cidade']);
 $uf = ($_post['uf']);
 $telefone = ($_post['telefone']);
 $matricula = ($_post['matricula']);
 $data_de_nacimento = ($_post['data_de_nacimento']);

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <title>Formulário HTML</title>
 <meta charset="utf-8"/>
 <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
 <p> Preencha o formulário abaixo</p>
 //Divs para ser utilizada na criação dos campos do formulário.//
 <div class = "box">
 <form action="formulario.php" method="post"> 
 <div class="field">
 <label for="nome">Nome:</label>
 <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" 
required>
 </div>
 
 <div class="field">
 <label for="telefone">Telefone:</label>
 <input type="text" id="telefone" name="telefone" placeholder="Digite seu Telefone">
 </div>
 <div class="field">
 <label for="email">E-Mail:</label>
 <input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" 
required>
 </div> 
 
 <div class="field">
 <label for="endereco">Endereço:</label>
 <input type="endereco" id="endereco" name="endereco" placeholder="Digite sua 
rua/Av mais número*" required>
 </div> 
 <div class="field">
 <label for="cep">CEP:</label>
 <input type="cep" id="cep" name="cep" placeholder="Digite seu Cep*" required>
 </div> 
 <div class="field">
 <label for="bairro">Bairro:</label>
 <input type="bairro" id="bairro" name="bairro" placeholder="Digite seu Bairro*" 
required>
 </div> 
 <div class="field">
 <label for="cidade">Cidade:</label>
 <input type="cidade" id="cidade" name="cidade" placeholder="Digite sua Cidade*" 
required>
 </div> 
 
 <div class="field">
 <label for="uf">UF:</label>
 <input type="uf" id="uf" name="uf" placeholder="Digite seu Estado*" required>
 </div> 
 <div class="field">
 <label for="matricula">Matricula:</label>
 <input type="matricula" id="matricula" name="matricula" placeholder="Digite sua 
Matricula*" required>
 </div> 
 <div class="field">
    
 <label for="nascimento">Data de Nascimento:</label>
 <input type="nascimento" id="nascimento" name="nascimento" placeholder="Digite 
sua Data de Nascimento*" required>
 </div> 
 <input type="submit" name="acao" value="Enviar">
 </form>
</body>
</html>
