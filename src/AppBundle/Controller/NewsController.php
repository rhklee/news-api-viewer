<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class NewsController extends Controller {

   /**
    * @Route("/{lang}", name="news_homepage")
    */
   public function indexAction($lang=''){
      $sourcesJson = json_decode(
            $this->get("http")->performRequest(
                'https://newsapi.org/v1/sources?language='.$lang,
                'application/json'),
            true
        );
      return $this->render("news/index.html.twig",
                           array('sources' => $sourcesJson['sources']));
   }

   /**
    * @Route("/news/getArticles")
    */
   public function getArticles(Request $request){
      $sourceId = $request->request->get('newsId');
      $sourceBaseUrl = 'https://newsapi.org/v1/articles?source=';
      $newsApiKey = $this->getParameter('news_api_key');

      $data = json_decode($this->get("http")->performRequest(
            $sourceBaseUrl.$sourceId.'&apiKey='.$newsApiKey,
            'application/json'
         ), true);
      return new JsonResponse($data); 
   }

}