<?php
require_once("classes/Games.php");

class GamesDAO implements GamesDAOInterface {

    private $conn;

    public function __construct(PDO $conn) 
    {
        $this->conn = $conn;
    }

        //Função para criar o jogo
    public function create(Games $game)
    {
            $stmt = $this->conn->prepare("INSERT INTO games (title, description, gameplay, category, appid, users_id) VALUES (:title, :description, :gameplay, :category, :appid, :users_id)");
        
    
              $stmt->bindValue(":title", $game->title);
              $stmt->bindValue(":description", $game->description);
              $stmt->bindValue(":gameplay", $game->gameplay);
              $stmt->bindValue(":category", $game->category);
              $stmt->bindValue(":appid", $game->appid);
              //Configurar para o id do usuario
              $stmt->bindValue(":users_id", 1);
        
              $stmt->execute();
    }


    public function buildGame($data) {

        $Game = new Games();
  
        $Game->id = $data["id"];
        $Game->title = $data["title"];
        $Game->description = $data["description"];
        $Game->category = $data["category"];
        $Game->appid = $data["appid"];
        $Game->users_id = $data["users_id"];
  
        return $Game;
    }

    public function getTopGames(){
        $games = [];
        $stmt = $this->conn->query("SELECT * FROM games ORDER BY id DESC");
        $stmt->execute();

        if($stmt->rowCount() > 0) { 

            $gamesArray = $stmt->fetchAll();
            
            foreach($gamesArray as $game) {
              $games[] = $this->buildGame($game);
            }
            
        }
     return $games;
    }
}
?>