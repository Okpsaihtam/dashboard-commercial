<?php
require_once __DIR__ . '/../models/Objectif.php';
class ObjectifController {
    public function index() {
        $objectifs = Objectif::getAll();
        include __DIR__ . '/../views/objectifs/list.php';
    }
}