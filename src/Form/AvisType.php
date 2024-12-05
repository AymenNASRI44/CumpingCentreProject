<?php

namespace App\Form;

use App\Entity\Avis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Lieucamping;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('commentaire')
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'nom', 
                'label' => 'Utilisateur',
                'disabled' => true, 
            ])
            ->add('id_lieu', EntityType::class, [
                'class' => Lieucamping::class,
                'choice_label' => 'nom',
                'label' => 'Lieu de camping',
                'disabled' => true, 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}
