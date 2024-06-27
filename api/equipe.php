<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

  
      
    $desenvolvedor[1] = array(
      "id" => 1,
      "nome" => "Gabriel Speciam",
      "dados" => "Olá, meu nome é Gabriel Speciam. Sou o desenvolvedor deste site, BuyHub, e também o criador do jogo OmegaCollaps. Tenho 18 anos e estou no primeiro período de TADS. Entre em contato comigo através do Instagram que está logo abaixo.",
      "instagram" => "https://www.instagram.com/gabriel_s.speciam?igsh=MTZ6anFveDFnZGZ3cQ==",
 
      "foto" => "imagem-equipe/minha-foto.jpeg",
      );
        
    $desenvolvedor[2] = array(
      "id" => 2,
      "nome" => "Gabriel Mastracose",
      "dados" => "Olá, meu nome é Gabriel Mastracose, tenho 20 anos e estou cursando o primeiro período de TADS, sou criador do jogo FlyanpChicken. Qualquer dúvida ou sujestão entre em contato pelo meu Instagram logo a baixo",
      "instagram" => "https://www.instagram.com/gabrielmastracose?igsh=MTF4Y2E1MG03NTFpeQ%3D%3D&utm_source=qr",
 
      "foto" => "imagem-equipe/gabriel-2.jpeg",
      );
      
    $desenvolvedor[3] = array(
      "id" => 3,
      "nome" => "Gabriel Menechini",
      "dados" => "Olá, meu nome é Gabriel Menechin, tenho 18 anos e estou cursando o primeiro período de TADS, sou criador do jogo Cybergun. Qualquer dúvida ou sujestão entre em contato pelo meu Instagram logo a baixo.",
      "instagram" => "https://www.instagram.com/gabrielmenechini?igsh=bDFsM2M2dGtoNDZw",
 
      "foto" => "imagem-equipe/gabriel-menechini.jpeg",
      );
        
    $desenvolvedor[4] = array(
      "id" => 4,
      "nome" => "Alana",
      "dados" => "Olá, meu nome é Alana Kovalski. Tenho 18 anos e estou cursando o primeiro período de TADS.Sou a criadora do jogo Meowtopia. Qualquer dúvida ou sugestão,entre em contato pelo meu Instagram logo abaixo.",
      "instagram" => "https://www.instagram.com/alanakov?igsh=ajM3bGgwcnVhNzB1",
 
      "foto" => "imagem-equipe/alana.png",
      );

        
    $desenvolvedor[5] = array(
      "id" => 5,
      "nome" => "Lucas Brasso",
      "dados" => "Olá, meu nome é Lucas Brasso, tenho 18 anos e estou cursando o primeiro período de TADS, sou criador do jogo Crimson Curse Qualquer dúvida ou sujestão entre em contato pelo meu Instagram logo a baixo.",
      "instagram" => "https://www.instagram.com/lucas.brasso?igsh=MW9vZzFyaWlxaGM4Zw==",
 
      "foto" => "imagem-equipe/lucasBrasso.jpg",
      );  

    
        
       echo json_encode($desenvolvedor);


?>