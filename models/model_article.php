<?php
    class Article{

        private $id_art;
        private $nom_art;
        private $content_art;

        public function __construct($nom, $contenu){
            $this->nom_art = $nom;
            $this->content_art = $contenu;
        }

        public function getIdArticle():int{
            return $this->id_art;
        }
        public function getNomArticle():string{
            return $this->nom_art;
        }
        public function getcontenuArticle():string{
            return $this->content_art;
        }
        public function setIdArticle($id):void{
            $this->id_art = $id;
        }
        public function setNomArticle($nom):void{
            $this->nom_art = $nom;
        }
        public function setcontenuArticle($prix):void{
            $this->content_art = $contenu;
        }


    function showAllarticle($bdd):void{
        try{
            $req = $bdd->prepare('SELECT * FROM article');
            $req->execute();

            while($data = $req->fetch()){
                echo '<p>Nom de l\'article : '.$data['nom_art'].' son contenu : '.$data['content_art'].'</p>';
            }
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
?>