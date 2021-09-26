<?php
  namespace App\Controller;

  use App\Controller\AppController;

  class PeopleController extends AppController
  {
    public function index()
    {
      $data = $this->People->find('all');
      // var_dump($data->toArray());
      $this->set('x',$data->toArray());
    }

    public function regist()
    {
      $userId = $this->request->getQuery('id');
      var_dump($userId);
      die();
    }
  }

