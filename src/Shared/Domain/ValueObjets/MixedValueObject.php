<?php 

/**
 * Clase abstracta que representa un objeto de valor mixto.
 */
abstract class MiexedValueObject{
    protected mixed $value;

    /**
     * Constructor de la clase MixedValueObject.
     * 
     * @param mixed $value El valor del objeto de valor mixto.
     */
    public function __construct(mixed $value){
        $this->value = $value;
    }

    /**
     * Obtiene el valor del objeto de valor mixto.
     * 
     * @return mixed El valor del objeto de valor mixto.
     */
    public function value(): mixed{
        return $this->value;
    }

    /**
     * Convierte el objeto de valor mixto a una cadena de texto.
     * 
     * @return string La representación en cadena de texto del objeto de valor mixto.
     */
    public function __toString(): string{
        return $this->value();
    }

    /**
     * Obtiene el valor de una propiedad del objeto de valor mixto.
     * 
     * @param string $name El nombre de la propiedad.
     * @return mixed El valor de la propiedad.
     */
    public function __get($name): mixed{
        return $this->$name;
    }

    /**
     * Establece el valor de una propiedad del objeto de valor mixto.
     * 
     * @param string $name El nombre de la propiedad.
     * @param mixed $value El valor de la propiedad.
     * @return void
     */
    public function __set($name, $value): void{
        $this->$name = $value;
    }

    /**
     * Verifica si una propiedad del objeto de valor mixto está definida.
     * 
     * @param string $name El nombre de la propiedad.
     * @return bool Verdadero si la propiedad está definida, falso en caso contrario.
     */
    public function __isset($name): bool{
        return isset($this->$name);
    }

    /**
     * Elimina una propiedad del objeto de valor mixto.
     * 
     * @param string $name El nombre de la propiedad.
     * @return void
     */
    public function __unset($name): void{
        unset($this->$name);
    }
}
