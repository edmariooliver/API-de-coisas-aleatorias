<?php 

namespace App\Controllers\Api;

use App\Services\Api\Response;

class InicioController
{
    public function index()
    {
        return new Response(200, ["Repositorio"=>"https://github.com/edmariooliver/API-de-coisa-aleatorias"]);
    }
}