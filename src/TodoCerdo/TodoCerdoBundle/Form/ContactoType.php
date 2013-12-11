<?php
// src/TodoCerdo/TodoCerdoBundle/Form/EnquiryType.php
//Clase que maneja el formulario de consultas al administrador del sitio
namespace TodoCerdo\TodoCerdoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ContactoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('nombre');
        $builder->add('email', 'email');
        $builder->add('asunto');
        $builder->add('mensaje', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}
