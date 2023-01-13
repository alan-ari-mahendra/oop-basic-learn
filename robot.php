<?php 

class robot{
    // public, protected, private
    //property
    public $suara;
    // protected $suara; // hanya bisa diakses oleh keturunan langsung
    public $berat;


    // Constructor
    public function __construct($suara, $berat){
        $this->suara = $suara;
        $this->berat = $berat;
    }

    // metode set && motode get

    public function set_suara($suara){
        $this->suara = $suara;
        return $this;
    }


    public function get_suara(){
        return $this->suara;
    }

    public function set_berat($berat){
        $this->berat = $berat;
    }



    public function get_berat(){
        return $this->berat;
    }


    public function bersuara(){
        echo 'Suara robotnya .... '. $this->suara;
    } 

    public function berat_robot(){
        return $this->berat;
    }
}



?>