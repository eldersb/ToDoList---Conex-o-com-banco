<?php

include "./conexao.php";

$result = $mysqli->query("SELECT * FROM tarefas");


?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-end">
                <h2 class="text-primary mt-5">Tarefas cadastradas</h1>
                    <a href="index.php?id=1" class="btn btn-primary">Limpar tudo</a>

            </div>

            <table class="table mt-4 table-hover table-bordered">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tarefa</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ação</th>
                </tr>


                <?php

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td> " . $row['id'] . "</td>";
                    echo "<td> " . $row['tarefa'] . "</td>";
                    echo "<td> " . $row['dataTarefa'] . "</td>";
                    echo "<td><a onclick='confirmarExclusao('') href='#'>Excluir </a></td>";
                    echo "<tr>";
                }


                ?>



                </tr>
            </table>
        </div>