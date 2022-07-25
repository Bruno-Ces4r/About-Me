<?php 


foreach($registros_ativos as $on){
    $ativos = $on[0];
}

foreach($registros_inativos as $off){
    $inativos = $off[0];
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
        data: [<?php echo($ativos); ?>, <?php echo($inativos) ?>],
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

