<?php include_once'cabecalho.php'; ?>
   <h1>Cadastro do Cliente</h1>
   <hr>
   <form action="grava.php" method="post">
       nome:<br/>
       <input type="text" name="nomo"
       placeholder="Digite o nome"
       raquired/>
       <br/><br/>
       E-mail:<br/>
       <input type="text" name="email"
       placeholder="Digite o email"
       raquired/>
       <br/><br/>
       Telefone:<br/>
       <input type="text" name="teçefone"
       placeholder="Digite o telefone"
       raquired/>
       <br/><br/>
       <input type="submit" value="cadastrar"/>
</form>
<?php

