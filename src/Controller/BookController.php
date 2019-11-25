<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Entity\Author;
use App\Form\AuthorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class BookController extends AbstractController
{
    /**
     * @Route("/book", name="book")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $books = $em->getRepository(Book::class)->findAllWithAuthor();

        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
            'books' => $books,
        ]);
    }

    /**
     * @Route("/book/single/{book}", name="single_book")
     */
    public function single(Book $book)
    {
        return $this->render('book/single.html.twig', [
            'book' => $book,
        ]);
    }


    /**
     * @Route("/book/create", name="create_book")
     */
    public function create(Request $request)
    {
        //$this->getDoctrine()->req
        $book = new Book();

        //$em = $this->getDoctrine()->getManager();
        //$authors = $em->getRepository(Author::class)->findAll();

        $form = $this->createForm(BookType::class, $book, [
            'action' => $this->generateUrl('create_book', [
                //'authors' => $authors,
            ]),
            'method' => 'POST',
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $book = $form->getData();

            $em = $this->getDoctrine()->getManager();

            $em->persist($book);
            $em->flush();

            return $this->redirectToRoute('book');
        }

        return $this->render('book/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/book/update/{book}", name="update_book")
     */
    public function update(Request $request, Book $book)
    {
        $em = $this->getDoctrine()->getManager();
        //$authors = $em->getRepository(Author::class)->findAll();

        $form = $this->createForm(BookType::class, $book, [
            'action' => $this->generateUrl('update_book', [
                'book' => $book->getId(),
                //'authors' => $authors,
            ]),
            'method' => 'POST',
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $book = $form->getData();

            $em = $this->getDoctrine()->getManager();

            $em->persist($book);
            $em->flush();

            return $this->redirectToRoute('book');
        }

        return $this->render('book/form_upd.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/book/delete/{book}", name="delete_book")
     */
    public function delete(Book $book)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($book);
        $em->flush();

        return $this->redirectToRoute('book');
    }
}
