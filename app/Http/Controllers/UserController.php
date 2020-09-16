<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index () {
        if (request()->has('empty')) {
            $users = [];
        } else {
        $users = [
            'Laura','Jose','Manuel','Rodrigo',
        ];
    }

        return view('users', [ 'users' => $users, 'title' => 'Listado de Usuarios']);
    }

    public function show($id) {
        return "Mostrando detalle del usuario: {$id}";
    }

    public function create() {
        return 'Crear nuevo usuario';
    }
}
