<?php 
require_once 'robot.php';
require_once 'index.php';

    // ============= INHERITANCE || PEWARISAN =========================
    class robot_hewan extends robot{

        public function get_power(){
            echo 'Saya hewan laut, bisa terbang...';
        }


     // ============== Overriding =================
     public function get_suara(){
        return 'Suaranya adalah....' . $this->suara;
    }
    
    public function test(){
      return $this->get_suara();
    }
}

?>