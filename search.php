<?php 
/* search.php fish the phishing */
 
# Substitua abaixo os dados, de acordo com o banco criado
$user = "root@localhost";  # security issues
$password = ""; # ainda mais security issues
$database = "teste"; 
$hostname = "localhost"; 
 

mysql_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' );  
mysql_select_db( $database ) or die( 'Erro na seleção do banco' );
 
# Executa a query desejada $query = "SELECT codigo,nome,endereco FROM tabela"; 
$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() ); 
# Exibe os registros na tela 
while ($row = mysql_fetch_array( $result_query )) { print $row[codigo] . " -- " . $row[nome] . " -- " . $row[endereco]; }
 
?>