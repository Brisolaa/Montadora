<?php

class Carro
{
    const ANO_FABRICACAO = 2016;
    
    
    public $cor = 'Branco';
    public $rodas = 14;
    public $arCondicionado = false;
    public $farol = true;
    private $tipoCombustivel = 'flex';
    private $quantCombustivel = 0;
    /**
     * @var Motor
     */
    private $motor;
    private $volante;
    
    /**
     * Funçao Construtora 
     * @param string $motor
     */
    public function __construct(Motor $motor, InterfaceVolante $volante)
    {
        $this->motor= $motor;
        $this->volante = $volante;
    }
    
/**
 * Acelera ou desacelera conforme o valor da aceleração informada
 * @param int $aceleracao
 */
    private function andar ($aceleracao)
    {
        if ($this->ligado == true)
           
        { 
        echo " ANDOU ".$aceleracao."\n\n";
        $gasto = $this->motor->acelerar($aceleracao);
        
        $this->quantCombustivel -= $gasto;
               
    
        }
    }
     public function virar ($direcao)
    {
        $this->volante->girar($direcao);
    }
    /**
     * Faze emitir um som chato
     * @param string $intensidade
     * @return string
     * @author John Doe <john.doe@example.com>
     */
     public function buzinar ($intensidade)
    {
        return "Buzinei $intensidade! ! !";
    }
    /**
     * Liga o Veículo
     */
    public function ligar ()
    {
        if ($this->quantCombustivel > 0)
        {
        $this->ligado = true;
        $this->motor->ligar();
        } else{
            
           throw new Exception('sem combustível');
        }
    }
    
    
    public function acelerar ($potencia)
    {
        $this->andar($potencia);
    }
    public function frear ($potencia)
    {
        $this->andar(0);
    }
    public function re ($potencia)
    {
        $this->andar($potencia*-1);
    }
    
    public function abastecer($litros)
    {
        $this->quantCombustivel += $litros;
    }
}