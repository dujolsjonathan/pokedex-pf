<?php

namespace oKanban\Controllers;

class ErrorController extends CoreController
{
    public function err404()
    {
        
       http_response_code(404);
    }
}