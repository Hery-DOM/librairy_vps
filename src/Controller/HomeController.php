<?php


namespace App\Controller;


use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * afficher les livres et leur genre
     */
    public function home(BookRepository $bookRepository)
    {
        //récupération des livres
        $books = $bookRepository->findAll();

        return $this->render("home.html.twig",[
            'books' => $books
        ]);
    }

}