<?php
/**
 * Classe Connexion_SQL pour gérer la connexion à des bases de données MYSQL.
 */
class Connexion_SQL {
    /** @var string $adresseIp Adresse IP du serveur. */
    private $adresseIp;

    /** @var string $nombase Nom de la base de données. */
    private $nombase;

    /** @var string $utilisateur Nom de l'utilisateur. */
    private $utilisateur;

    /** @var string $mdp Mot de passe. */
    private $mdp;

    /**
     * Constructeur de la classe Connexion_SQL.
     *
     * @param string $adresseIp   Adresse IP du serveur.
     * @param string $nombase     Nom de la base de données.
     * @param string $utilisateur Nom de l'utilisateur.
     * @param string $mdp         Mot de passe.
     */
    public function __construct($adresseIp, $nombase, $utilisateur, $mdp) {
        $this->setAdresseIP($adresseIp);
        $this->nombase = $nombase;
        $this->utilisateur = $utilisateur;
        $this->mdp = $mdp;
    }

    /**
     * Méthode pour lire les informations de connexion.
     *
     * @return string Les informations de connexion.
     */
    public function lire_connexion() {
        return "Adresse IP: {$this->adresseIp}, Nom de la base: {$this->nombase}, Utilisateur: {$this->utilisateur}<br/>";
    }

    /**
     * Méthode privée pour définir l'adresse IP tout en vérifiant sa validité.
     *
     * @param string $adresseIp Adresse IP à vérifier et définir.
     */
    private function setAdresseIP($adresseIp) {
        // FILTER_VALIDATE_IP Avec filter_var permet de vérifier si une adresse IP est valide.
        if (filter_var($adresseIp, FILTER_VALIDATE_IP)) {
            $this->adresseIp = $adresseIp;
        } else {
            echo "Erreur: Adresse IP invalide\n";
            exit(1);
        }
    }
}
?>
