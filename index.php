<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-lg bg-primary text-white">
        <div class="container">
            <a class="navbar-brand" href="/">ToDoList</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Listar tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/?p=cadastro">Cadastrar tarefas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/?p=buscar">Buscar tarefas</a>
                    </li>
                </ul>
                </ul>
                
            </div>
        </div>
    </nav>

    <?php 
    
    $paginaAtual = $_GET['p'] ?? "";

    switch ($paginaAtual) {
        case "":
            include "./paginas/listagem_de_tarefas.php";
            break;
        case "cadastro":
            include "./paginas/cadastro_de_tarefas.php";
            break;
        case "buscar":
            include "./paginas/buscar_tarefas.php";
            break;
        default:
        include "./paginas/404.php";
        
    }

   
        
   
       

    

    ?>

<script>


</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>