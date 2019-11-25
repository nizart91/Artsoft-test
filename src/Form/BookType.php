<?php

namespace App\Form;

use App\Entity\Book;
use App\Entity\Author;
use App\Form\AuthorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label' => 'Название книги'])
            ->add('author', EntityType::class, [
                'class' => Author::class,
                'label' => 'Автор книги',
                'placeholder' => 'Выберите автора',
                'choice_label' => function(Author $author) {
                    return sprintf('(%d) %s', $author->getId(), $author->getName());
                }
            ])
            ->add('year', TextType::class, ['label' => 'Год издания'])
            ->add('introtext', TextareaType::class, ['label' => 'Аннотация'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
