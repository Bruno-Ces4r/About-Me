<?php 
#Criar Função que manipula o mês, dá menos trabalho

$janeiro = "SELECT count(id) from tb_contact WHERE dia_inclusao LIKE '2022-01%' ";

$total_janeiro = $db->query( $janeiro );
$registros_janeiro = $total_janeiro->fetchall();

foreach($registros_janeiro as $registros_janeiro){
    $mes_janeiro = $registros_janeiro[0];
}

$julho = "SELECT count(id) from tb_contact WHERE dia_inclusao LIKE '2022-07%' ";

$total_julho = $db->query( $julho );
$registros_julho = $total_julho->fetchall();

foreach($registros_julho as $registros_julho){
    $mes_julho = $registros_julho[0];
}


?>



<script>
const labels = ["Janeiro","Fevereiro","Março","Abril", "Maio", "Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];

const datando = {
  labels: labels,
  datasets: [{
    label: 'Contacts 2022',
    data: [<?php echo($mes_janeiro) ?>, 2, 3, 4, 5, 6, <?php echo($mes_julho);?>,8,9,10,11,12],
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]
};

const configuracao = {
  type: 'bar',
  data: datando,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};

const mensal = new Chart(
    document.getElementById('mensalChart'),
    configuracao
);

</script>

