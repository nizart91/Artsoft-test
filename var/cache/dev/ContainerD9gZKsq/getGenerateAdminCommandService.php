<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\AdminBundle\Command\GenerateAdminCommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Command/QuestionableCommand.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Command/GenerateAdminCommand.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Model/ModelManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/src/Model/LockInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/doctrine-orm-admin-bundle/src/Model/ModelManager.php';

$this->services['Sonata\\AdminBundle\\Command\\GenerateAdminCommand'] = $instance = new \Sonata\AdminBundle\Command\GenerateAdminCommand(($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ['sonata.admin.manager.orm' => new \Sonata\DoctrineORMAdminBundle\Model\ModelManager(($this->services['doctrine'] ?? $this->getDoctrineService()))]);

$instance->setName('sonata:admin:generate');

return $instance;