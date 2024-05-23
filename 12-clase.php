<?php
    // realizar una clase calculadora que tenga dos propiedades que representen los dos numeros a ingresar y
    // 6 metodos matematicos que debera tener : sumar,restar,multiplicar,dividir, potencia, raiz cuadrada

   class Calculadora {

        public $primerNumero;
        public $segundoNumero;

        function __construct($num1 = 0, $num2 = 0) {         
            $this->primerNumero=$num1;
            $this->segundoNumero=$num2;
        }

        public function sumar() {
            return $this->primerNumero+$this->segundoNumero;
        }

        public function restar() {
            return $this->primerNumero-$this->segundoNumero;
        }

        public function multiplicar() {
            return $this->primerNumero*$this->segundoNumero;
        }

        public function dividir() {
            if($this->segundoNumero==0) return "No es divisible";
            else return $this->primerNumero/$this->segundoNumero;
        }

        public function potencia() {
            // echo "primerNumero:".$this->primerNumero."\n";
            // echo "segundoNumero:".$this->segundoNumero."\n";
            return pow($this->primerNumero,$this->segundoNumero);
        }

        public function raiz() {
            return sqrt($this->primerNumero);
        }

    }

?>