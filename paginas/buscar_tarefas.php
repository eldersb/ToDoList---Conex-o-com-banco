<?php 

include "./conexao.php";

$tarefaBuscada = $_POST['buscar'] ?? "";

if(empty($tarefaBuscada)){
    $result = $mysqli->query("SELECT * FROM tarefas");
} else {
    $tarefaBuscada = strtolower($tarefaBuscada);
    $result = $mysqli->query("SELECT * FROM tarefas WHERE tarefa LIKE '%$tarefaBuscada%'");
    
}

?>


<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-primary mt-5">Buscar Tarefas</h2>
                    <form class="mt-2 mb-5" action="" method="POST">
                        <div class="mt-2 d-flex justify-content-center align-items-end">
                            <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Digite a tarefa a ser buscada">
                            <input type="submit" class="btn btn-primary mt-2" value="Buscar tarefa">
                        </div>
                    </form>

                    <table class="table mt-4 table-hover table-bordered">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tarefa</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ação</th>
                </tr>

                    <?php 
                     
                     if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()){
                            echo "<tr>";
                            echo "<td> " . $row['id'] . "</td>";
                            echo "<td> " . $row['tarefa'] . "</td>";
                            echo "<td> " . $row['dataTarefa'] . "</td>";
                            echo "<td><a onclick='confirmarExclusao('') href='#'>Excluir </a></td>";
                            echo "<tr>";
                        }
                    }

                
                    
                    ?>
</table>

        </div>
</div>
</div>