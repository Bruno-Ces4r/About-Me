<?php 

function admins($valida){
    $db = conecta();
    $sql = 'SELECT COUNT(id) from tb_admin where validacao = '.$valida.' ';
    $query = $db ->query( $sql );
    $registros = $query ->fetchall();
    
    foreach($registros as $total){
        $num = $total[0];
    }
    return $num;
}

?>


<script>
const data = {
    labels: [
        'Ativos',
        'Inativos',
    ],
    datasets: [{
        label: 'Gerenciamento de Administradores',
        data: [<?php echo(admins(1)); ?>, <?php echo(admins(0)); ?>],
        backgroundColor: [
        'green',
        'red',
        ],
        hoverOffset: 4
    }]
};

const config = {
  type: 'doughnut',
  data: data,
};

const myChart = new Chart(
    document.getElementById('myChart'),
    config
);
</script>

