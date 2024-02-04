<?php
namespace Src\Shared\Domain;

/**
 * Clase abstracta Domain.
 * 
 * Esta clase es la base para todas las clases de dominio en la arquitectura hexagonal.
 * Proporciona funcionalidades comunes y define un método abstracto para manejar excepciones.
 */
abstract class Domain{
    
    /**
     * Constructor de la clase Domain.
     * 
     * @param mixed $entity La entidad asociada al dominio.
     * @param string|null $exception La excepción asociada al dominio, si la hay.
     */
    public function __construct(private mixed $entity = null, private readonly ?string $exception = null){
       
        $this->isException($exception);
    }

    /**
     * Obtiene la entidad asociada al dominio.
     * 
     * @return mixed La entidad asociada al dominio.
     */
    public function entity(): mixed{
        return $this->entity;
    }

    /**
     * Método abstracto para manejar excepciones.
     * 
     * @param string|null $exception La excepción asociada al dominio, si la hay.
     * @return never
     */
    protected abstract function isException(?string $exception): never;

}