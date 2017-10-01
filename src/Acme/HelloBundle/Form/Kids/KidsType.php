<?php

namespace Acme\HelloBundle\Form\Kids;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class KidsType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options){
        
    $builder
        ->add('fullName')
        ->add('soname')
        ->add('name')
        ->add('fathersName')
        ->add('birthDate', BirthdayType::class)
        ->add('gender')
        ->add('faces');
    }
    
    public function getDefaultOptions(array $options){
        return array(
            'data_class' => 'Acme\HelloBundle\Entity\Kids',
        );
    }
}

