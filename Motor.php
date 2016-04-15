<?php
/**
 * modelo Base do motor
 * @author Felipe <felipe@email.com>
 * @link http://www.google.com description
 */
abstract class Motor
{
  // private $cilindrada = 1000;
   private $combustivel = "Gasolina";
   protected $aceleracao = 0;
   private $ligado = false;
   
   /*
    * é recomendado que funções retorne alguma coisa nem que seja a propria classe
    */
   
   /**
    * Liga ou desliga o Motor
    * @return bool
    */
   public function ligar()
   {
       $this->ligado = !$this->ligado;
       return $this->ligado; 
       
       
   }
   /**
    * Acelera o Motor
    * @param int $potencia
    * @return int Combustivel gasto
    */
   public function acelerar($potencia)
   {
       $this->aceleracao = $potencia;
       $gasto = $potencia * $this->getCilindrada();
       return $gasto / 1000;
   }
   abstract public function getCilindrada();
   


}