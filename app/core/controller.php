<?php
namespace App\Core;

class Controller
{
    // Controller logic here
    public function view(string $view, array $data = [])
    {
        extract($data);
        $view = str_replace(
            '.', 
            '/', 
            $view
        );

        $content = "../app/views/{$view}.php";

        require_once "../app/views/{$view}.php";
}


}

?>