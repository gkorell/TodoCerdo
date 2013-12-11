<?php

namespace TodoCerdo\TodoCerdoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RecetaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titulo','text',array('label'=>'Titulo: '))
            ->add('file')
            ->add('descripcion','text',array('label'=>'Descripcion: '))
            ->add('detalle','textarea',array('label'=>'Detalle: ','attr' => array(
            'class' => 'tinymce',
            'data-theme' => 'simple' // simple, advanced, bbcode
            )))
            ->add('tipococcion_id','entity',array('label'=>'Tipo de Cocción: ','class'=>'TodoCerdoTodoCerdoBundle:TipoCoccion'))
            ->add('producto_id','entity',array('label'=>'Producto: ','class'=>'TodoCerdoTodoCerdoBundle:Producto'))
        ;
    }

    public function getName()
    {
        return 'todocerdo_todocerdobundle_recetatype';
    }
}