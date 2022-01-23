<?php 
class form {
    private $data;
    public $surround = 'p';

    public function __construct($data = array()){
        $this->data = $data;
    }

    private function suround($tag_name){
        return "<{$this->surround}>{$tag_name}</{$this->surround}>";
    }

    public function input($name){
        return $this->suround("<input type ='text' name = '".$name."' >");
    }

    public function submit(){
        return $this->suround("<button type='submit' name='bouton'>Envoyer</button>");
    }
}
?>