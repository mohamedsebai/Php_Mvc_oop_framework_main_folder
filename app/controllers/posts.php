<?php


// when you return view('view-Flie-name', $data); params data is alaways name as $data it's can not be another name;

class posts extends Framework{

  // public function __construct(){
  //   $this->postModel = $this->model('posts');
  // }

  public function index(){
    echo 'index.php from index method from controller posts';
  }

  public function edit($id){
    $data = 2;
    return $this->view('posts', $data);
  }


}
