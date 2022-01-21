<?php 
class personnage {
    public $vie = 100;
    public $atk = 20;
    public $nom;

    public function appeler(){
        echo 'hey'.$this->nom;
    }
    public function __construct($nom){
        $this->nom = $nom;
    }
    public function regenerer(){
        $this->vie = 100;
    }
    public function mort(){
        return $this->vie == 0;
    }
}
?>