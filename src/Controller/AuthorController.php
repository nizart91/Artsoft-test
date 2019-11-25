<?php

namespace App\Controller;

use App\Entity\Author;
use App\Form\AuthorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    /**
     * @Route("/", name="author")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $authors = $em->getRepository(Author::class)->findAllWithBook();

        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
            'authors' => $authors,
        ]);
    }


    /**
     * @Route("/author/single/{author}", name="single_author")
     */
    public function single(Author $author)
    {
        return $this->render('author/single.html.twig', [
            'author' => $author,
        ]);
    }


    /**
     * @Route("/author/create", name="create_author")
     */
    public function create(Request $request)
    {
        $author = new Author();

        $form = $this->createForm(AuthorType::class, $author);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $author = $form->getData();

            $em = $this->getDoctrine()->getManager();

            $em->persist($author);
            $em->flush();

            return $this->redirectToRoute('author');
        }

        return $this->render('author/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/author/update/{author}", name="update_author")
     */
    public function update(Request $request, Author $author)
    {
        $form = $this->createForm(AuthorType::class, $author, [
            'action' => $this->generateUrl('update_author', [
                'author' => $author->getId(),
            ]),
            'method' => 'POST',
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $author = $form->getData();

            $em = $this->getDoctrine()->getManager();

            $em->persist($author);
            $em->flush();

            return $this->redirectToRoute('author');
        }

        return $this->render('author/form_upd.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/author/delete/{author}", name="delete_author")
     */
    public function delete(Author $author)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($author);
        $em->flush();

        return $this->redirectToRoute('author');
    }
}
