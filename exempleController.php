<?php
/*
* @ YOUR CONTROLLER
*/
namespace App\Controllers;

class YourController extends BaseController{

   public function showpageExample(){
      /*
      * Show Page with Datas
      */
      $data = [
          'global'        => $this->viewData,
          'page'          => $Page
      ];
  
      helper('twig');
      $twig = twig(true, true);
  
      // dont forget to make a page here and base.twig and more please follow official documentation to make template.
      return $twig->render('pages/singlepage.twig', $data);
    }
  
}
