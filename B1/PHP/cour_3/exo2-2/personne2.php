<?php
 class Personne2 {
    private string $prenom; 
    private string $nom; 
    private int $age;
    public function __construct($n,$p,$a) { 
        $this->nom = strtoupper($n); 
        $this->prenom=$p; 
        $this->age=$a; 
    }

    public function setNom(string $n): void { 
        $this->nom=strtoupper($n); 
    } 

    public function sePresente(): string { 
        return 'Je m\'appelle '.$this->prenom.' '.$this->nom.' et j\'ai '.$this->age.' ans '; 
    }


} 
?>