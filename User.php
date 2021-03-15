<?php

// Creo classe User che contiene le info principali dell'utente

class User {
    private $id;
    private $username;
    private $password;
    private $nome;
    private $cognome;
    private $eta;
    public $genere;
    public $nazione;
    public $citta;
    
    // Funzione construct per impostare parametri "NOT NULL" definiti nella tabella pdf

    public function __construct($_id, $_username, $_password, $_nome, $_cognome, $_eta) {
        $this->id = $_id;
        $this->username = $_username;
        $this->password = $_password;
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->eta = $_eta;
    }
    
}
