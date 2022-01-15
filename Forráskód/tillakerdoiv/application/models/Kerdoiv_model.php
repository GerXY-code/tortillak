<?php


class Kerdoiv_model extends CI_Model {
    public function __construct() {

         parent::__construct();
         
         $this->load->database();
    }
    public function get_all_answer(){

        $this->db->select("id, valasz"); 
        $this->db->from('valaszok'); 

        $records = $this->db->get()->result();
        return $records;



    }

    public function insert($one,$two,$three,$four,$five,$six,$seven,$eigth){


        $Rone = [
            'id' => 1,
            'valasz' => $one,

          ];
          $this->db->insert('valaszok', $Rone);
             




          $Rtwo = [
            'id' => 2,
            'valasz' => $two,

          ];
          $this->db->insert('valaszok', $Rtwo);
             




          $Rthree = [
            'id' => 3,
            'valasz' => $three,

          ];
          $this->db->insert('valaszok', $Rthree);




          $Rfour = [
            'id' => 4,
            'valasz' => $four,

          ];
          $this->db->insert('valaszok', $Rfour);




          $Rfive = [
            'id' => 5,
            'valasz' => $five,

          ];
          $this->db->insert('valaszok', $Rfive);





          $Rsix = [
            'id' => 6,
            'valasz' => $six,

          ];
          $this->db->insert('valaszok', $Rsix);





          $Rseven = [
            'id' => 7,
            'valasz' => $seven,

          ];
          $this->db->insert('valaszok', $Rseven);




          $Reigth = [
            'id' => 8,
            'valasz' => $eigth,

          ];
          $this->db->insert('valaszok', $Reigth);

          }
         


    


}
