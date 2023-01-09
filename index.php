<?php 
require_once("header.php");
require_once("dao/GamesDAO.php");

$gamesDAO = new GamesDAO($conn, $BASE_URL);
$topGames = $gamesDAO->getTopGames();
?>

<div class="wrapper-content">
    <main class="content">
    <?php foreach($topGames as $game): ?>
        <?php require("game_card.php"); ?>
      <?php endforeach; ?>
      <?php if(count($topGames) === 0): ?>
        <p class="empty-list">Ainda não há jogos cadastrados!</p>
      <?php endif; ?>
    </main>
</div>
</body>
</html>