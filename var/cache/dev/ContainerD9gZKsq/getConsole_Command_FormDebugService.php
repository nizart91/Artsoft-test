<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'Sonata\\CoreBundle\\Form\\Type', 4 => 'Sonata\\Form\\Type', 5 => 'Sonata\\BlockBundle\\Form\\Type', 6 => 'Sonata\\AdminBundle\\Form\\Type', 7 => 'Sonata\\AdminBundle\\Form\\Type\\Filter'], [0 => 'App\\Form\\AuthorType', 1 => 'App\\Form\\BookType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 3 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 4 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 5 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 6 => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 7 => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 8 => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 9 => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 10 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 11 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 12 => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 13 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 14 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 15 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 16 => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 17 => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 18 => 'Sonata\\CoreBundle\\Form\\Type\\ColorType', 19 => 'Sonata\\Form\\Type\\ImmutableArrayType', 20 => 'Sonata\\Form\\Type\\BooleanType', 21 => 'Sonata\\Form\\Type\\CollectionType', 22 => 'Sonata\\Form\\Type\\DateRangeType', 23 => 'Sonata\\Form\\Type\\DateTimeRangeType', 24 => 'Sonata\\Form\\Type\\DatePickerType', 25 => 'Sonata\\Form\\Type\\DateTimePickerType', 26 => 'Sonata\\Form\\Type\\DateRangePickerType', 27 => 'Sonata\\Form\\Type\\DateTimeRangePickerType', 28 => 'Sonata\\Form\\Type\\EqualType', 29 => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 30 => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 31 => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 32 => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 33 => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 34 => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 35 => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 36 => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 37 => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 38 => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 39 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 40 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 41 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 42 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 43 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 44 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 45 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\FormTypeFieldExtension', 9 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\MopaCompatibilityTypeFieldExtension', 10 => 'Sonata\\AdminBundle\\Form\\Extension\\ChoiceTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

$instance->setName('debug:form');

return $instance;
