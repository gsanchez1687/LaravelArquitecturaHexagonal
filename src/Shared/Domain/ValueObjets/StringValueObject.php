<?php 
namespace Src\Shared\Domain\ValueObjets;

/**
 * Clase abstracta que representa un objeto de valor de tipo cadena.
 */
abstract class StringValueObject{
    protected string $value;

    /**
     * Constructor de la clase StringValueObject.
     * 
     * @param string $value El valor de la cadena.
     */
    public function __construct(string $value){
        $this->value = $value;
    }

    /**
     * Obtiene el valor de la cadena.
     * 
     * @return string El valor de la cadena.
     */
    public function value(): string{
        return $this->value;
    }

    /**
     * Convierte el objeto de valor en una cadena.
     * 
     * @return string La representación en cadena del objeto de valor.
     */
    public function __toString(): string{
        return $this->value();
    }

    /**
     * Obtiene el valor de una propiedad del objeto de valor.
     * 
     * @param string $name El nombre de la propiedad.
     * @return string El valor de la propiedad.
     */
    public function __get($name): string{
        return $this->$name;
    }

    /**
     * Establece el valor de una propiedad del objeto de valor.
     * 
     * @param string $name El nombre de la propiedad.
     * @param mixed $value El valor de la propiedad.
     */
    public function __set($name, $value): void{
        $this->$name = $value;
    }

    /**
     * Verifica si una propiedad del objeto de valor está definida.
     * 
     * @param string $name El nombre de la propiedad.
     * @return bool Verdadero si la propiedad está definida, falso en caso contrario.
     */
    public function __isset($name): bool{
        return isset($this->$name);
    }

    /**
     * Elimina una propiedad del objeto de valor.
     * 
     * @param string $name El nombre de la propiedad.
     */
    public function __unset($name): void{
        unset($this->$name);
    }
}