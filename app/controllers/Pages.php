<?php
  class Pages extends Controller {
    public function __construct(){

    }
    public function index(){
      $data = [
        'title' => 'Employee Details',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

    public function login()
    {
      $this->view('pages/login');
    }

    public function guest()
    {
      $model=$this->model('Emp');
      $posts=$model->display1();
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/list',$data);
    }

    public function logout()
    {
      session_unset();
      session_destroy();
     $this->view('pages/login');
    }

    public function login1()
    {
      if(isset($_POST)){
      $email=$_POST['email'];
      $password=$_POST['password'];
      if(admin_name==$email && admin_password==$password)
      {
        session_start();
        $_SESSION['admin_name']='email';

      header('Location:http://localhost/mvc/index/action');
      exit;
      }

      else
      {
        echo "Invalid Username and Password!!!";
        $this->view('pages/login');
      }
    }
  }

  public function action()
  {
    if(isset($_SESSION['admin_name']))
    {
      $model=$this->model('Emp');
      $posts=$model->display1();
        $data=[
        'posts'=>$posts
      ];
      $this->view('pages/action',$data);
    }
    else
    {
      $this->view('pages/login');
      header('Location:http://localhost/mvc/index/login');
      exit;
    }
  }

    public function add()
    {
      if(isset($_SESSION['admin_name'])){
      $this->view('pages/details');
       }else{
      $this->view('pages/login');
       }
    }

    public function view1()
    {
      if(isset($_SESSION['admin_name'])){
      $model=$this->model('Emp');
      $posts=$model->display1();
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/list',$data);
    }else{
      $this->view('pages/login');
    }
  }

    // public function save()
    // {
    //     $model = $this->model('Emp');
    //     $postData =$_POST;
    //     $model->insert($postData);
    //     header('Location:http://localhost/mvc/index/action');  
    // }
    public function save()
    {
      $target_dir="../public/img/";
      $target_file=$target_dir . basename($_FILES["photo"]["name"]);
      move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file);
      $model = $this->model('Emp');
      $postData =$_POST;
      $model->insert($postData,$target_file);
      header('Location:http://localhost/mvc/index/action'); 
    }

    public function display()
    {
      $model=$this->model('Emp');
      $posts=$model->display1();
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/view',$data);
    }

    public function del()
    {
      $this->view('pages/delete');
    }
    // public function del1()
    // {
    //   $model=$this->model('Emp');
    //   $model->del();
    //   header('Location:http://localhost/mvc/index/action');
    // }
    public function delete($id){
      $model1=$this->model('Emp');
      $model1->del($id);
      header('Location:http://localhost/mvc/index/action');
    }
 
    public function search()
    {

      $model=$this->model('Emp');
      $posts=$model->disp();
      if($posts){
      $data=[
        'posts'=>$posts
      ];
      $this->view('pages/list',$data);
    }
    else{
      echo "Search not found";
    }
  }
    public function edit($id)
    {
      if(isset($_SESSION['admin_name'])){
      $models=$this->model('Emp');
      $models1=$models->empp($id);
      $this->view('pages/update',$models1);
    }else{
      $this->view('pages/login');
    }
  }
    
    public function editsave()
    {
      $target_dir="../public/img/";
      $target_file=$target_dir . basename($_FILES["photo"]["name"]);
      move_uploaded_file($_FILES["photo"]["tmp_name"],$target_file);
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
      $Phoneno=$_POST['phoneno'];
      $street=$_POST['street'];
      $city=$_POST['city'];
      $state=$_POST['state'];
      $country=$_POST['country'];
      $pincode=$_POST['pincode'];
      $file=$target_file;
      // $id = $_POST['id'];
      $data=[$firstname,$lastname,$email,$Phoneno,$street, $city,$state,$country,$pincode, $file];
      $modal = $this->model('Emp');
      $models1=$modal->modeleditsave($data,$target_file);
      header('Location:http://localhost/mvc/index/action');
    }
    }