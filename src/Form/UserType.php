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
            ->add('id_region', EntityType::class, [
                'class' => Region::class,  // Spécifiez la classe de l'entité associée
                'choice_label' => 'nom_region',  // Utilisez ici la propriété de la région à afficher
                'label' => 'Région',
                'placeholder' => 'Choisir une région',  // Optionnel : message pour le champ vide
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
