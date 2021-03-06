<?php

namespace App\Controllers\Api;

use App\Services\NoticiaService;

class NoticiaController
{
    private NoticiaService $service;
    
    public function __construct()
    {
        $this->service = new NoticiaService();        
    }

    /**
     * 
     */
    public function buscarTodas()
    {
        return Capture(200, $this->service->buscarTodas());
    }
}
