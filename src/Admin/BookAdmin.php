<?php

// src/Admin/AuthorAdmin.php

namespace App\Admin;

use App\Entity\Author;
//use App\Entity\Books;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\CollectionType;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

final class BookAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('name', TextType::class, ['label' => 'Название книги'])
            ->add('author', EntityType::class, [
            'class' => Author::class,
            'label' => 'Автор книги',
            'placeholder' => 'Выберите автора',
            'choice_label' => function(Author $author) {
                return sprintf('(%d) %s', $author->getId(), $author->getName());
            }
        ])
            ->add('year', NumberType::class, ['label' => 'Год издания'])
            ->add('introtext', TextareaType::class, ['label' => 'Аннотация'])
            ;
        //$formMapper->add('genre', TextType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name', null, ['label' => 'Название книги'])
            ->add('year', null, ['label' => 'Автор'])
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name', null, ['label' => 'Название книги'])
            ->addIdentifier('author.name', null, ['label' => 'Автор'])
            ->addIdentifier('year', null, ['label' => 'Год'])
            ;
        //$listMapper->addIdentifier('introtext');
    }
}