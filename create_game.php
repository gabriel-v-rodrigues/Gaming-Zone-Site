<?php
  include_once("header.php");
?>
  <div id="main-contain">
    <div class="column-main">
      <div class="row-1">
        <div class="column-1">
          <h2>Adicionar Jogo</h2>
          <form action="<?php $BASE_URL ?>auth_game.php" method="POST">
            <input type="hidden" name="type" value="creating-game">
            <div class="form-group">
              <label for="Title">Title:</label>
              <input type="title" class="form-control" id="title" name="title" placeholder="Digite o nome do jogo">
            </div>
            <div class="form-group">
              <label for="Description">Description:</label>
              <textarea type="description" class="form-control" id="description" name="description" placeholder="Descreva o jogo"></textarea>
            </div>
            <div class="form-group">
              <label for="Gameplay">Video de Gameplay do Youtube:</label>
              <input type="gameplay" class="form-control" id="gameplay" name="gameplay" placeholder="Cole aqui o link do video">
            </div>
            <div class="form-group">
              <label for="Category">Categoria do jogo:</label>
              <input type="category" class="form-control" id="category" name="category" placeholder="Digite aqui a categoria principal do jogo">
            </div>
            <div class="form-group">
              <label for="Appid">Digite o AppID do jogo (steamdb.info)</label>
              <input type="number" class="form-control" id="appId" name="appId" placeholder="Digite aqui o AppID">
            </div>
            <input type="submit" class="btn card-btn" value="create-game">
          </form>
        </div>
      </div>
    </div>
  </div>