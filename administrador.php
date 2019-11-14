<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
	<?php include 'imports.php'; ?>
  <title>Administrador</title>
</head>

<body>
  <main>
    <section id="form_adm">
      <div class="logo">
        <img src="img/logo.jpg" alt="JF Arquitetura">
      </div>
      <div class="container_grid">
        <h2 class="subtitulo">Seja bem-vindo!</h2>
        <form action="login.php" method="post">
          <div class="form-card ">
            <label>Login</label>
            <input type="text" name="usuario">

            <label>Senha</label>
            <input type="password" name="senha">
            <button type="submit" class="botao-adm">Entrar</button>
          </div>
        </form>
      </div>
    </section>
  </main>
</body>

</html>