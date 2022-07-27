<?php 
#Criar Função que manipula o mês, dá menos trabalho

require_once("./../action/conexao.php");

function mensal($data){
    $db = conecta();
    $mes = 'SELECT count(id) from tb_contact WHERE dia_inclusao LIKE "'.$data.'" ';

    $total_mes = $db->query( $mes );
    $registros_mes = $total_mes->fetchall();
    
    foreach($registros_mes as $registros_mes){
        $mes_informado = $registros_mes[0];
    }
  
    return $mes_informado;
}

echo(mensal('2022-07%'));

?>

