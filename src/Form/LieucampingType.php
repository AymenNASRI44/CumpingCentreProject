<?php

namespace App\Form;

use App\Entity\Lieucamping;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; // Importez la classe EntityType
use App\Entity\Region;
class LieucampingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('coordonner')
            ->add('photo')
            ->add('capacite')
            ->add('PlacesRestantes')
            ->add('region_id', EntityType::class, [
                'class' => Region::class,  // Spécifiez la classe de l'entité associée
                'choice_label' => 'nom_region',  // Utilisez ici la propriété de la région à afficher
                'label' => 'Région',
                'placeholder' => 'Choisir une région',  // Optionnel : message pour le champ vide
                'required' => true,
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lieucamping::class,
        ]);
    }
}
