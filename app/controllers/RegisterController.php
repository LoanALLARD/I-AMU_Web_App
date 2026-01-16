<?php

namespace App\controllers;
use App\core\Translation;

class RegisterController
{

    public function index(): void {
        $pageTitle = Translation::get('page.tab.register.title');
        require __DIR__ . "/../views/pages/register.php";
    }

}