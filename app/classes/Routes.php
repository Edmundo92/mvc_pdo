<?php 

namespace app\classes; 

class Routes{ 

    public static function load($routes, $uri){
        //dd($routes);
        //dd($uri);
        if(!array_key_exists($uri, $routes)){
            throw new \Exception('Rota nao existe {$uri}');
        }
        

        return "../app/{$routes[$uri]}.php";
        
    }
}