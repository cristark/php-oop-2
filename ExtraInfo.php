<?php

require_once 'User.php';

// Creo Estensione Classe principale (User) che comprende parametri opzionali

class ExtraInfo extends User {
    public $bio;
    public $n_mex;
    protected $role;

    // Genero funzione che mi restituisce il Ruolo dell'utente in base al num di messaggi inviati

    public function setRole($n_mex) {
        if ($n_mex > 250) {
            $this->role = 'Admin';
            $this->n_mex = $n_mex;
        } elseif ($n_mex > 100) {
            $this->role = 'Moderatore';
            $this->n_mex = $n_mex;
        } else {
            $this->role = 'Utente';
            $this->n_mex = $n_mex;
        }
    }

    public function getRole() {
        return $this->role;
    }
}