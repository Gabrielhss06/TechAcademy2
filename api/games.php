<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");


    $game[1] = array(
        "id" => 1,
        "title" => "Omega Collapse",
        "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza",
        "linkJogo" => "jogo",
   
        "logo" => "http://localhost/Techacademy2/img/meowtopia.jpeg",
        );


        $game[2] = array(
            "id" => 2,
            "title" => "Omega Collapse",
            "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza",
            "linkJogo" => "jogo",
       
            "logo" => "http://localhost/Techacademy2/imagem/meowtopia.jpeg",
            );
            $game[3] = array(
                "id" => 3,
                "title" => "Omega Collapse",
                "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza",
                "linkJogo" => "jogo",
           
                "logo" => "http://localhost/Techacademy2/imagem/meowtopia.jpeg",
                );
                $game[4] = array(
                    "id" => 4,
                    "title" => "Omega Collapse",
                    "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza",
                    "linkJogo" => "jogo",
               
                    "logo" => "http://localhost/Techacademy2/imagem/meowtopia.jpeg",
                    );
                    $game[5] = array(
                        "id" => 5,
                        "title" => "Omega Collapse",
                        "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza",
                        "linkJogo" => "jogo",
                   
                        "logo" => "http://localhost/Techacademy2/imagem/omegacollapselogo.png",
                        );
    








    echo json_encode($game);



?>