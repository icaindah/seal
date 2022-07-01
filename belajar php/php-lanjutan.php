<?php

    $nama = "ica";
    $umur = 3;
    $tinggi = 3.5;

   // $kalimat = "Halo, nama saya $nama, umur saya $umur, tinggi saya $tinggi";
    //echo $kalimat;

    //if else
    /*
    if($nama=="ica"){
        echo "Benar ica";
    }else{
        echo "Kamu siapa?";
    }
    */

    /*
    //switch case
    switch($nama){
    case "ica":
        echo "Benar ica";
    break;
    default:
        echo "kamu siapa?";
    }
    */

    /*
    //ternary operator
    $kalimat = $nama == "ica" ? "benar ica" : "kamu siapa?";
    echo $kalimat

    /*
    //perulangan for
    for($i=0;$i<=10;$i++){
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
    }
    */

    //perulangan while
    /*
    $i=0;
    while($i<=10){
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++
    } 
    */   

    //perulangan do while
    /*
    $i=0;
    do{
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++;
    }while($i<11);
    */

    //perulangan foreach + built in function
    /*
    $nama = array(
            "Ega"=>2500000,
            "Nazir"=>10000000,
            "Gus Pur"=>12000000,
            "Maulana"=>10400000,
            "Abudl Wahid"=>11000000,
            "Herlina"=>154000000,
            "Dea"=>100012000);
    foreach ($nama as $sebutan => $nilai){
        echo "Nama saya $sebutan nilai buruan saya adalah Rp".number_format($nilai,2,".",",");
        echo "<br/>";
    }
    */

    //user defined function
    /*
    function sebut_nama($nama){
        $sebut = "halo, nama saya $nama";
        return $sebut;
    }
    echo sebut_nama($nama);
    
    //built in function
    echo strlen("Halo, nama saya $nama");
    */
?>