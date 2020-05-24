<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Dimensao implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     * Op = Opção
     */
    public function __construct($larguraPrimeiraOp, $alturaPrimeiraOp, $larguraSegundaOp, $alturaSegundaOp){
        $this->larguraPrimeiraOp = $larguraPrimeiraOp;
        $this->larguraSegundaOp = $larguraSegundaOp;
        $this->alturaPrimeiraOp = $alturaPrimeiraOp;
        $this->alturaSegundaOp = $alturaSegundaOp;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $resolucaoImagem = getimagesize($value)[3];
        $resolucaoEsperadaOp1 = 'width="'.$this->larguraPrimeiraOp.'" height="'.$this->alturaPrimeiraOp.'"';
        $resolucaoEsperadaOp2 = 'width="'.$this->larguraSegundaOp.'" height="'.$this->alturaSegundaOp.'"';

        if($resolucaoImagem == $resolucaoEsperadaOp1){
            return true;
        }
        else if($resolucaoImagem == $resolucaoEsperadaOp2){
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        $padrao1 = "(".$this->larguraPrimeiraOp."x".$this->alturaPrimeiraOp.")";
        $padrao2 = "(".$this->larguraSegundaOp."x".$this->alturaSegundaOp.")";

        return "Sua imagem não esta nos padrões corretos de resolução use $padrao1 ou $padrao2";
    }
}
