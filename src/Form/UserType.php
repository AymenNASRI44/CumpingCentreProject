<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Region;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            
            ->add('password')
            ->add('nom')
            ->add('prenom'  )
            ->add('nom_region', EntityType::class, [
                'class' => Region::class,  
                'choice_label' => 'nom_region',  
                'placeholder' => 'Sélectionner une région',  
                'required' => true,  
            ]);
    } 

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
