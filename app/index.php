<?php 

require_once './vendor/autoload.php';

use app\Src\MySQLConnection\MySQLConnection;
use PDO;

$bd = new MySQLConnection;

$comando = $bd->prepare('SELECT * FROM media');
$comando->execute();
$medias = $comando->fetchAll(PDO::FETCH_ASSOC);

include ('./app/includes/header.php')
?>

<table border="1px">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>MÚSICA</td>
        <td><a href="./insert.php"><button>+</button></a></td>
    </tr>

    <?php foreach($medias as $m): ?>
        <tr>
            <td><?= $m['id'] ?></td>
            <td><?= $m['nome'] ?></td>
        </tr>
    <?php endforeach ?>
</table>

<?php include('./app/includes/header.php'); ?>

