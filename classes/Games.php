<?php

class Games{
    public $id;
    public $title;
    public $description;
    public $gameplay;
    public $category;
    public $appid;
    public $users_id;

}

interface GamesDAOInterface {
    public function buildGame($data);
    public function getTopGames();
}