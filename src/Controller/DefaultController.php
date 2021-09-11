<?php

namespace App\Controller;


use App\Entity\Beers;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function home ()
    {
        return $this -> render("home.html.twig");
    }
    /**
     * @Route("/beers", name="beers", methods={"GET"})
     */
    public function showBeers (EntityManagerInterface $em)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $repo = $em->getRepository(Beers::class);
        $beers = $repo->findAll();

        return $this -> render("beers.html.twig", ["beers" => $beers]);
    } 
    /**
     * @Route("/beers/{id}", name="beer")
     */
    public function showBeer (Beers $beer)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render(
            "beer.html.twig",
            ["beer" => $beer]
        );
    }
    /**
     * @Route("/post", name="post", methods={"GET" , "POST"})
     */
    public function registerBeerForm (EntityManagerInterface $em, Request $req)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $name = $req->request->get("name");
        $image = $req->request->get("image");
        $price = $req->request->get("price");
        $content = $req->request->get("content");
        $alcohol_vol = $req->request->get("alcohol_vol");
        $origin = $req->request->get("origin");
        $ingredients = $req->request->get("ingredients");
        $hops = $req->request->get("hops");
        
        if ($name) {

            $newBeer = new Beers();
            $newBeer->setName($name);
            $newBeer->setImage($image);
            $newBeer->setPrice($price);
            $newBeer->setContent($content);
            $newBeer->setAlcoholVol($alcohol_vol);
            $newBeer->setOrigin($origin);
            $newBeer->setIngredients($ingredients);
            $newBeer->setHops($hops);

            $em->persist($newBeer);
            $em->flush();

            return $this->redirectToRoute("beers");
        }


        return $this -> render("post.html.twig");
    }
    /**
     * @Route("/post/delete/{id}", name="deleteBeer")
     */
    public function deleteBeer ($id, EntityManagerInterface $em)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $beer = $em->getRepository(Beers::class)->find($id);
        $em->remove($beer);
        $em->flush();
        return $this -> redirectToRoute("beers");
    }
}