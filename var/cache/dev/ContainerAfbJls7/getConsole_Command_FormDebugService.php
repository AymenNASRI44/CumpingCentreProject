<?php

namespace ContainerAfbJls7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Command/DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type'], [0 => 'App\\Form\\AvisType', 1 => 'App\\Form\\ContactFormType', 2 => 'App\\Form\\FavoritType', 3 => 'App\\Form\\LieucampingType', 4 => 'App\\Form\\RegistrationFormType', 5 => 'App\\Form\\ReservationType', 6 => 'App\\Form\\UserType', 7 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 8 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 9 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 10 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 11 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 12 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 13 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 14 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension', 9 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');
        $instance->setDescription('Display form type information');

        return $instance;
    }
}
