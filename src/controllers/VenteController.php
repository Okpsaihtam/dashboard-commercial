<?php
require_once __DIR__ . '/../models/Vente.php';
class VenteController {
    public function index() {
        $ventes = Vente::getAll();
        include __DIR__ . '/../views/ventes/list.php';
    }
}