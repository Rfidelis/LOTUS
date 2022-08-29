<?php    

                
// teste de POST com a contech TENTATIVA 1       *******************************
    //header( 'Content-Type: text/csv' );
     //print_r( $_POST);

    /*if(isset($_POST)){
    $arquivo_contech = fopen('chegou.txt', 'a');
        $codigo = $_POST['codigo'];
        $descricao = $_POST['DESCRICAO'];
        $estoque = $_POST['ESTOQUE'];
        $pvenda = $_POST['PVENDA'];
        $departamento = $_POST['DEPARTAMENTO'];
        $pliquido = $_POST['P.LIQUIDO'];
        $pbruto = $_POST['P.BRUTO'];        
        $ncm = $_POST['ncm'];
        $produto = 'CODIGO: '.$codigo.' DESCRICAO: '.$descricao.' ESTOQUE: '.$estoque.' PVENDA: '.$pvenda.' DEPARTAMENTO: '.$departamento.' PLIQUIDO: '.$pliquido.' PBRUTO: '.$pbruto.' NCM: '.$ncm;
    fwrite($arquivo_contech, $produto);
    fclose($arquivo_contech);    
    }*/

//FIM  teste de POST com a contech TENTATIVA 1     *******************************









// teste de POST com a contech TENTATIVA 2       *******************************
    /*$arquivo = '';
foreach($_POST as $field => $value)
{
    echo $field;
       
    $filename = 'recebido.txt';
    $arquivo = fopen($filename, 'a');
    fwrite($arquivo, $field);           
    fclose($arquivo);      
}    
    print_r($arquivo);*/
    // FIM teste de POST com a contech TENTATIVA 2*******************************






// teste de POST com a contech TENTATIVA 3    *******************************
/* print_r(array_values($_POST));
$aux = array_values($_POST);
if(isset($_POST)){    
     $arquivo_contech = fopen('produtos_retorno.txt', 'a');
    fwrite($arquivo_contech, $aux[0]);
    fclose($arquivo_contech);   
}
 */
//FIM teste de POST com a contech TENTATIVA 3    *******************************








// teste de POST com a contech TENTATIVA 4    *******************************

$into = '';
$values = '';
foreach ($_POST as $chave) {
    $into .= "$chave, ";
    //$values .= "'$valor', ";
}
    $filename = 'recebido.txt';
    $arquivo = fopen($filename, 'a');
    fwrite($arquivo, $into);
    fclose($arquivo);
    print_r($into);
?>