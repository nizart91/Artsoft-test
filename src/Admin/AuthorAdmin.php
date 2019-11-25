<?php

// src/Admin/AuthorAdmin.php

namespace App\Admin;

//use App\Entity\Author;
//use App\Entity\Books;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\CollectionType;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

final class AuthorAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('name', TextType::class, ['label' => 'Имя автора'])
            ->add('genre', TextType::class, ['label' => 'Жанр']);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name', null, ['label' => 'Имя автора'])
            ->add('genre', null, ['label' => 'Жанр']);
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name', null, ['label' => 'Имя автора'])
            ->addIdentifier('genre', null, ['label' => 'Жанр'])
            ->add(
                'getBooksCount',
                null,
                [
                    'label' => 'Кол-во',
                    'sortable' => true,
                    'sort_field_mapping' => ['fieldName' => 'id'],
                    'sort_parent_association_mappings' => [],
                ]
            )
            ;
    }

    public function createQuery($context = 'list')
    {
        $query = parent::createQuery($context);
        if ('list' === $context) {
            $rootAlias = $query->getRootAliases()[0];
            
            $parameters = $this->getFilterParameters();
            if ('getBooksCount' === $parameters['_sort_by']) {
                $query
                    ->leftJoin($rootAlias.'. books', 'cm')
                    ->groupBy($rootAlias.'.id')
                    ->orderBy('COUNT(cm.id)', $parameters['_sort_order'])
                ;
            }
        }
         
        return $query;  
    }
}