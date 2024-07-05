<?php 

include "./conexao.php";

$result = $mysqli->query("SELECT tarefa FROM tarefas");

$tarefaBuscada = $_POST['buscar'] ?? "";


?>


<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-primary mt-5">Buscar Tarefas</h2>
                    <form class="mt-2 mb-5" action="">
                        <div class="mt-2 d-flex justify-content-center align-items-end">
                            <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Digite a tarefa a ser buscada">
                            <input type="submit" class="btn btn-primary mt-2" value="Buscar tarefa">
                        </div>
                    </form>

                    <?php 
                    
                    while($row = $result->fetch_assoc()){
                        $tarefas = $row;
                        foreach($tarefas as $task){
                           if(str_contains(strtolower($task), strtolower($tarefaBuscada))){
                                // $result2 = $mysqli->query("SELECT * FROM tarefas WHERE tarefa = $task;");
                            }
                           }
                          
                    }
                    
                    
                    ?>


        </div>
</div>