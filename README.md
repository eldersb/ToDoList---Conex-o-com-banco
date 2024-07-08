# ToDoList-Conexao-com-banco
Projeto de construção de um TODO-LIST utilizando PHP.

### Tecnologias Utilizadas:
* HTML
* CSS(Bootstrap)
* PHP (Conexão com banco utilizando msqli)
* MySQL

### Como testar:
 1. Para poder rodar o banco de dados utilize o XAMPP e crie um banco com o nome "todolist" em seu SGBD
 2. Crie um tabela chamda "tarefas" dentro desse banco com os registros _id_, _tarefa_ e _dataTarefa_ (ou cole essa query SQL em seu SGBD):
    CREATE TABLE `tarefas` (
    	`id` INT(11) NOT NULL AUTO_INCREMENT,
    	`tarefa` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci',
    	`dataTarefa` DATE NOT NULL DEFAULT current_timestamp(),
    	PRIMARY KEY (`id`) USING BTREE
    )
    COLLATE='utf8mb4_general_ci'
    ENGINE=InnoDB
    AUTO_INCREMENT=38
    ;
  3. Esse é o código da conexão com o banco (Verifique o nome do seu _servidor_, _usuário_, se possui _senha_, o _nome do banco_ e a _porta_ respectivamente).
     try {
    $mysqli = new mysqli("localhost", "root", "", "todolist", 3306);
    } catch (Exception $e) {
    die('Não consegui me conectar!!!');
    }

  ### Imagem do projeto (Deve reproduzir algo semelhante a):
  
![projeto-TODO-PHP-BANCO](https://github.com/eldersb/ToDoList-Conexao-com-banco/assets/122701368/a37b61e0-c601-40b3-bdfb-22c3a9a957b0)

![projeto-TODO-PHP-BANCO2](https://github.com/eldersb/ToDoList-Conexao-com-banco/assets/122701368/09737940-5db2-49f7-8379-05c47468b10a)

![projeto-TODO-PHP-BANCO3](https://github.com/eldersb/ToDoList-Conexao-com-banco/assets/122701368/9798507a-2d50-477f-866c-b57f21d3673a)
