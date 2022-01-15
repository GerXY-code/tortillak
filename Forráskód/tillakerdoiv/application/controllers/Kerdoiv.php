<?php


class Kerdoiv extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->model('Kerdoiv_model','k_model');
   }
   
   
   public function index(){
    $answers = $this->k_model->get_all_answer();
    $view_params = [
         'answers'   =>  $answers
    ];

     
       $this->load->view('answers/list', $view_params);
   }

   public function fill(){
          $this->load->view('answers/fill');
          $this->add();
   }

   public function add(){
     if(isset($_POST['submit'])){
             $row =   $this->k_model->insert(
               $this->input->post('1'),
               $this->input->post('2'),
               $this->input->post('3'),
               $this->input->post('4'),
               $this->input->post('5'),
               $this->input->post('6'),
               $this->input->post('txt1'),
               $this->input->post('txt2'),
               
             );

             Redirect('Kerdoiv/index');
     }

     
 }


}
