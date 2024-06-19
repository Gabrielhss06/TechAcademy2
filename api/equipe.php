<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

  
      
    $desenvolvedor[1] = array(
      "id" => 1,
      "nome" => "Gabriel",
      "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.",
      "linkJogo" => "jogo",
 
      "foto" => "http://localhost/aula/TechAcademy2/imagem-equipe/omegacollapse.png",
      );
      
      $desenvolvedor[2] = array(
      "id" => 45,
      "nome" => "",
      "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.",
      "linkJogo" => "jogo",
 
      "foto" => "http://localhost/aula/TechAcademy2/imagem-equipe/omegacollapse.png",
      );
      $desenvolvedor[3] = array(
        "id" => 1,
        "nome" => "Gabriel",
        "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.",
        "linkJogo" => "jogo",
   
        "foto" => "http://localhost/aula/TechAcademy2/imagem-equipe/omegacollapse.png",
        );
        
        $desenvolvedor[4] = array(
        "id" => 45,
        "nome" => "Gabriel",
        "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.",
        "linkJogo" => "jogo",
   
        "foto" => "http://localhost/aula/TechAcademy2/imagem-equipe/omegacollapse.png",
        );
      
    
        
      
      
    




    echo json_encode($desenvolvedor);



?>