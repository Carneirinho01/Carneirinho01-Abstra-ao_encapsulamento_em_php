<?php
class Mesa
{
    public $quantidadePernas;
    public $tipo;
    public $formaGeometrica;

    public function __construct()
    {
        
    }
    public function addMesa($quantidadePernas, $tipo, $formaGeometrica): bool
    {
        if($this->setQuantidadePernas($quantidadePernas) && $this->setTipo($tipo) && $this->setFormaGeometrica($formaGeometrica))
        {
            return true;
        }else{
            return false;
        }
    }
    
    public function mostrarMesa(): String
    {
        return "Mesa com a forma ".$this->formaGeometrica." com ".$this->quantidadePernas." pernas, do modelo {$this->tipo}";  
    }

    private function setQuantidadePernas($quantidadePernas): bool
    {
        if(is_int($quantidadePernas))
        {
            $this->quantidadePernas = $quantidadePernas;
            return true;
        }else{
            return false;
        }
    }

    private function setTipo($tipo): bool
    {
        if(is_string($tipo)) 
        {
            $this->tipo = $tipo;
            return true;
        }else{
            return false;
        }
    }

    private function setFormaGeometrica($formaGeometrica): bool
    {
        if (is_string($formaGeometrica)) {
            $this->formaGeometrica = $formaGeometrica;
            return true;
        }else{
            return false;
        }
    }
}