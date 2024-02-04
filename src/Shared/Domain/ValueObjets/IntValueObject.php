<?php
namespace Src\Shared\Domain\ValueObjets;

/**
 * Clase abstracta que representa un objeto de valor entero.
 */
abstract class IntValueObject{

    /**
     * Constructor de la clase IntValueObject.
     *
     * @param int $value El valor del objeto de valor entero.
     */
    public function __construct($value){
        $this->value = $value;
    }

    /**
     * Convierte el objeto de valor entero a una cadena de texto.
     *
     * @return string La representación en cadena de texto del objeto de valor entero.
     */
    public function __toString(){
        return (string) $this->value;
    }

    /**
     * Obtiene el valor de una propiedad del objeto de valor entero.
     *
     * @param string $name El nombre de la propiedad.
     * @return mixed El valor de la propiedad.
     */
    public function __get($name){
        return $this->$name;
    }

    /**
     * Establece el valor de una propiedad del objeto de valor entero.
     *
     * @param string $name El nombre de la propiedad.
     * @param mixed $value El valor de la propiedad.
     */
    public function __set($name, $value){
        $this->$name = $value;
    }

    /**
     * Verifica si una propiedad del objeto de valor entero está definida.
     *
     * @param string $name El nombre de la propiedad.
     * @return bool True si la propiedad está definida, false en caso contrario.
     */
    public function __isset($name){
        return isset($this->$name);
    }

    /**
     * Elimina una propiedad del objeto de valor entero.
     *
     * @param string $name El nombre de la propiedad.
     */
    public function __unset($name){
        unset($this->$name);
    }
}