<?php
include_once("db.php");
include_once("url.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta http-equiv="refresh" content = "1" /> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Selector</title>
  <!-- BOOTSTRAP -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" /> -->
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="<?php $BASE_URL?>css/styles.css">
</head>
<body>
<header >
    <div class="header">
      <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
        <img id="logo" src="<?php $BASE_URL ?>img/logo.png" alt="Gaming">
      </a>
      <div>
        <div class="flex">
          <a class="link" id="home-link" href="<?= $BASE_URL ?>index.php">Home</a>
          <a class="link" href="<?php $BASE_URL ?>allgames.php">Ver todos os Jogos</a>
          <a class="link" href="<?php $BASE_URL ?>create_game.php">Adicionar Jogo</a>
          <form action="<?= $BASE_URL ?>search.php" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
            <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Procurar jogo especifico" aria-label="Search">
            <button class="btn my-2 my-sm-0" type="submit">
            <i class="fas fa-search"></i>
            </button>
          </form>
          <a class="link" href="<?php $BASE_URL ?>login.php">Login/Cadastrar</a>
        </div>
      </div>
    </div>
  </header>