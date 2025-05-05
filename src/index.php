<?php
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

switch ($controller) {
    case 'clients':
        require_once 'controllers/ClientController.php';
        $ctrl = new ClientController();
        $ctrl->$action();
        break;
    case 'ventes':
        require_once 'controllers/VenteController.php';
        $ctrl = new VenteController();
        $ctrl->$action();
        break;
    case 'objectifs':
        require_once 'controllers/ObjectifController.php';
        $ctrl = new ObjectifController();
        $ctrl->$action();
        break;
    default:
        echo "<h1>Tableau de bord commercial</h1>";
        echo "<ul>
            <li><a href='?controller=clients'>Voir les clients</a></li>
            <li><a href='?controller=ventes'>Voir les ventes</a></li>
            <li><a href='?controller=objectifs'>Voir les objectifs</a></li>
        </ul>";
}