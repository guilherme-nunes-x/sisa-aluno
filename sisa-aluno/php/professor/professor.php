<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/login.css" />
    <link
      rel="shortcut icon"
      href="css/imgs/school-svgrepo-com.svg"
      type="image/x-icon"
    />
    <title>Inicial</title>
  </head>
  <body>
    <section>
      <h1>Login Professor</h1>

      <form action="crud_professor.php" method="post">
        <div id="vs">
          <label for="">E-mail</label>
          <input type="text" name="email" placeholder="E-mail" required class="ts"/>
          <label for="">Senha</label>
          <input type="password" name="senha" placeholder="Senha" required class="ts"/>
        </div>
        <div id="suv">
        <label for="submit"></label>
        <input type="submit" name="submit" value="Entrar" id="sub" />
    </div>
      </form>
    </section>
  </body>
</html>