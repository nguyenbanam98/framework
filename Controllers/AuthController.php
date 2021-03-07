<?php


namespace App\Controllers;


use App\Core\Controller;
use App\Core\Request;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return 'Handle submit data';
        }
        $this->setLayout('auth');
        return $this->render('register');
    }
}
