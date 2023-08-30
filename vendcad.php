<?php 
$hostname = '127.0.0.1';
$usurname = 'root';
$password = '';
$dataname = 'comissao_vendas';

$conn = new mysqli($hostname, $usurname, $password, $dataname);

if($conn->connect_error){
  die("Erro na conexão: ".$conn->connect_errorone);
}


$sqli_select = "SELECT idvenda, 'data', usuario_id_usuario, fornecedor_cnpj FROM venda";
$result = $conn->query($sqli_select);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="all_screen">
    <div id="form_principal_cadV">
        <table>
            <tr>
              <th>Cliente</th>
              <th>Janeiro</th>
              <th>Fevereiro</th>              
              <th>Março</th>                          
              <th>Abril</th>                          
              <th>Maio</th>
              <th>junho</th>
              <th>Julho</th>              
              <th>Agosto</th>                          
              <th>Setembro</th>                                       
              <th>Outubro</th>                          
              <th>Novembro</th>                          
              <th>Dezembro</th>
            </tr>
            <tr>
              <td>Alfreds Futterkiste</td>
              <td>Maria Anders</td>
              <td>Germany</td>
            </tr>
            <?php
              if($result->num_rows >0){
                while($row = $result->fetch_assoc()){              
                    echo("<tr>");
                    echo("<td>".$row["idvenda"]."</td>");  
                    echo("<td>".$row["data"]."</td>");
                    echo("<td>".$row["usuario_id_usuario"]."</td>");
                    echo("<td>".$row["fornecedor_cnpj"]."</td>");
                    echo("<tr>"); 
                }
              }
            ?>
            
          </table>
    
        
    </div>
</div>
</body>
</html>

<?php
$conn->close();
?>