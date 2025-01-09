<?php

namespace App\Form;
use App\Entity\Reservation;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
    ->add('date_d', DateTimeType::class, [
        'label' => 'Date de début',
        'widget' => 'single_text',
        'required' => true,
    ])
    ->add('date_f', DateTimeType::class, [
        'label' => 'Date de fin',
        'widget' => 'single_text',
        'required' => true,
    ])
    ->add('nombre_personnes', IntegerType::class, [
        'label' => 'Nombre de personnes',
        'required' => true,
    ])
    ->add('submit', SubmitType::class, [
        'label' => 'Réserver',
    ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}