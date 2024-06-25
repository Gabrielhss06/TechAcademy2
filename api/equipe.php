<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

  
      
    $desenvolvedor[1] = array(
      "id" => 1,
      "nome" => "Gabriel Speciam",
      "idade" => "",
      "instagram" => "https://www.instagram.com/gabriel_s.speciam?igsh=MTZ6anFveDFnZGZ3cQ==",
 
      "foto" => "imagem-equipe/minha-foto.jpg",
      );
        
    $desenvolvedor[2] = array(
      "id" => 2,
      "nome" => "Gabriel Mastracose",
      "idade" => "Olá prazer meu nome é Gabriel,sou o criador do site Omega Collaps e BuhYub,",
      "instagram" => "jogo",
 
      "foto" => "imagem-equipe/gabriel-2.jpeg",
      );
      
    $desenvolvedor[3] = array(
      "id" => 3,
      "nome" => "Gabriel Menechini",
      "idade" => "",
      "instagram" => "jogo",
 
      "foto" => "http://localhost/aula/TechAcademy2/imagem-equipe/gabriel-menechini.jpeg",
      );
        
    $desenvolvedor[4] = array(
      "id" => 4,
      "nome" => "Alana",
      "idade" => "Olá prazer meu nome é Gabriel,sou o criador do site Omega Collaps e BuhYub,",
      "instagram" => "",
 
      "foto" => "imagem-equipe/alana.png",
      );

        
    $desenvolvedor[5] = array(
      "id" => 5,
      "nome" => "Gabriel Mastracose",
      "idade" => "Olá prazer meu nome é Gabriel,sou o criador do site Omega Collaps e BuhYub,",
      "instagram" => "jogo",
 
      "foto" => "imagem-equipe/gabriel-2.jpeg",
      );  

    
        
       echo json_encode($desenvolvedor);


?>