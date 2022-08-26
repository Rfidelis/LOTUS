<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>POST da Contech</title>  
    
</head>
<body>
    <?php
    print_r( $_POST);

foreach($_POST as $field => $value)
{
    echo $field;
       
    $filename = 'recebido.txt';
    $arquivo = fopen($filename, 'a');
    fwrite($arquivo, $field);           
    fclose($arquivo);      
}    
    print_r($arquivo);
    ?>
</body>