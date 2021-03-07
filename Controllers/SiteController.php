<?php


namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;

class SiteController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Nam Nguyen'
        ];
        return $this->render('home', $data);
    }
    public function contact()
    {
        return $this->render('contact');
    }

    public function login(Request $request)
    {
        $body = $request->getBody();

        var_dump($body);

        exit();
    }
}
