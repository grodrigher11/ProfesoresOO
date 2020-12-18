<?php

class PruebaPolimorfismo {
    public static function calcular(Profesor $prof){
        return $prof->ingreso();
    }
}