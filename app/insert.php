<?php
if (isset($_FILES['musica'])) {
    $music = $_FILES['musica'];
    var_dump($music);

    // Verificar o tipo MIME do arquivo
    $allowedTypes = array('audio/mpeg', 'audio/mp3');
    $fileType = mime_content_type($music['tmp_name']);

    if (in_array($fileType, $allowedTypes)) {
        // O arquivo é um MP3 válido, faça o processamento aqui
        // ...
        var_dump($file);
    } else {
        // O arquivo não é um MP3 válido, exiba uma mensagem de erro
        echo "Tipo de arquivo inválido. Por favor, selecione um arquivo MP3.";
    }
}


include('./includes/header.php') ?>

<form action="./insert.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="musica">
    <input type="submit" value="Enviar">
</form>

<?php include('./includes/footer.php') ?>