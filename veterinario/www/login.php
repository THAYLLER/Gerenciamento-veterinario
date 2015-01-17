
<title>Login</title>
<?php include('htmlIni.php');?>
<div class="container container_login">
    <img src="../img/veterinario.jpg" alt="" style="aling: center !important;" class="img-reponsive center-block">
    <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Por favor efetue login</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Lembre-me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block btn" type="submit">Entrar</button>
    </form>
</div>
<?php include('footer.php');?>