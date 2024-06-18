<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

  
      
    $game[1] = array(
      "id" => 1,
      "title" => "Omega Collapse",
      "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.",
      "linkJogo" => "jogo",
 
      "logo" => "http://localhost/aula/TechAcademy2/imagem/omegacollapselogo.png",
      );

        
    $game[2] = array(
      "id" => 2,
      "title" => "Meowtopia",
      "description" => "Em Meowtopia, os jogadores assumem o controle de Buggy, enquanto ele se aventura numa missão para encontrar sua amiga desaparecida, Lily. Com gráficos Pixel Art, explore 3 fases desvendando as pistas deixadas para trás, enquanto Buggy mergulha cada vez mais fundo na investigação, com um detetive que parece ter seus próprios segredos.",
      "linkJogo" => "jogo",
 
      "logo" => "http://localhost/aula/TechAcademy2/imagem/omegacollapselogo.png",
      );

        
    $game[3] = array(
      "id" => 3,
      "title" => "Omega Collapse",
      "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza",
      "linkJogo" => "jogo",
 
      "logo" => "http://localhost/aula/TechAcademy2/imagem/omegacollapselogo.png",
      );




    echo json_encode($game);



?>