<?php 

// require_once 'robot.php';
// require_once 'hewan.php';
// require_once  'orang.php';

// // AutoLoad Class
spl_autoload_register(function ($classname){
    include $classname . '.php';
});

// orang::bersuara();
// echo orang::$suara;
$robot1 = new robot('testing', 12);

$robot1->set_suara('okey satt')->set_berat(320);

echo $robot1->suara . '  -  ' . $robot1->berat;










// $robot1 = new robot('akwoakwokaokw', 34);
// $robot4 = new robot('ngik ngok ngomenakhai', 21);

// $robot1->set_berat(30);
// $robot1->set_suara('ngoohhh~ ngguuohh~ <br>');
// echo 'Beratnya... '. $robot1->get_berat(). "<br>";
// $robot4->set_suara('ngik ngok ngomenakhai');
// echo 'Bunyinya... '. $robot4->get_suara();
// $robot1->bersuara();
// echo $robot1->berat_robot();
// echo "<br>";

// var_dump($robot1);
// echo $robot1->suara . 'beratnya ' . $robot1->berat;

    // $robothewan = new robot_hewan('ngik ngok ngomenakhai awkoa', 21);
    // echo $robot4->get_berat();