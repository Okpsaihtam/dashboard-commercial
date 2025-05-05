<?php
require_once __DIR__ . '/../models/Client.php';
class ClientController {
    public function index() {
        $clients = Client::getAll();
        include __DIR__ . '/../views/clients/list.php';
    }
}