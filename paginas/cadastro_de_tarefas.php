<?php

include "./conexao.php";

$tituloTarefa = $_POST['titulo'] ?? "";
$dataTarefa = $_POST['date'] ?? "";
$erroTitulo = false;
$erroData = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($tituloTarefa)) {
        $erroTitulo = true;
    }

    if (empty($dataTarefa)) {
        $erroData = true;
    }

    if($tituloTarefa && $dataTarefa != ""){
        $inserir = $mysqli->query("INSERT INTO tarefas (tarefa, dataTarefa) VALUES ('$tituloTarefa', '$dataTarefa');");
    }

}


?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-primary mt-5">Nova tarefa</h3>

            <form class="mt-4" action="" method="POST">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título da tarefa</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex: Comprar leite">
                </div>
                <div class="mb-3">
                    <label for="data" class="form-label">Data da tarefa</label>
                    <input type="date" class="form-control" id="data" name="date">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar tarefa</button>

            </form>

            <?php if (!empty($tituloTarefa && $dataTarefa)): ?>
                <div class="alert alert-success mt-3" role="alert">
                    Tarefa cadastrada com sucesso!
                </div>
            <?php endif;?>
            <?php if ($erroTitulo): ?>
                <div class="alert alert-danger mt-3" role="alert">
                    O <strong>título da tarefa</strong> deve ser preenchido!!!
                </div>
            <?php endif;?>
            <?php if ($erroData): ?>
                <div class="alert alert-danger mt-3" role="alert">
                    A <strong>data da tarefa</strong> deve ser preenchido!!!
                </div>
            <?php endif;?>
        </div>
    </div>