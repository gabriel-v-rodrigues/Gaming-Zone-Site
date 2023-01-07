<?php
  include_once("header.php");
?>
  <div id="main-contain">
    <div class="column-main">
      <div class="row-1">
        <div class="column-1">
          <h2>Entrar</h2>
          <form action="<?php $BASE_URL ?>auth.php" method="POST">
            <input type="hidden" name="type" value="login">
            <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
              <label for="password">Senha:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
            </div>
            <input type="submit" class="btn card-btn" value="Entrar">
          </form>
        </div>
        <div class="column-2">
          <h2>Criar Conta</h2>
          <form action="<?= $BASE_URL ?>auth.php" method="POST">
            <input type="hidden" name="type" value="register">
            <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
              <label for="name">Nome:</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label for="lastname">Sobrenome:</label>
              <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite seu sobrenome">
            </div>
            <div class="form-group">
              <label for="password">Senha:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
            </div>
            <input type="submit" class="btn card-btn" value="Registrar">
          </form>
        </div>
      </div>
    </div>
  </div>