<?php
$link = mysqli_connect( "contech-plus.mysql.uhserver.com", "fidelis1", "Triangulo@1", "contech_plus" );

/* check connection */
if ( mysqli_connect_errno() ) {
    printf( "Connect failed: %s\n", mysqli_connect_error() );
    exit();
}

$query = "SELECT * FROM produtos";

$result = mysqli_query( $link, $query );

/* numeric array */
//$row = mysqli_fetch_array( $result, MYSQLI_NUM );
//printf ( "%s (%s)\n", $row[0], $row[1] );

/* associative array */

$row = mysqli_fetch_array( $result, MYSQLI_ASSOC );
printf ( "%s (%s)\n", $row["codigo"], $row["descricao"], $row["codbarras"], $row["estoque"], $row["pvenda"], $row["departamento"], $row["pliquido"], $row["pbruto"], $row["ncm"] );

/* associative and numeric array */
$row = mysqli_fetch_array( $result, MYSQLI_BOTH );
printf ( "%s (%s)\n", $row[0], $row["codigo"] );

/* free result set */
mysqli_free_result( $result );

/* close connection */
mysqli_close( $link );
?>