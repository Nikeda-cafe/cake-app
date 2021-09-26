<?php

  namespace App\Controller;

  use App\Controller\AppController;

  class HelloController extends AppController{
    // public $autoRender = false;
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
      $data = array(
        array('name' => 'xxx','address' => 'aaa' ),
        array('name' => 'yyy','address' => 'bbb' ),
        array('name' => 'zzz','address' => 'ccc' ),
      );
      // var_dump($data);
      $this->set([
        'hello' => $data,
        '_serialize' => ['hello']
      ]);
    }

    public function form()
    {
      $this->viewBuilder()->autoLayout(false);

    }
  }
