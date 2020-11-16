<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Clients;

class ClienteController extends Controller {

    public function index(){
        $clients = clients::getAll();
        $this->view('clients', ['clients' -> $clients]);
    }

    public function editar(){
        die("Em construção...");
    }
}