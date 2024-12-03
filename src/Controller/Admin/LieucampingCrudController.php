<?php

namespace App\Controller\Admin;

use App\Entity\Lieucamping;
use App\Entity\Region;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class LieucampingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Lieucamping::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('nom', 'Nom'),
            AssociationField::new('region_id', 'Region')
                ->setCrudController(RegionCrudController::class)
                ->setFormTypeOption('choice_label', 'nom_region'),
            TextEditorField::new('description', 'Description'),
            TextField::new('coordonner', 'Coordonnées'),
            ImageField::new('photo', 'Photo')
                ->setBasePath('/uploads/photos/')
                ->setUploadDir('public/uploads/photos/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            IntegerField::new('capacite', 'capacite'),    
        ];
    }
}
