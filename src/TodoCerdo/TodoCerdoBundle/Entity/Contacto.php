<?php

// src/TodoCerdo/TodoCerdoBundle/Entity/Contacto.php
//Clase que maneja los mensajes al correo electronico del administrador del sitio

namespace TodoCerdo\TodoCerdoBundle\Entity;

//Esto use se exportan para los validadores, es decir para hacer la validacion de lo datos del formulario
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\MinLength;
use Symfony\Component\Validator\Constraints\MaxLength;

class Contacto {

    protected $nombre;
    protected $email;
    protected $asunto;
    protected $mensaje;

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getAsunto() {
        return $this->asunto;
    }

    public function setAsunto($asunto) {
        $this->asunto = $asunto;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    //Funcion loadvalidator se usa para definir los validadores de  los datos del formulario, antes se debe exportar los use correspondientes
    public static function loadValidatorMetadata(ClassMetadata $metadata) {
        //el objeto Smetadata nos sirve para setear las propiedades de la entidad Entity
        $metadata->addPropertyConstraint('nombre', new NotBlank());
        // este objeto Email() sirve para validar que el email sea correcto aunque yo no estoy seguro que funcione correctamente.
        $metadata->addPropertyConstraint('email', new Email());

        $metadata->addPropertyConstraint('asunto', new NotBlank());
        $metadata->addPropertyConstraint('asunto', new MaxLength(50));

        $metadata->addPropertyConstraint('mensaje', new MinLength(50));
    }

}
