<?php
namespace App\Core;

class Controller
{
    // Controller logic here
    public function __view(string $view, array $data = [])
    {
        extract($data);
        $view = str_replace(
            '.', 
            '/', 
            $view
        );
        require_once "../app/views/{$view}.php";
    }
}




?>