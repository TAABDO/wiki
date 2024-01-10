<?php


namespace Myapp\Controllers;
use Myapp\model\Wiki;
require "../../vendor/autoload.php";

class WikiControllers{




    public function showwikis(){
        
        $wikis = Wiki::getAllWikis();
        return $wikis;
    }
}