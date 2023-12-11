<?php
class Personne { 
    private string $prenom; 
    private string $nom; 
    private int $age;

    public function __construct($n,$p,$a) { 
        $this->nom=$n; 
        $this->prenom=$p;
        $this->age=$a; 
    }  

    

    public function setNom(string $newNom) {
        $this->nom=$newNom;
    }
    
    


    public function sePresente(): string { return 'Je m\'appelle '.$this->prenom.' '.$this->nom.' et j\'ai '.$this->age.' ans '; }
}
?>