<?php

namespace App\Controllers;

use App\core\Translation;

class HomeController {
    public function index() :void{
        $pageTitle = Translation::get('page.tab.login.title');
        require __DIR__.'/../views/pages/login.php';
    }
}