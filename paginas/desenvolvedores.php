<?php
$api = file_get_contents("http://localhost/aula/TechAcademy2/api/equipe.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $equipe) {
}
?>
<div class="container">
    <h1 class="my-4 text-center">Nossa Equipe de Desenvolvedores</h1>
    <div class="row row-cols-4 ">
        <?php
         foreach ($dadosApi as $equipe) {
        ?>
        <div class="col-sm-3 p-2">
            <div class="card dev-card ">
                <img src="<?= $equipe->foto ?>" class="card-img-top " alt="<?= $equipe->nome ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $equipe->nome ?></h5>
                    <p class="card-text">habilidades</p>
                    <a href="<?= $equipe->instagram ?>" target="_blank" class="btn btn-primary">instagram</a>
                </div>
            </div>
        </div>
<?php
  }
?>