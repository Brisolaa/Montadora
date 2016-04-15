<?php

class Pickup extends Carro
{
    
    const ANO_FABRICACAO = 2017;
    
    static private $capacidade = 300;
    
    public function ligar()
    {
        parent::ligar();
        
        echo "\n to ligado \n";
        
        echo self::$capacidade;
        
    }
    
    static public function ligarPickup()
    {
        echo "foda se";
    }
    //self é pra propria class e o parent puxa do class pai*
            
}