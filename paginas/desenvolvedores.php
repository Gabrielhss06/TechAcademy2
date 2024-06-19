<?php
$api = file_get_contents("http://localhost/aula/TechAcademy2/api/equipe.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $equipe) {
}
?>

<?php
foreach ($dadosApi as $jogo) {
?>
<div class="row g-0 bg-body-secondary position-relative mt-5">
  <div class="col-md-6 mb-md-0 p-md-4">
    <img src="<?= $equipe->nome ?>" class="w-100" alt="...">
  </div>
  <div class="col-md-6 p-4 ps-md-0">
    <h5 class="mt-0"><?= $equipe->nome ?></h5>
    <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
    <a href="#" class="stretched-link">Go somewhere</a>
    <h1><?= $equipe->id ?></h1>
  </div>
</div>
<?php
  }
?>