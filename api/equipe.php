<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

  
      
    $desenvolvedor[1] = array(
      "id" => 1,
      "nome" => "Gabriel",
      "description" => "Olá prazer meu nome é Gabriel,sou o criador do site Omega Collaps e BuhYub,",
      "linkJogo" => "jogo",
 
      "foto" => "http://localhost/aula/TechAcademy2/imagem-equipe/omegacollapse.png",
      );
      
      
      
    
        
      
      
    




    echo json_encode($desenvolvedor);



?>