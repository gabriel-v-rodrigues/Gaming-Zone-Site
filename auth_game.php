<?php
require_once("db.php");
require_once("url.php");
require_once("dao/GamesDAO.php");

$type = filter_input(INPUT_POST, "type");
$gameDAO = new GamesDAO($conn, $BASE_URL);

if($type === "creating-game")
{
    //pegando as informações que o usuario colocou
    $title = filter_input(INPUT_POST, "title");
    $description = filter_input(INPUT_POST, "description");
    $gameplay = filter_input(INPUT_POST, "gameplay");
    $category = filter_input(INPUT_POST, "category");
    $appid = filter_input(INPUT_POST, "appid");

    //TODO: VERIFICAR SE O JOGO JA EXISTE NA DB

    $game = new Games();
    $game->title = $title;
    $game->description = $description;
    $game->gameplay = $gameplay;
    $game->category = $category;
    $game->appid = $appid;
    $gameDAO->create($game);

}

?>