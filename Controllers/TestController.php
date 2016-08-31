<?php

namespace App\Extensions\ExtensionTest\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class TestController extends BaseController
{
    public function index()
    {
        return "TEST";
    }
}
