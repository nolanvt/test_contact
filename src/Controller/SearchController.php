<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
  /**
   * @Route("/search", name="search")
   */
  public function index(): Response
  {
    return $this->render('search/index.html.twig', [
      'controller_name' => 'SearchController',
    ]);
  }

  public function searchBar()
  {
    $form = $this->createFormBuilder()
      ->setAction($this->generateUrl('handleSearch'))
      ->add('query', TextType::class, [
        'label' => false,
        'attr' => [
          'class' => 'form-control',
          'placeholder' => 'Entrez un mot-clé'
        ]
      ])
      ->add('recherche', SubmitType::class, [
        'attr' => [
          'class' => 'btn btn-primary'
        ]
      ])
      ->getForm();
    return $this->render('search/searchBar.html.twig', [
      'form' => $form->createView()
    ]);
  }

  /**
   * @Route("/handleSearch", name="handleSearch")
   * @param Request $request
   */
  public function handleSearch(Request $request, ArticleRepository $repo)
  {
    $query = $request->request->get('form')['query'];
    if ($query) {
      $articles = $repo->findArticlesByName($query);
    }
    return $this->render('search/index.html.twig', [
      'articles' => $articles
    ]);
  }

  public function searchAction()
  {
    $request = $this->getRequest();
    $data = $request->request->get('search');


    $em = $this->getDoctrine()->getManager();
    $query = $em->createQuery(
      'SELECT p FROM FooTransBundle:Suplier p
    WHERE p.name LIKE :data')
      ->setParameter('data', $data);


    $res = $query->getResult();

    return $this->render('FooTransBundle:Default:search.html.twig', array(
      'res' => $res));
  }
}
