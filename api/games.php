<?php 
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json; charset=utf-8");

  
      // meu
    $game[1] = array(
      "id" => 1,
      "title" => "Omega Collapse",
      "description" => "Em um mundo onde a civilização sucumbiu a uma terrível epidemia zumbi, um pequeno grupo de sobreviventes liderado por Alex, um ex-engenheiro brilhante, encontrou refúgio dentro dos muros de uma antiga fortaleza.",
      "link" => "http://localhost/aula/TechAcademy2/game/omegacollaps/index.html",
 
      "logo" => "http://localhost/aula/TechAcademy2/imagens-jogo/omegacollapse.png",
      "site" => "https://omegacollapse.vercel.app/index.html",
      );

        // alana
    $game[2] = array(
      "id" => 2,
      "title" => "Meowtopia",
      "description" => "Em Meowtopia, os jogadores assumem o controle de Buggy, enquanto ele se aventura numa missão para encontrar sua amiga desaparecida, Lily. Com gráficos Pixel Art, explore 3 fases desvendando as pistas deixadas para trás, enquanto Buggy mergulha cada vez mais fundo na investigação, com um detetive que parece ter seus próprios segredos.",
      "link" => "#",
 
      "logo" => "http://localhost/aula/TechAcademy2/imagens-jogo/meowtopia.jpeg",
      "site" => "https://omegacollapse.vercel.app/index.html",
      );

        // lucas
    $game[3] = array(
      "id" => 3,
      "title" => "Crime Soncurse",
      "description" => "Você assumirá o papel de Hoenn, um poderoso e experiente mago que domina o controle da luz. Vestido com uma capa vermelha, ele exala uma aura de mistério e poder enquanto manipula os mais brilhantes feixes de luz para moldar o mundo ao seu redor. Com olhos azuis que brilham com a intensidade das estrelas, Hoenn é um mestre em utilizar sua magia luminosa tanto para iluminar o caminho quanto para deslumbrar e desorientar seus oponentes.",
      "link" => "#",
 
      "logo" => "http://localhost/aula/TechAcademy2/imagens-jogo/crimsoncurse.png",
      "site" => "https://crimsoncurse.000webhostapp.com/",
      );
          // gabriel
    $game[4] = array(
         "id" => 4,
      "title" => "CyberGun",
        "description" => "Você assumirá o papel de Hoenn, um poderoso e experiente mago que domina o controle da luz. Vestido com uma capa vermelha, ele exala uma aura de mistério e poder enquanto manipula os mais brilhantes feixes de luz para moldar o mundo ao seu redor. Com olhos azuis que brilham com a intensidade das estrelas, Hoenn é um mestre em utilizar sua magia luminosa tanto para iluminar o caminho quanto para deslumbrar e desorientar seus oponentes.",
        "link" => "http://localhost/aula/TechAcademy2/game/CYBERGUN/index.html",
   
        "logo" => "http://localhost/aula/TechAcademy2/imagens-jogo/cybergun.jpg",
        );  
             // gabriel 2
    $game[5] = array(
      "id" => 5,
   "title" => "Flyinchicken",
     "description" => "Você assumirá o papel de Hoenn, um poderoso e experiente mago que domina o controle da luz. Vestido com uma capa vermelha, ele exala uma aura de mistério e poder enquanto manipula os mais brilhantes feixes de luz para moldar o mundo ao seu redor. Com olhos azuis que brilham com a intensidade das estrelas, Hoenn é um mestre em utilizar sua magia luminosa tanto para iluminar o caminho quanto para deslumbrar e desorientar seus oponentes.",
     "link" => "http://localhost/aula/TechAcademy2/game/Flyanp Chicken/index.html",

     "logo" => "http://localhost/aula/TechAcademy2/imagens-jogo/cybergun.jpg",
     );  



    echo json_encode($game);



?>