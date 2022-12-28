<?php
  class Pages extends Controller {
    public function __construct(){
     $this->postModel = $this->model('Post');
    }

    public function index(){
      $data = [
        'title' => 'welcome'
      ];
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About US'
      ];
      $this->view('pages/about', $data);
    }
  }