<link rel="stylesheet" href="https://code.jquery.com/qunit/qunit-1.11.0.css" type="text/css" media="all">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<style type="text/css">
  #blanket,
  #aguarde {
    position: fixed;
    display: none;
  }
  body {
    -webkit-print-color-adjust: exact !important;
  }
  #blanket {
    left: 0;
    top: 0;
    background-color: #f0f0f0;
    filter: alpha(opacity=65);
    height: 100%;
    width: 100%;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=65)";
    opacity: 0.65;
    z-index: 9998;
  }
  #aguarde {
    width: auto;
    height: 30px;
    top: 40%;
    left: 45%;
    background: url('http://i.imgur.com/SpJvla7.gif') no-repeat 0 50%;
    line-height: 30px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    z-index: 9999;
    padding-left: 27px;
  }
  .btn-pulse {
    cursor: pointer;
    box-shadow: 0 0 0 rgba(0, 0, 0);
    /* animation: pulse 1s infinite; */
    background: #E6D801;
    border-radius: 4px;
    color: White;
  }
  .btn-pulse:hover {
    animation: none;
    color: White;
  }
  /* h3{
    font-size: 12pt !important;
  } */
  .textoteste {
    text-align: center;
    font-size: 12pt !important;
  }
  .borda {
    border: 1px solid rgba(231, 231, 231, 0.603) !important;
    border-radius: 0.5rem !important;
  }
  @-webkit-keyframes btn-pulse {
    0% {
      -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0);
    }
    70% {
      -webkit-box-shadow: 0 0 0 10px rgba(0, 0, 0);
    }
    100% {
      -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0);
    }
  }
  @keyframes btn-pulse {
    0% {
      -moz-box-shadow: 0 0 0 0 rgba(0, 0, 0);
      box-shadow: 0 0 0 0 black;
    }
    70% {
      -moz-box-shadow: 0 0 0 10px rgba(0, 0, 0);
      box-shadow: 0 0 0 10px black;
    }
    100% {
      -moz-box-shadow: 0 0 0 0 rgba(0, 0, 0);
      box-shadow: 0 0 0 0 black;
    }
  }
  .texto-plano {
    /* height: 560px; */
  }
  .btn-migrar {
    border-radius: 10px;
    color: white;
    background-color: #617BCF;
    border-color: #D3D3D3;
    text-transform: uppercase;
    font-weight: bold;
  }
  .btn-migrar:hover {
    border-radius: 10px;
    color: black;
    background-color: #D3D3D3;
    text-transform: uppercase;
    font-weight: bold;
  }
  .thumbnail {
    border: none;
    border-radius: 0;
  }
  .thumbnail.product-box:hover {
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
    margin-top: -5px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .modal-backdrop.in {
    display: none;
  }
  .div_radio_portabilidade {
    text-align: center;
    border-bottom: 10px;
  }
  .heightLock {
    height: 1100px;
    height: auto !important;
  }
  .heightAuto {
    height: auto;
  }
  @media (max-width: 767px) {
    .main-content {
      margin-top: 60px;
    }
  }
  /* @media screen and (min-width: 768px)
  {
	.p-l {
		padding-left: 1rem !important;
	}
  } */
</style>
<?
/* if($_SESSION['cod_usuario'] <> 1){
  die;
} */
/////////////////////////////////////////////////////////////////////////////////
//TOKEN DE PRODUÇÃO:    VkNZU0IwNlZHUVE2Rk9XSUNCSTVWSUNWVEFXUVRKVDM6VDdCU0JRVlBITldOTlNJTERWVklPWEdDQktZRUNCUFZNNU8wTFJLUQ==
//TOKEN DE TESTE:       STVFREVKTVpRSTNaTTFJV0tDQVRXNzhLWkZIV0cwQ0Y6NkpKSFpJSk5UTDFZS05JREZYVzRLVlFJWjFDRVZZUldEUUdXTEhYRg==
/////////////////////////////////////////////////////////////////////////////////
use function PHPSTORM_META\type;
$tipo = "api";
$token = "VkNZU0IwNlZHUVE2Rk9XSUNCSTVWSUNWVEFXUVRKVDM6VDdCU0JRVlBITldOTlNJTERWVklPWEdDQktZRUNCUFZNNU8wTFJLUQ==";
include $_SERVER['DOCUMENT_ROOT'] . "configuracao/config.php";
$placa          = $_POST['placa'];
$tipo_automovel = $_POST['tipo'];
$marca          = $_POST['Marca'];
$modelo         = $_POST['Modelo'];
$ano            = $_POST['AnoModelo'];
$utiliza        = $_POST['servico'];
$pref           = $_POST['pref'];
$valor1         = $_POST['Valor'];
$type_plan      = $_POST['type_plan'];
$cod_geracao    = $_POST['geracao'];
if ($cod_geracao >= 1) {
  $geracao_verifica = 1;
}
echo "<script>console.log('" . $_POST['type_plano'] . "')</script>";
echo "<script>console.log('" . $placa . "')</script>";
// echo $_POST['produto'];
// echo $_POST['type_plano']; 
// echo $placa         ."<br>"; //ok
// echo $tipo_automovel."<br>"; //ok
// echo "<br><h2>".$marca."</h2><br>"; //ok
// echo $modelo        ."<br>"; //ok
// echo $ano           ."<br>"; //ok
// echo $utiliza       ."<br>"; //ok
// echo $pref          ."<br>"; //ok
// echo $valor1        ."<br>"; 
// echo $type_plan     ."<br>"; //ok
// echo "<br><h1>".$valor1."</h1><br>";
if ($_POST['mensalidade1'] == "MR") {
  $tipo_mensalidade = "Mensalidade Reduzida";
} elseif ($_POST['mensalidade1'] == "MP") {
  $tipo_mensalidade = "Mensalidade Padrão";
}
///Validar se a placa ja esta no sistema
if ($pref == 2) {
  $recupera_dono = mysql_query("SELECT * FROM pedido WHERE placa_veiculo LIKE '{$placa}' AND status_venda <> '2' order by id_pacote_pedido desc");
  $dono_row = mysql_num_rows($recupera_dono);
  $verifica_placa1 = mysql_query("SELECT * FROM pedido WHERE placa_veiculo LIKE '{$placa}' AND status_venda = '2' order by id_pacote_pedido desc");
  $lin1 = mysql_num_rows($verifica_placa1);
  if ($dono_row != 0) {
    echo "<script>alert('Placa já cadastrada na base de dados!');</script>";
    echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
  } else if ($lin1 != 0) {
    $block = 0;
  } else {
    $block = 0;
  }
}
///Validar se a placa ja esta no sistema
if ($pref == 1) {
  $recupera_dono = mysql_query("SELECT * FROM pedido WHERE placa_veiculo LIKE '{$placa}' AND status_venda <> '2' order by id_pacote_pedido desc");
  $dono_row = mysql_num_rows($recupera_dono);
  $verifica_placa1 = mysql_query("SELECT * FROM pedido WHERE placa_veiculo LIKE '{$placa}' AND status_venda = '2' order by id_pacote_pedido desc");
  $lin1 = mysql_num_rows($verifica_placa1);
  if ($dono_row != 0) {
    echo "<script>alert('Placa já cadastrada na base de dados!');</script>";
    echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
  } else if ($lin1 != 0) {
    $block = 0;
  } else {
    $block = 0;
  }
}
$tempo_ano = date('Y', strtotime("-20 Years", strtotime(date('Y'))));
if ($_POST['AnoModelo'] >= $tempo_ano) {
  $col = "col-md-4";
} else {
  $col = "col-md-5";
}
$seleciona_marca = mysql_fetch_array(mysql_query("SELECT * FROM fp_marca WHERE codigo_marca = '$marca' AND ativo = 1 "));
$pedido_marca = $seleciona_marca['marca'];
$seleciona_modelo = mysql_fetch_array(mysql_query("SELECT * FROM fp_modelo WHERE codigo_modelo = '$modelo' AND ativo = 1 "));
$pedido_modelo = $seleciona_modelo['modelo'];
$automovel    = $_POST['tipo'];
$valor      = $_POST['Valor'];
$servico    = $_POST['servico'];
$combustivel  = $_POST['Combustivel'];
$fipe  = $_POST['CodigoFipe'];
$valor = str_replace("R$ ", "", $valor);
$pattern = '/[^\,]+/';
preg_match($pattern, $valor, $partes, PREG_OFFSET_CAPTURE);
$valor = $partes[0][0];
$estado_log = $_POST['estado'];
if ($_POST['estado'] == 'AC' || $_POST['estado'] == 'AL' || $_POST['estado'] == 'AP' || $_POST['estado'] == 'AM' || $_POST['estado'] == 'BA' || $_POST['estado'] == 'CE' || $_POST['estado'] == 'DF'  || $_POST['estado'] == 'GO' || $_POST['estado'] == 'MA' || $_POST['estado'] == 'MS' || $_POST['estado'] == 'MT' || $_POST['estado'] == 'PA' || $_POST['estado'] == 'PB' || $_POST['estado'] == 'PR' || $_POST['estado'] == 'PE' || $_POST['estado'] == 'PI' || $_POST['estado'] == 'RN' || $_POST['estado'] == 'RS' || $_POST['estado'] == 'RO' || $_POST['estado'] == 'RR' || $_POST['estado'] == 'SC' || $_POST['estado'] == 'TO' || $_POST['estado'] == 'RJ' || $_POST['estado'] == 'SP') {
  $estado = "OU";
  $mensalidade_f_r_a = 141.08;
  $mensalidade_r_a = 99.00;
  $mensalidade_r = 79.00;
} elseif ($_POST['estado'] == 'MG') {
  $estado = "MG";
  $mensalidade_f_r_a = 141.08;
  $mensalidade_r_a = 99.00;
  $mensalidade_r = 79.00;
} elseif ($_POST['estado'] == 'ES') {
  $estado = "ES";
  $mensalidade_f_r_a = 141.08;
  $mensalidade_r_a = 79.00 + 30.90;
  $mensalidade_r = 59.00 + 20.90;
} elseif ($_POST['estado'] == 'SE') {
  $estado = 'SE';
  $mensalidade_f_r_a = 141.08;
  $mensalidade_r_a = 99.00;
  $mensalidade_r = 79.00;
} elseif ($_POST['estado'] == 'SP') {
  if ($tipo_automovel == "carros") {
    $estado = "OU";
    $mensalidade_f_r_a = 141.08;
    $mensalidade_r_a = 99.00;
    $mensalidade_r = 79.00;
  } else {
    $estado = "SP";
    $mensalidade_f_r_a = 141.08;
    $mensalidade_r_a = 99.00;
    $mensalidade_r = 79.00;
  }
}
if ($servico == "1") {
  $servicos = "Sim";
} elseif ($servico == "0") {
  $servicos = "Não";
} else {
  $servicos = "";
}
$query_importado = mysql_num_rows(mysql_query("SELECT * FROM importados where codigo_fipe = '$fipe'"));
if ($servico == "1" || $query_importado == "1") {
  $automovel = "Diesel/Importados/Taxi";
  $servicos = "Sim";
} elseif ($servico == "0") {
  $automovel = "Automovel";
  $servicos = "Não";
} else {
  $automovel = "";
  $servicos = "";
}
$insere_log = mysql_query("INSERT INTO simulacao_log SET id_dados = '{$_SESSION['cod_usuario']}', tipo = '{$tipo_automovel}', marca = '{$pedido_marca}', modelo = '{$pedido_modelo}', ano = '{$ano}', uf = '{$estado_log}', servico = '{$servicos}', placa = '{$placa}', valor_fipe = '{$valor}', cod_fipe = '{$fipe}', data = '" . date('Y-m-d H:i:s') . "' ");
if ($tipo_automovel == "carros" and ($servicos == "Sim" or $combustivel == "Diesel")) {
  $automovel = "Diesel/Importados/Taxi";
} elseif ($tipo_automovel == "carros") {
  $automovel = "Automovel";
} elseif ($tipo_automovel == "motos") {
  $automovel = "Motocicleta";
}
if ($_POST['AnoModelo'] >= $tempo_ano and $marca != 201911) {
  if ($_POST['tipo'] == "motos") {
    $plano_premium_economico  = mysql_fetch_array(mysql_query("SELECT * FROM precos WHERE categoria = '$automovel' 
        AND pacote = 'START'
        AND estado = '$estado'
        AND ((valor_inicial <= '$valor'
        AND valor_final >= '$valor')
        OR (valor_final = if($valor > 22000, 22000, $valor)))"));
    $plano_basico  = '1';
    $plano_master  = '1';
    $plano_cooper1  = '1';
    $plano_cooper2  = '1';
    $plano_cooper3  = '1';
    $plano_premium = mysql_fetch_array(mysql_query("SELECT * FROM precos WHERE categoria = '$automovel' 
        AND pacote = 'FULL' 
        AND estado = '$estado' 
        AND ((valor_inicial <= '$valor'
        AND valor_final >= '$valor')
        OR (valor_final = if($valor > 22000, 22000, $valor)))"));
  } else if ($_POST['tipo'] != "motos") {
    $plano_premium  = mysql_fetch_array(mysql_query("SELECT * FROM precos WHERE categoria = '$automovel' 
      AND pacote = 'PREMIUM'
      AND estado = '$estado'
      AND ((valor_inicial <= '$valor'
      AND valor_final >= '$valor')
      OR (valor_final = if($valor > 130000, 130000, $valor)))"));
    $plano_master  = mysql_fetch_array(mysql_query("SELECT * FROM precos WHERE categoria = '$automovel' 
      AND pacote = 'MASTER'
      AND estado = '$estado'
      AND ((valor_inicial <= '$valor'
      AND valor_final >= '$valor')
      OR (valor_final = if($valor > 130000, 130000, $valor)))"));
    $plano_basico = mysql_fetch_array(mysql_query("SELECT * FROM precos WHERE categoria = '$automovel' 
      AND pacote = 'BASICO' 
      AND estado = '$estado' 
      AND ((valor_inicial <= '$valor'
      AND valor_final >= '$valor')
      OR (valor_final = if($valor > 130000, 130000, $valor)))"));
    $plano_premium_economico  = mysql_fetch_array(mysql_query("SELECT * FROM precos WHERE categoria = '$automovel' 
      AND pacote = 'ECONOMICO'
      AND estado = '$estado'
      AND ((valor_inicial <= '$valor' 
      AND valor_final >= '$valor')
      OR (valor_final = if($valor > 130000, 130000, $valor)))"));
    $plano_cooper1 = mysql_fetch_array(mysql_query("SELECT * FROM precos WHERE categoria = '$automovel' 
      AND pacote = 'COOPER' 
      AND estado = '$estado' 
      AND ((valor_inicial <= '$valor'
      AND valor_final >= '$valor')
      OR (valor_final = if($valor > 130000, 130000, $valor)))"));
    $plano_cooper2 = mysql_fetch_array(mysql_query("SELECT * FROM precos WHERE categoria = '$automovel' 
      AND pacote = 'COOPER(2)' 
      AND estado = '$estado' 
      AND ((valor_inicial <= '$valor'
      AND valor_final >= '$valor')
      OR (valor_final = if('$valor'> 130000, 130000, '$valor')))"));
    $plano_cooper3 = mysql_fetch_array(mysql_query("SELECT * FROM precos WHERE categoria = '$automovel' 
      AND pacote = 'COOPER(3)'
      AND estado = '$estado' 
      AND ((valor_inicial <= '$valor'
      AND valor_final >= '$valor')
      OR (valor_final = if($valor > 130000, 130000, $valor)))"));
  }
  
  
  if ($type_plan == 1) {
    $adesao_premium                 = $plano_premium['V350'];
    $adesao_premium_economico       = $plano_premium_economico['V350'];
    $adesao_master                  = $plano_master['V350'];
    $adesao_basico                  = $plano_basico['V350'];
    $adesao_cooper1                  = $plano_cooper1['V350'];
    $adesao_cooper2                  = $plano_cooper2['V350'];
    $adesao_cooper3                  = $plano_cooper3['V350'];
  } else if ($type_plan == 2) {
    $adesao_premium                 = $plano_premium['V700'];
    $adesao_premium_economico       = $plano_premium_economico['V700'];
    $adesao_master                  = $plano_master['V700'];
    $adesao_basico                  = $plano_basico['V700'];
    $adesao_cooper1                  = $plano_cooper1['V700'];
    $adesao_cooper2                  = $plano_cooper2['V700'];
    $adesao_cooper3                  = $plano_cooper3['V700'];
  } else if ($type_plan == 3) {
    $adesao_premium                 = $plano_premium['V1000'];
    $adesao_premium_economico       = $plano_premium_economico['V1000'];
    $adesao_master                  = $plano_master['V1000'];
    $adesao_basico                  = $plano_basico['V1000'];
    $adesao_cooper1                  = $plano_cooper1['V1000'];
    $adesao_cooper2                  = $plano_cooper2['V1000'];
    $adesao_cooper3                  = $plano_cooper3['V1000'];
  } else {
    $adesao_premium                 = 0;
    $adesao_premium_economico       = 0;
    $adesao_master                  = 0;
    $adesao_basico                  = 0;
    $adesao_cooper1                  = 0;
    $adesao_cooper2                  = 0;
    $adesao_cooper3                  = 0;
  }
  $cooper_bronze = $plano_cooper1['valor_mensalidade'];
  $cooper_bronze_reduzido = $plano_cooper1['valor_mensalidade_reduzida'];
  $cooper_prata = $plano_cooper2['valor_mensalidade'];
  $cooper_prata_reduzido = $plano_cooper2['valor_mensalidade_reduzida'];
  $cooper_ouro = $plano_cooper3['valor_mensalidade'];
  $cooper_ouro_reduzido = $plano_cooper3['valor_mensalidade_reduzida'];
  $mensalidade_premium                     = $plano_premium['valor_mensalidade'];
  $mensalidade_premium_reduzida            = $plano_premium['valor_mensalidade_reduzida'];
  $mensalidade_premium_economico           = $plano_premium_economico['valor_mensalidade'];
  $mensalidade_premium_economico_reduzida  = $plano_premium_economico['valor_mensalidade_reduzida'];
  $mensalidade_master                      = $plano_master['valor_mensalidade'];
  $mensalidade_master_reduzida             = $plano_master['valor_mensalidade_reduzida'];
  $mensalidade_basico                      = $plano_basico['valor_mensalidade'];
  $mensalidade_basico_reduzida             = $plano_basico['valor_mensalidade_reduzida'];
  $mensalidade_cooper1                     = $plano_cooper1['valor_mensalidade'];
  $mensalidade_cooper_reduzida1            = $plano_cooper1['valor_mensalidade_reduzida'];
  $mensalidade_cooper2                      = $plano_cooper2['valor_mensalidade'];
  $mensalidade_cooper_reduzida2             = $plano_cooper2['valor_mensalidade_reduzida'];
  $mensalidade_cooper3                     = $plano_cooper3['valor_mensalidade'];
  $mensalidade_cooper_reduzida3            = $plano_cooper3['valor_mensalidade_reduzida'];
} else {
  if ($type_plan == 1) {
    $adesao_premium                 = 350.00;
    $adesao_premium_economico       = 350.00;
    $adesao_master                  = 350.00;
    $adesao_basico                  = 350.00;
    $adesao_cooper1                  = 350.00;
    $adesao_cooper2                  = 350.00;
    $adesao_cooper3                  = 350.00;
    $mensalidade_premium            = 0;
    $mensalidade_premium_reduzida   = 0;
    $mensalidade_premium_economico_reduzida = 0;
    $mensalidade_premium_economico  = 0;
    $mensalidade_master             = 0;
    $mensalidade_master_reduzida    = 0;
    $mensalidade_basico             = 0;
    $mensalidade_basico_reduzida    = 0;
    $mensalidade_cooper1             = 0;
    $mensalidade_cooper_reduzida1    = 0;
    $mensalidade_cooper2             = 0;
    $mensalidade_cooper_reduzida2    = 0;
    $mensalidade_cooper3             = 0;
    $mensalidade_cooper_reduzida3    = 0;
    if ($mensalidade_premium == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        //alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php //echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } else if ($mensalidade_premium_economico == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } else if ($mensalidade_master == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } else if ($mensalidade_basico == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper1 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper2 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper3 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    }
  } elseif ($type_plan == 2) {
    $adesao_premium                 = 700.00;
    $adesao_premium_economico       = 700.00;
    $adesao_master                  = 700.00;
    $adesao_basico                  = 700.00;
    $adesao_cooper1                  = 700.00;
    $adesao_cooper2                  = 700.00;
    $adesao_cooper3                  = 700.00;
    $mensalidade_premium            = 0;
    $mensalidade_premium_reduzida   = 0;
    $mensalidade_premium_economico_reduzida = 0;
    $mensalidade_premium_economico  = 0;
    $mensalidade_master             = 0;
    $mensalidade_master_reduzida    = 0;
    $mensalidade_basico             = 0;
    $mensalidade_basico_reduzida    = 0;
    $mensalidade_cooper1             = 0;
    $mensalidade_cooper_reduzida1    = 0;
    $mensalidade_cooper2             = 0;
    $mensalidade_cooper_reduzida2    = 0;
    $mensalidade_cooper3             = 0;
    $mensalidade_cooper_reduzida3    = 0;
    if ($mensalidade_premium == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        // alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php //echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_premium_economico == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_master == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_basico == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper1 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper2 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper3 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos ou motocicletas com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    };
  } else if ($type_plan == 3) {
    $adesao_premium                 = 1000.00;
    $adesao_premium_economico       = 1000.00;
    $adesao_master                  = 1000.00;
    $adesao_basico                  = 1000.00;
    $adesao_cooper1                  = 1000.00;
    $adesao_cooper2                  = 1000.00;
    $adesao_cooper3                  = 1000.00;
    $mensalidade_premium            = 0;
    $mensalidade_premium_reduzida   = 0;
    $mensalidade_premium_economico_reduzida = 0;
    $mensalidade_premium_economico  = 0;
    $mensalidade_master             = 0;
    $mensalidade_master_reduzida    = 0;
    $mensalidade_basico             = 0;
    $mensalidade_basico_reduzida    = 0;
    $mensalidade_cooper1             = 0;
    $mensalidade_cooper_reduzida1    = 0;
    $mensalidade_cooper2             = 0;
    $mensalidade_cooper_reduzida2    = 0;
    $mensalidade_cooper3             = 0;
    $mensalidade_cooper_reduzida3    = 0;
    if ($mensalidade_premium == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        // alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php //echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_premium_economico == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>outros
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_master == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_basico == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper1 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper2 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper3 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    };
  } else if ($type_plan == 5) {
    $adesao_premium                 = 0;
    $adesao_premium_economico       = 0;
    $adesao_master                  = 0;
    $adesao_basico                  = 0;
    $adesao_cooper1                  = 0;
    $adesao_cooper2                  = 0;
    $adesao_cooper3                  = 0;
    $mensalidade_premium            = 0;
    $mensalidade_premium_reduzida   = 0;
    $mensalidade_premium_economico_reduzida = 0;
    $mensalidade_premium_economico  = 0;
    $mensalidade_master             = 0;
    $mensalidade_master_reduzida    = 0;
    $mensalidade_basico             = 0;
    $mensalidade_basico_reduzida    = 0;
    $mensalidade_cooper1             = 0;
    $mensalidade_cooper_reduzida1    = 0;
    $mensalidade_cooper2             = 0;
    $mensalidade_cooper_reduzida2    = 0;
    $mensalidade_cooper3             = 0;
    $mensalidade_cooper_reduzida3    = 0;
    if ($mensalidade_premium == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_premium_economico == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_master == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_basico == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper1 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper2 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    } elseif ($mensalidade_cooper3 == 0 and $_POST['tipo'] != 'outros') { ?>
      <script>
        alert('Apenas veiculos com menos de 20 anos')
      </script>
    <?php echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    };
  }
};
if ($_POST['metodo_pagamento'] == 'boleto') {
  $ip = getenv("REMOTE_ADDR");
  $query_pacote = "SELECT * FROM pacote WHERE idpacote = '{$idpacote}' AND ativo = 1";
  $pacote = mysql_fetch_array(mysql_query($query_pacote));
  $servicos = $_POST['servicos'];
  $valor1 = $_POST['valor1'];
  $tipo_automovel = $_POST['tipo_automovel'];
  $pedido_marca = $_POST['pedido_marca'];
  $pedido_modelo = $_POST['pedido_modelo'];
  $ano = $_POST['ano'];
  $estado = $_POST['estado'];
  $fipe = $_POST['fipe'];
  $cod_user    = $_SESSION['cod_usuario'];
  $parcela     = $_POST['parcelas'];
  $mensalidade = $_POST['mensalidade'];
  $adesao      = $_POST['adesao'];
  if ($adesao == 1000) {
    $adesao      = number_format($adesao, 2, '.', '');
  }
  $pacote     = $_POST['pacote'];
  $tipo_plan   = $_POST['tipo_plan'];
  $estado_dormitorio = $_POST['dormitorio'];
  if ($parcela == 3) {
    $total_pedido = number_format(($adesao / 3) + 0.01, 2, '.', '');
  } else if ($parcela == 2) {
    $total_pedido = number_format($adesao / 2, 2, '.', '');
  } else {
    $total_pedido = $adesao;
  }
  $pesquisa_insert = mysql_num_rows(mysql_query("SELECT * FROM pedido where status_venda <> 2 AND codigo_fipe = '$fipe' AND placa_veiculo = '$placa' AND idcliente_pacote = '$cod_user'"));
  if ($pesquisa_insert == 0) {
    $sqlInsert = mysql_query("INSERT INTO pedido SET
    idcliente_pacote = '$cod_user',
    nome_pacote = '{$pacote}',
    status_venda ='0',
    valor_total = '$total_pedido',
    valor = '$mensalidade',
    geracao_id = '{$cod_geracao}',
    geracao = '{$geracao_verifica}',
    forma_pagamento = 'BL',
    tipo_mensalidade = '$tipo_mensalidade',
    valor_adesao ='$adesao',
    valor_automovel = '$valor1',
    servico = '$servicos',
    tipo = '$tipo_plan',
    placa_veiculo = '$placa',
    tipo_automovel = '$tipo_automovel',
    marca = '$pedido_marca',
    numero_parcelas = '{$parcela}',
    modelo = '$pedido_modelo',
    ano = '$ano',
    estado_automovel = '$estado',
    uf_titular = '{$estado_dormitorio}',
    codigo_fipe = '$fipe',
    data_pedido ='" . date('Y-m-d H:i:s') . "' ") or die(mysql_error());
    $twou_idpedido = mysql_insert_id();
  } else {
    echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    die;
  }
  $pedido_dados = mysql_fetch_assoc(mysql_query("SELECT p.*, d.* FROM pedido as p INNER JOIN dados as d ON p.idcliente_pacote = d.id WHERE id_pacote_pedido = '{$twou_idpedido}';"));
  $formata_valor = str_replace(".", "", $total_pedido);
  if ($pedido_dados['tipo'] == 'J') {
    $cpf_cnpj = $pedido_dados['cnpj'];
    $tipo_cpf_cnpj = "CNPJ";
  } elseif ($pedido_dados['tipo'] == 'F') {
    $cpf_cnpj = $pedido_dados['cpf'];
    $tipo_cpf_cnpj = "CPF";
  }
  include "files/financeiro/pagamento_BL.php";
}
if ($_POST['metodo_pagamento'] == 'cartao') {
  $cardNumber             =             str_replace(" ", "", $_POST['cardNumber']);
  // $cardNumber             =             4012001037141112;
  $validade               =             explode("/", $_POST['validade']);
  $cvv                    =             $_POST['cvv'];
  $nome_card              =             $_POST['nome_card'];
  // $numberOfInstallments   =             1;
  $numberOfInstallments   =             $_POST['parcelas'];
  $mes_venc               =             trim($validade[0]);
  $ano_venc               =             trim($validade[1]);
  $ip                     =             getenv("REMOTE_ADDR");
  $cep = $_POST['cep'];
  $servicos = $_POST['servicos'];
  $valor1 = $_POST['valor1'];
  $tipo_automovel = $_POST['tipo_automovel'];
  $pedido_marca = $_POST['pedido_marca'];
  $pedido_modelo = $_POST['pedido_modelo'];
  $ano = $_POST['ano'];
  $estado = $_POST['estado'];
  $fipe = $_POST['fipe'];
  $titular_pagamento      = $_POST['titular_pagamento'];
  $cod_user    = $_SESSION['cod_usuario'];
  $mensalidade = $_POST['mensalidade'];
  $adesao      = $_POST['adesao'];
  $adesao      = number_format($adesao, 2, '.', '.');
  $pacote      = $_POST['pacote'];
  $placa       = $_POST['placa'];
  $tipo_plan   = $_POST['tipo_plan'];
  $estado_dormitorio = $_POST['dormitorio'];
  if ($numberOfInstallments == '1') {
    $taxa = 0;
    $formata_taxa = 0;
  } elseif ($numberOfInstallments == '2') {
    if ($tipo_plan == 1) {
      $taxa = 28.30;
    } elseif ($tipo_plan == 2) {
      $taxa = 55.90;
    } elseif ($tipo_plan == 3) {
      $taxa = 79.60;
    }
    $formata_taxa = number_format($taxa, 2, '', '');
  } elseif ($numberOfInstallments == '3') {
    if ($tipo_plan == 1) {
      $taxa = 33.60;
    } elseif ($tipo_plan == 2) {
      $taxa = 66.60;
    } elseif ($tipo_plan == 3) {
      $taxa = 94.80;
    }
    $formata_taxa = number_format($taxa, 2, '', '');
  } elseif ($numberOfInstallments == '4') {
    if ($tipo_plan == 1) {
      $taxa = 39.20;
    } elseif ($tipo_plan == 2) {
      $taxa = 77.60;
    } elseif ($tipo_plan == 3) {
      $taxa = 110.60;
    }
    $formata_taxa = number_format($taxa, 2, '', '');
  } elseif ($numberOfInstallments == '5') {
    if ($tipo_plan == 1) {
      $taxa = 44.80;
    } elseif ($tipo_plan == 2) {
      $taxa = 88.90;
    } elseif ($tipo_plan == 3) {
      $taxa = 126.90;
    }
    $formata_taxa = number_format($taxa, 2, '', '');
  } elseif ($numberOfInstallments == '6') {
    if ($tipo_plan == 1) {
      $taxa = 50.50;
    } elseif ($tipo_plan == 2) {
      $taxa = 100.60;
    } elseif ($tipo_plan == 3) {
      $taxa = 143.40;
    }
    $formata_taxa = number_format($taxa, 2, '', '');
  } elseif ($numberOfInstallments == '7') {
    if ($tipo_plan == 1) {
      $taxa = 57.40;
    } elseif ($tipo_plan == 2) {
      $taxa = 114.20;
    } elseif ($tipo_plan == 3) {
      $taxa = 162.90;
    }
    $formata_taxa = number_format($taxa, 2, '', '');
  } elseif ($numberOfInstallments == '8') {
    if ($tipo_plan == 1) {
      $taxa = 63.60;
    } elseif ($tipo_plan == 2) {
      $taxa = 126.60;
    } elseif ($tipo_plan == 3) {
      $taxa = 180.60;
    }
    $formata_taxa = number_format($taxa, 2, '', '');
  } elseif ($numberOfInstallments == '9') {
    if ($tipo_plan == 1) {
      $taxa = 69.85;
    } elseif ($tipo_plan == 2) {
      $taxa = 139.25;
    } elseif ($tipo_plan == 3) {
      $taxa = 198.60;
    }
    $formata_taxa = number_format($taxa, 2, '', '');
  } elseif ($numberOfInstallments == '10') {
    if ($tipo_plan == 1) {
      $taxa = 77.00;
    } elseif ($tipo_plan == 2) {
      $taxa = 152.00;
    } elseif ($tipo_plan == 3) {
      $taxa = 217.00;
    }
    $formata_taxa = number_format($taxa, 2, '', '');
  } else {
    $taxa = 0.00;
    $formata_taxa = number_format($taxa, 2, '', '');
  }
  $total_pedido = $adesao;
  $pesquisa_insert1 = mysql_num_rows(mysql_query("SELECT * FROM pedido where status_venda <> 2 AND codigo_fipe = '$fipe' AND placa_veiculo = '$placa' AND idcliente_pacote = '$cod_user'"));
  if ($pesquisa_insert1 == 0) {
    $sql = mysql_query("INSERT INTO pedido SET
        idcliente_pacote = '{$_SESSION['cod_usuario']}',
        nome_pacote = '{$pacote}',
        status_venda = 0,
        valor_total = '$total_pedido',
        taxa = '{$taxa}',
        geracao_id = '{$cod_geracao}',
        geracao = '{$geracao_verifica}',
        valor = '$mensalidade',
        forma_pagamento = 'CC',
        tipo_mensalidade = '$tipo_mensalidade',
        valor_adesao ='$adesao',
        valor_automovel = '$valor1',
        servico = '$servicos',
        placa_veiculo = '$placa',
        tipo_automovel = '$tipo_automovel',
        marca = '$pedido_marca',
        tipo = '$tipo_plan',
        modelo = '$pedido_modelo',
        ano = '$ano',
        estado_automovel = '$estado',
        uf_titular = '{$estado_dormitorio}',
        codigo_fipe = '$fipe',
        numero_parcelas='{$numberOfInstallments}',
        data_pedido ='" . date('Y-m-d H:i:s') . "' ") or die(mysql_error());
    $twou_idpedido = mysql_insert_id();
  } else {
    echo '<meta http-equiv="refresh" content="0;URL=index.php?p=simular">';
    die;
  }
  $pedido_dados = mysql_fetch_assoc(mysql_query("SELECT p.*, d.* FROM pedido as p INNER JOIN dados as d ON p.idcliente_pacote = d.id WHERE id_pacote_pedido = '{$twou_idpedido}'"));
  $formata_valor = str_replace(".", "", $adesao);
  if ($titular_pagamento == 'S') {
    $nascimento             = $_POST['nascimento'];
    $cep                    = $_POST['cep'];
    $bairro                 = $_POST['bairro'];
    $rua                    = $_POST['rua'];
    $cidade                 = $_POST['cidade'];
    $uf                     = $_POST['uf'];
    $numero                 = $_POST['numero'];
  } else {
    $nascimento             = $pedido_dados['nascimento'];
    $cep                    = $pedido_dados['cep'];
    $bairro                 = $pedido_dados['bairro'];
    $rua                    = $pedido_dados['logradouro'];
    $cidade                 = $pedido_dados['cidade'];
    $uf                     = $pedido_dados['estado'];
    $numero                 = $pedido_dados['numero'];
  }
  if ($pedido_dados['tipo'] == 'J') {
    $cpf_cnpj = $pedido_dados['cnpj'];
    $tipo_cpf_cnpj = "CNPJ";
  } elseif ($pedido_dados['tipo'] == 'F') {
    $cpf_cnpj = $pedido_dados['cpf'];
    $tipo_cpf_cnpj = "CPF";
  }
  include "files/financeiro/pagamento_CC.php";
}
if ($_POST['metodo_pagamento'] == 'portabilidade' || $_POST['metodo_pagamento'] == 'ad=mens') {
  $ip  = getenv("REMOTE_ADDR");
  $cep = $_POST['cep'];
  $servicos = $_POST['servicos'];
  $valor1 = $_POST['valor1'];
  $tipo_automovel = $_POST['tipo_automovel'];
  $pedido_marca = $_POST['pedido_marca'];
  $pedido_modelo = $_POST['pedido_modelo'];
  $ano = $_POST['ano'];
  $estado = $_POST['estado'];
  $fipe = $_POST['fipe'];
  $titular_pagamento      = $_POST['titular_pagamento'];
  $forma_pagamento        = $_POST['metodo_pagamento'];
  $tipo_portabilidade     = ($_POST['metodo_pagamento'] == 'portabilidade') ? 1 : "";
  $cod_user    = $_SESSION['cod_usuario'];
  $mensalidade = $_POST['mensalidade'];
  $adesao      = $_POST['adesao'];
  $adesao      = number_format($adesao, 2, '.', '.');
  $pacote      = $_POST['pacote'];
  $placa       = $_POST['placa'];
  $estado_dormitorio = $_POST['dormitorio'];
  $total_pedido = $adesao;
  $sql = mysql_query("INSERT INTO pedido SET
                    idcliente_pacote = '{$_SESSION[cod_usuario]}',
                    nome_pacote = '{$pacote}',
                    status_venda = 0,
                    valor_total = '$total_pedido',
                    valor = '$mensalidade',
                    forma_pagamento = '$forma_pagamento',
                    tipo_mensalidade = '$tipo_mensalidade',
                    valor_adesao ='$adesao',
                    valor_automovel = '$valor1',
                    servico = '$servicos',
                    placa_veiculo = '$placa',
                    tipo_automovel = '$tipo_automovel',
                    marca = '$pedido_marca',
                    tipo = '$tipo_portabilidade',
                    modelo = '$pedido_modelo',
                    ano = '$ano',
                    estado_automovel = '$estado',
                    uf_titular = '{$estado_dormitorio}',
                    codigo_fipe = '$fipe',
                    data_pedido ='" . date('Y-m-d H:i:s') . "' ") or die(mysql_error());
  $dados = mysql_fetch_array(mysql_query("SELECT * FROM dados WHERE id = '{$_SESSION['cod_usuario']}'"));
  $user = $_SESSION['cod_usuario'];
  $id = $_POST['id'];
  $dataatual = date("Y-m-d H:i:s");
  $anexo = $_FILES['documento'];
  $file_name = $_FILES['documento']['name'];
  $file_tmp = $_FILES['documento']['tmp_name'];
  $n = mt_rand(0, 100);
  $imagemURL = "suporte/" . $user . "/" . $file_name . "";
  if ($file_name != '') {
    $query_imgem = mysql_query("INSERT INTO suporte (id_usuario, categoria, email_usuario, assunto, status, data, imagemURL) 
  VALUES   ('$_SESSION[cod_usuario]', 'portabilidade', '$dados[email]', 'portabilidade', 'A', '$dataatual', '$imagemURL')");
    $id_ticket = mysql_insert_id();
    $select_nome = mysql_fetch_array(mysql_query("SELECT nome FROM dados where id = '$_SESSION[cod_usuario]'"));
    $insert_resposta = mysql_query("INSERT INTO suporte_respostas (txt_resposta, data, pessoa, id_dados, id_ticket) 
  VALUES   ('Segue em anexo documento para realização da portabilidade!','$dataatual', '{$select_nome['nome']}', '$_SESSION[cod_usuario]', '$id_ticket')");
    $dir = "midia/documentos/user/suporte/" . $user . "/";
    mkdir("$dir", 0777);
    if (is_dir("$dir" . $file_name) == false) {
      move_uploaded_file($file_tmp, $dir . $file_name);
    } else {
      $new_dir = $dir . $file_name . time();
      rename($file_tmp, $new_dir);
    }
    // }
  }
  $pedido_dados = mysql_fetch_assoc(mysql_query("SELECT p.*, d.* FROM pedido as p INNER JOIN dados as d ON p.idcliente_pacote = d.id WHERE id_pacote_pedido = '{$twou_idpedido}'"));
  $formata_valor = str_replace(".", "", $adesao);
  if ($titular_pagamento == 'S') {
    $nascimento             = $_POST['nascimento'];
    $cep                    = $_POST['cep'];
    $bairro                 = $_POST['bairro'];
    $rua                    = $_POST['rua'];
    $cidade                 = $_POST['cidade'];
    $uf                     = $_POST['uf'];
    $numero                 = $_POST['numero'];
  } else {
    $nascimento             = $pedido_dados['nascimento'];
    $cep                    = $pedido_dados['cep'];
    $bairro                 = $pedido_dados['bairro'];
    $rua                    = $pedido_dados['logradouro'];
    $cidade                 = $pedido_dados['cidade'];
    $uf                     = $pedido_dados['estado'];
    $numero                 = $pedido_dados['numero'];
  }
  if ($pedido_dados['tipo'] == 'J') {
    $cpf_cnpj = $pedido_dados['cnpj'];
    $tipo_cpf_cnpj = "CNPJ";
  } elseif ($pedido_dados['tipo'] == 'F') {
    $cpf_cnpj = $pedido_dados['cpf'];
    $tipo_cpf_cnpj = "CPF";
  }
  if ($sql) {
    ($_POST['metodo_pagamento'] == 'portabilidade') ? $title = 'Portabilidade realizada, aguardando aprovação!' : $title = " Solicite este boleto diretamente a Cooperlink através dos meios de comunicação ou se você é um Indicador V1000, faça o boleto pela LandPage";
    ?>
    <script type="text/javascript">
      Swal.fire({
        type: 'success',
        title: '<?php echo $title ?>',
        text: 'Você será direcionado para página de seus pedidos.',
        showCloseButton: false,
        showCancelButton: false,
        showConfirmButton: false,
        allowOutsideClick: false,
      });
      setTimeout(function() {
        location.href = "?p=meus_pedidos";
      }, 5000);
    </script>
  <?php
  } else {
  ?>
    <script type="text/javascript">
      Swal.fire({
        type: 'error',
        title: '<?php echo $data['
    cancellationDetails ']['
    description '] ?>',
        text: 'Tente novamente mais tarde.',
        showCloseButton: false,
        showCancelButton: false,
        showConfirmButton: false,
        allowOutsideClick: false,
      });
      setTimeout(function() {
        location.href = "?p=simular";
      }, 5000);
    </script>
  <?php
  }
  ?>
<?php } ?>


<input type="hidden" id="tipo_aut" value="<?= $_POST['tipo'] ?>" />
  <div class="row">
    <div class="col-lg-12">
      <div class="m-t-lg m-b ">
        <div class="card text-center p-t p-b-md">
          <h2><strong>ESCOLHA SEU PLANO</strong></h2>

            <?php
                $dataatual = date('Y-m');
                $fetch = mysql_fetch_array(mysql_query("SELECT * FROM pedido WHERE idcliente_pacote = $_SESSION[cod_usuario] AND placa_veiculo = '{$placa}' AND status_venda <> 2 ORDER BY tipo DESC LIMIT 1"));
                if ($fetch['tipo'] == 1 and $type_plan == 1) {
                  // $block = 1;
                  echo "<center><h3 style='color: Red;'>Você já possui um plano V350 faça upgrade para V700!</h3></center>";
                } elseif ($fetch['tipo'] == 2 and $type_plan == 2) {
                  // $block = 1;
                  echo "<center><h3 style='color: Red;'>Você já possui um plano V700 Parabéns!</h3></center>";
                } elseif ($fetch['tipo'] == 3 and $type_plan == 3) {
                  // $block = 1;
                  echo "<center><h3 style='color: Red;'>Você já possui uma migração para o V700, Parabéns!</h3></center>";
                } else {
                  // $block = 0;
                }
                $encondar_marca = $pedido_marca;
                $encodar_modelo = $pedido_modelo;
                if ($_POST['Marca'] == 201911 || $_POST['Marca'] == 201912 || $_POST['tipo'] == 'outros') {
                  $carro = '';
                } else {
                  $carro = "<div style='align-items:center;
                              justify-content: center;
                              margin: 5px;'><b>Marca:</b> {$encondar_marca} | <b>Modelo:</b> {$encodar_modelo}
                               | <b>Ano/Modelo:</b> {$_POST['AnoModelo']} | 
                               <b>Valor Fipe:</b> R$ " . number_format($valor, 2, ',', '.') . "</div>";
                  if ($_POST['tipo'] == "carros" and $_POST['estado'] != 'RJ') {
                    if ($valor >= 130000.00) {
                      $porcentagem = (130000.00 / $valor) * 100;
                      $porcentagem = number_format(substr($porcentagem, 0, 5), 2, '.', '.');
                      $carro .= "<br></br>Você está protegido no valor de R$130.000,00 equivalente aproximadamente " . $porcentagem . "% da tabela FIPE, exceto caso tenha aderido ao produto rastreador ou rastreador + assistência 24hrs que neste caso não haverá proteção veicular.";
                    }
                  }
                }
            ?>
          <?php
          echo $carro;
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php
    if ($_POST['AnoModelo'] >= $tempo_ano and $_POST['Marca'] != 201911 and ($_POST['tipo'] == 'carros' or ($_POST['tipo'] == 'motos' and $valor <= '22000.00')) and ($_POST['Marca'] != 201911 || $_POST['Marca'] != 201912 and $_POST['estado'] != 'RJ') && $_POST['produtos'] != "cooper") {
  ?>
  <!-- Divs alteradas  para antes do if, quando estavam abaixo do if 
       estava quebrando o layout do planos no "Outros" 
               </div>   
        </div>
    </div>
</div>
  -->
  
    <div id="heightLock">
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
        <div id="heightLock" class="card thumbnail product-box heightLock borda">
          <div class="caption">
            <div class="texto-plano">

              <?php if ($_POST['tipo'] == 'carros') { ?>
                 <h3 class="textoteste p-b b-b"><b>PREMIUM</b></h3>
              <? } else { ?>
                 <h3 class="textoteste p-b b-b"><b>FULL</b></h3>
              <? } ?>
                 </br>
              <? if ($_POST['tipo'] == "carros") { ?>
                 <p>Assistência 24 horas 1.500KM</p>
              <? } else { ?>
                 <p>Assistência 24 horas 500KM</p>
              <? } ?>
                <p>Furto e Roubo</p>
                <p>Colisão</p>
                <p>Perda Total</p>
                <p>Colisão seguida de incêndio</p>
                <p>Terceiros</p>
                <p>Fenômenos da natureza (arborismo e água doce)</p>
              <?php if ($_POST['tipo'] == 'motos') { ?>
                <p>Rastreador e monitoramento via app para motos acima de R$9.000,00</p>
              <? } else { ?>
                <p>Vidros (laterais, traseiros, retrovisor, para-brisa, lanternas e farois)</p>
                <p>Rastreador e monitoramento via app para carros acima de R$30.000,00</p>
              <?php } ?>
                <p>AP - Acidentes Pessoais (R$5.000,00) IPA e IMA</p>
              <?php
              if ($_POST['tipo'] !='motos') {
              ?>
                <p>APP- R$10.000,00 por passageiro e R$2.000,00 de assistência hospitalar</p>
                <p>Carro reserva por 15 dias</p>
              <?php } ?> 
                <p>CLUBE DE VANTAGENS</p>
                <p>Sorteio mensal de R$50.000,00 pela loteria federal</p>
              <?php if ($_POST['tipo'] == 'motos') { ?>
              <?php
              } ?>
                <p>Adesão<br><strong> R$ <?= number_format($adesao_premium, 2, ',', '.'); ?> </strong></p>
                <p>Mensalidade Padrão<br><strong> R$ <?= number_format($mensalidade_premium, 2, ',', '.'); ?> </strong></p>
                <?php if ($_POST['tipo'] != 'outros') { ?><p>Mensalidade Reduzida<br><strong> R$ <?= number_format($mensalidade_premium_reduzida, 2, ',', '.'); ?> </strong></p><?php } ?>
            </div>
                <input type="hidden" name="adquirir" value="adquirir">
                <input type="hidden" name="automovel" value="<?= $automovel ?>">
                <input type="hidden" name="valor1" value="<?= $valor1 ?>">
                <input type="hidden" name="estado" value="<?= $estado ?>">
              <?php if ($block != 1) { ?>
            <button type="submit" data-toggle="modal" data-id="PREMIUM" onclick="myFunctionPREMIUM()" data-target="#Modal" class="btn btn-migrar">
              Aderir
            </button>
            <?php } ?>
          </div> 
        </div>
      </div>
    </div>
  <?php } ?>

  
   <?php
  if ($_POST['AnoModelo'] >= $tempo_ano and $_POST['Marca'] != 201911 and  $_POST['tipo'] == 'carros' and ($_POST['Marca'] != 201911 || $_POST['Marca'] != 201912 and $_POST['estado'] != 'RJ') && $_POST['produtos'] != "cooper") {
  ?>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
      <div id="heightLock" class="card thumbnail product-box heightLock borda" style="background-color: #fff;">
        <div class="caption">
          <div class="texto-plano">
            <h3 class="textoteste p-b b-b"><b>MASTER PREMIER</b></h3>
            </br>
            <p>Assistência 24 horas 500KM</p>
            <p>Furto e Roubo</p>
            <p>Colisão</p>
            <p>Perda Total</p>
            <p>Colisão seguida de incêndio</p>
            <p>Terceiros</p>
            <p>Fenômenos da natureza (arborismo e água doce)</p>
            <?php if ($_POST['tipo'] == 'motos') { ?>
              <p>Vidros e Retrovisor</p>
              <p>Rastreador e monitoramento via app para motos acima de R$12.000,00</p>
            <? } else { ?>
              <p>Vidros (laterais, traseiros, retrovisor, para-brisa, lanternas e farois)</p>
              <p>Rastreador e monitoramento via app para carros acima de R$30.000,00</p>
            <?php } ?>
            <p>AP - Acidentes Pessoais (R$5.000,00) IPA e IMA</p>
            <?php if ($_POST['tipo'] == 'motos') {
            } else { ?>
              <p>APP - R$10.000,00 por passageiro e R$2.000,00 de assistência hospitalar</p>
              <p>Carro reserva por 7 dias</p>
            <?php } ?>
            <p>CLUBE DE VANTAGENS</p>
            <p>Sorteio mensal de R$50.000,00 pela loteria federal</p>
            <?php if ($_POST['tipo'] == 'motos') {  ?>
            <?php
            } ?>
            <p>Adesão<br><strong> R$ <?= number_format($adesao_master, 2, ',', '.'); ?> </strong></p>
            <p>Mensalidade Padrão<br><strong> R$ <?= number_format($mensalidade_master, 2, ',', '.'); ?> </strong></p>
            <?php if ($_POST['tipo'] != 'outros') { ?><p>Mensalidade Reduzida<br><strong> R$ <?= number_format($mensalidade_master_reduzida, 2, ',', '.'); ?></strong></p><?php } ?>
          </div>
          <input type="hidden" name="adquirir" value="adquirir">
          <input type="hidden" name="automovel" value="<?= $automovel ?>">
          <input type="hidden" name="valor1" value="<?= $valor1 ?>">
          <input type="hidden" name="estado" value="<?= $estado ?>">
          <?php if ($block != 1) { ?>
            <button type="button" data-toggle="modal" data-id="MASTER" onclick="myFunctionMASTER()" data-target="#Modal" class="btn btn-migrar">
              Aderir
            </button>
          <?php } ?>
        </div>
      </div>
    </div>
  <?php } ?>


    <?php if ($_POST['AnoModelo'] >= $tempo_ano and $_POST['Marca'] != 201911 and $_POST['tipo'] == 'carros' and ($_POST['Marca'] != 201911 || $_POST['Marca'] != 201912 and $_POST['estado'] != 'RJ') && $_POST['produtos'] != "cooper") {
  ?>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
      <div id="heightLock" class="card thumbnail product-box heightLock borda">
        <div class="caption">
          <div class="texto-plano ">
            <h3 class="textoteste p-b b-b"><b>BÁSICO</b></h3>
            </br>
            <p>Assistência 24 horas 500KM</p>
            <p>Furto e Roubo</p>
            <p>Colisão</p>
            <p>Perda Total</p>
            <p>Colisão seguida de incêndio</p>
            <p>Terceiros</p>
            <p>Fenômenos da natureza (arborismo e água doce)</p>
            <?php if ($_POST['tipo'] == 'motos') { ?>
              <p>Vidros</p>
              <p>Rastreador e monitoramento via app para motos acima de R$12.000,00</p>
            <? } else { ?>
              <p>Vidros (laterais e traseiros)</p>
              <p>Rastreador e monitoramento via app para carros acima de R$30.000,00</p>
            <?php } ?>
            <p>AP - Acidentes Pessoais (R$5.000,00) IPA e IMA</p>
            <?php if ($_POST['tipo'] == 'motos') {
            } else { ?>
              <p>APP - R$10.000,00 por passageiro e R$2.000,00 de assistência hospitalar</p>
            <?php } ?>
            <p>CLUBE DE VANTAGENS</p>
            <p>Sorteio mensal de R$50.000,00 pela loteria federal</p>
            <?php if ($_POST['tipo'] == 'motos') { ?>
            <?php } ?>
            <p>Adesão<br> <strong> R$ <?php echo number_format($adesao_basico, 2, ',', '.'); ?> </strong></p>
            <p>Mensalidade Padrão<br> <strong> R$ <strong><?= number_format($mensalidade_basico, 2, ',', '.'); ?> </strong></p>
            <?php if ($_POST['tipo'] != 'outros') { ?><p>Mensalidade Reduzida<br><strong> R$ <?= number_format($mensalidade_basico_reduzida, 2, ',', '.'); ?> </strong></p><?php } ?>
          </div>
          <input type="hidden" name="adquirir" value="adquirir">
          <input type="hidden" name="automovel" value="<?= $automovel ?>">
          <input type="hidden" name="valor1" value="<?= $valor1 ?>">
          <input type="hidden" name="estado" value="<?= $estado ?>">
          <?php if ($block != 1) { ?>
            <button type="button" data-toggle="modal" data-id="BASICO" onclick="myFunctionBASICO()" data-target="#Modal" class="btn btn-migrar">
              Aderir
            </button>
          <?php } ?>
        </div>
      </div>
    </div>

   <?php } ?>


   
<?php
  if ($_POST['AnoModelo'] >= $tempo_ano and $_POST['Marca'] != 201911 and ($_POST['tipo'] == 'carros' or ($_POST['tipo'] == "motos" and $valor <= '22000.00')) and ($_POST['Marca'] != 201911 || $_POST['Marca'] != 201912 and $_POST['estado'] != 'RJ') && $_POST['produtos'] != "cooper") {
  ?>
    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
      <div id="heightLock" class="card thumbnail product-box heightLock borda" style="background-color: #fff;">
        <div class="caption">
          <div class="texto-plano">
            <? if ($_POST['tipo'] == 'carros') { ?>
              <h3 class="textoteste p-b b-b"><b>ECONÔMICO</b></h3>
            <? } else { ?>
              <h3 class="textoteste p-b b-b"><b>START</b></h3>
            <? } ?>
            </br>
            <p>Assistência 24 horas 300KM</p>
            <p>Furto e Roubo</p>
            <? if ($_POST['tipo'] == 'carros') { ?>
              <p>Colisão</p>
              <p>Perda Total</p>
              <p>Colisão seguida de incêndio</p>
            <? } ?>
            <? if ($_POST['tipo'] == 'carros') { ?>
              <p>Rastreador e monitoramento via app para carros acima de R$30.000,00</p>
            <? } else { ?>
              <p>Rastreador e monitoramento via app para motos acima de R$9.000,00</p>
            <? } ?>
            <p>AP - Acidentes Pessoais (R$5.000,00) IPA e IMA</p>
            <?php
            if ($_POST['tipo'] == 'motos') {
            } else {
            ?>
              <p>APP - R$10.000,00 por passageiro e R$2.000,00 de assistência hospitalar</p>
            <?php } ?>
            <p>CLUBE DE VANTAGENS</p>
            <p>Sorteio mensal de R$50.000,00 pela loteria federal</p>
            <?php
            if ($_POST['tipo'] == 'motos') {
            ?>
            <?php
            } ?>
            <p>Adesão<br> <strong> R$ <?php echo number_format($adesao_premium_economico, 2, ',', '.'); ?> </strong></p>
            <p>Mensalidade Padrão<br><strong> R$ <?= number_format($mensalidade_premium_economico, 2, ',', '.'); ?> </strong></p>
            <?php if ($_POST['tipo'] != 'outros') { ?><p>Mensalidade Reduzida<br><strong> R$ <?= number_format($mensalidade_premium_economico_reduzida, 2, ',', '.'); ?> </strong></p><?php } ?>
          </div>
          <input type="hidden" name="adquirir" value="adquirir">
          <?php if ($block != 1) { ?>
            <button type="button" data-toggle="modal" data-id="ECONOMICO" onclick="myFunctionPREMIUM_ECONOMICO()" data-target="#Modal" class="btn btn-migrar">
              Aderir
            </button>
          <? }
          ?>
        </div>
      </div>
    </div>
  <?php } ?>



       <?php
    // <!-- INICIO COOPER -->
  $pacote_cooper = mysql_fetch_array(mysql_query("SELECT pacote_cooper FROM dados WHERE id = '{$_SESSION[cod_usuario]}'"));
  if ($_POST['AnoModelo'] >= $tempo_ano and ($_POST['Marca'] != 201911 || $_POST['Marca'] != 201912 and $_POST['estado'] != 'RJ') && $_POST['produtos'] == "cooper") {
      $veriCooper = mysqli_query($con, "SELECT cooper1,cooper2,cooper3 FROM dados WHERE id = '{$_SESSION['cod_usuario']}'");
      foreach ($veriCooper as $value) {
        if ($value['cooper1'] == 1) {
          $cooper_tittle = "COOPER BRONZE";
  ?>
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div id="heightLock" class="card thumbnail product-box heightLock borda">
                <div class="caption">
                  <div class="texto-plano">
                    <h3 class="textoteste p-b b-b"><b><?= $cooper_tittle ?></b></h3>
                    </br>
                    <p>Assistência 24 horas 500KM</p>
                    <p>Furto e Roubo</p>
                    <p>Colisão</p>
                    <p>Perda Total</p>
                    <p>Colisão seguida de incêndio</p>
                    <p>Terceiros</p>
                    <p>Fenômenos da natureza (arborismo e água doce)</p>
                    <p>Vidros (laterais e traseiros)</p>
                    <p>Adesão<br> R$ <?php echo number_format($adesao_cooper1, 2, ',', '.'); ?> <strong>
                        <p>Mensalidade Padrão<br><strong> R$ <strong>R$<?= number_format($cooper_bronze, 2, ',', '.'); ?> </strong></p>
                        <?php if ($_POST['tipo'] != 'outros') { ?><p>Mensalidade Reduzida<br><strong> R$ <?= number_format($cooper_bronze_reduzido, 2, ',', '.'); ?> </strong></p><?php } ?>
                  </div>
                  <input type="hidden" name="adquirir" value="adquirir">
                  <input type="hidden" name="automovel" value="<?= $automovel ?>">
                  <input type="hidden" name="valor1" value="<?= $valor1 ?>">
                  <input type="hidden" name="estado" value="<?= $estado ?>">
                  <?php if ($block != 1) { ?>
                    <button type="button" data-toggle="modal" data-id="COOPER(1)" onclick="myFunctionCOOPER()" data-target="#Modal" class="btn btn-migrar">
                      Aderir
                    </button>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php }
        if ($value['cooper2'] == 1) {
          $cooper_tittle = "COOPER PRATA"; ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div id="heightLock" class="card thumbnail product-box heightLock borda">
                <div class="caption">
                  <div class="texto-plano">
                    <h3 class="textoteste p-b b-b"><b><?= $cooper_tittle ?></b></h3>
                    </br>
                    <p>Assistência 24 horas 1000KM</p>
                    <p>Furto e Roubo</p>
                    <p>Colisão</p>
                    <p>Perda Total</p>
                    <p>Colisão seguida de incêndio</p>
                    <p>Terceiros</p>
                    <p>Fenômenos da natureza (arborismo e água doce)</p>
                    <p>Vidros (laterais, traseiros e retrovisores)</p>
                    <p>Adesão<br> <strong> R$ <?php echo number_format($adesao_cooper2, 2, ',', '.'); ?></strong> </strong></p>
                    <p>Mensalidade Padrão<br><strong> R$ <?= number_format($cooper_prata, 2, ',', '.'); ?></strong> </strong></p>
                    <?php if ($_POST['tipo'] != 'outros') { ?><p>Mensalidade Reduzida<br><strong> R$ <?= number_format($cooper_prata_reduzido, 2, ',', '.'); ?> </strong></p><?php } ?>
                  </div>
                  <input type="hidden" name="adquirir" value="adquirir">
                  <input type="hidden" name="automovel" value="<?= $automovel ?>">
                  <input type="hidden" name="valor1" value="<?= $valor1 ?>">
                  <input type="hidden" name="estado" value="<?= $estado ?>">
                  <?php if ($block != 1) { ?>
                    <button type="button" data-toggle="modal" data-id="COOPER(2)" onclick="myFunctionCOOPER2()" data-target="#Modal" class="btn btn-migrar">
                      Aderir
                    </button>
                  <?php } ?>
                </div>
              </div>
            </div>
          <?php }
        if ($value['cooper3'] == 1) {
          $cooper_tittle = "COOPER OURO"; ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div id="heightLock" class="card thumbnail product-box heightLock borda">
                <div class="caption">
                  <div class="texto-plano">
                    <h3 class="textoteste p-b b-b"><b> <?= $cooper_tittle ?> </b></h3>
                    </br>
                    <p>Assistência 24 horas 1000KM</p>
                    <p>Furto e Roubo</p>
                    <p>Colisão</p>
                    <p>Perda Total</p>
                    <p>Colisão seguida de incêndio</p>
                    <p>Terceiros</p>
                    <p>Fenômenos da natureza (arborismo e água doce)</p>
                    <p>Vidros (laterais,traseiros,retrovisores,</p>
                    <p>para-brisas,faróis e lanternas)</p>
                    <p>carro reserva por 7 dias</p>
                    <p>Adesão<br> <strong> R$ <?php echo number_format($adesao_cooper3, 2, ',', '.'); ?> </strong></p>
                    <p>Mensalidade Padrão<br> <strong>R$ <?= number_format($cooper_ouro, 2, ',', '.'); ?></strong> </strong></p>
                    <?php if ($_POST['tipo'] != 'outros') { ?><p>Mensalidade Reduzida<br> <strong>R$ <?= number_format($cooper_ouro_reduzido, 2, ',', '.'); ?> </strong></p><?php } ?>
                  </div>
                  <input type="hidden" name="adquirir" value="adquirir">
                  <input type="hidden" name="automovel" value="<?= $automovel ?>">
                  <input type="hidden" name="valor1" value="<?= $valor1 ?>">
                  <input type="hidden" name="estado" value="<?= $estado ?>">
                  <?php if ($block != 1) { ?>
                    <button type="button" data-toggle="modal" data-id="COOPER(3)" onclick="myFunctionCOOPER3()" data-target="#Modal" class="btn btn-migrar">
                      Aderir
                    </button>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        
  <?php
        }
      }
      
    }
  
  ?>
  
  <!-- FINAL COOPER -->




<!-- RASTREADOR == OUTROS E TIPO COOPER RASTREADOR + ASSISTENCIA   -->
  <?php if ($type_plan != 4 and $_POST['produtos'] <> "cooper" and $_POST['Marca'] == 201911 or $_POST['tipo'] == 'outros' && $_POST['tipo'] == "motos") { ?>
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
        <div id="heightLock" class="card thumbnail product-box heightLock borda">
          <div class="caption">
            <div class="texto-plano">
              <h3 style="border-bottom: 1px solid Black !important;font-size: 22px;"><b>FURTO & ROUBO</b></h3>
              </br>
              <p>Furto e roubo</p>
              <p>Localização do Veículo</p>
              <p>Reboque 300KM</p>
              <p>Aplicativo para celular</p>
              <p>Relatório de percurso</p>
              <p>Pane elétrica</p>
              <p>Pane mecânica</p>
              <p>Auxílio pneu furado</p>
              <p>Chaveiro auto</p>
              <p>Auxílio pane seca</p>
              <p>Guarda veículo acidentado</p>
              <p>Hospedagem em hotel</p>
              <p>MTA - (Taxi/Aplicativo/Ônibus)</p>
              <p>Terceiros</p>
              <p>AP - Acidentes pessoais (R$ 5.000,00) IPA e IMA</p>
              <p>APP - R$ 10.000,00 por passageiro e R$ 2.000,00 de assistência hospitalar</p>
              <p>CLUBE DE VANTAGENS </p>
              <p>Sorteio mensal de R$ 50.000,00 pela loteria federal</p>
              <p><strong>Rastreador em comodato</strong></p>
              <p><strong style="font-size: 13px;">Taxa de cancelamento R$ 100,00</strong></p>
              <p><strong>Indenezição de no máximo R$ 30 mil reais </strong></p>
              <p>Adesão<br><strong> R$ <?php echo number_format($adesao_premium_economico, 2, ',', '.'); ?> </strong></p>
              <p style="font-size: 13px;">Mensalidade<br><strong> R$ $<?= number_format($mensalidade_f_r_a, 2, ',', '.'); ?> </strong></p>
            </div>
			  <input type="hidden" name="automovel" value="<?= $automovel ?>">
              <input type="hidden" name="valor1" value="<?= $valor1 ?>">
              <input type="hidden" name="estado" value="<?= $estado ?>">
              <input type="hidden" name="adquirir" value="adquirir">
            <?php if ($block != 1) { ?>
              <button type="button" data-toggle="modal" onclick="furtoERoubo()" data-id="FURTO" data-target="#Modal" class="btn btn-migrar" style="margin-top: 230px;">
                Aderir
              </button>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php } ?>

    <?php if ($type_plan != 4 and $_POST['produtos'] <> "cooper" or $_POST['tipo'] == 'outros' && $_POST['tipo'] == "motos") {  ?>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
        <div id="heightLock" class="card thumbnail product-box heightLock borda">
          <div class="caption">
            <div class="texto-plano">
              <h3 class="textoteste p-b b-b"><b>RASTREADOR + ASSISTÊNCIA 24H</b></h3>
              </br>
              <p>Localização do Veículo</p>
              <p>Reboque 200KM</p>
              <p>Aplicativo para celular</p>
              <p>Relatório de percurso</p>
              <p>Pane elétrica</p>
              <p>Pane mecânica</p>
              <p>Auxílio pneu furado</p>
              <p>Chaveiro auto</p>
              <p>Auxílio pane seca</p>
              <p>Guarda veículo acidentado</p>
              <p>Hospedagem em hotel</p>
              <p>MTA - (Taxi/Aplicativo/Ônibus)</p>
              <p><strong>Rastreador em comodato</strong></p>
              <p><strong style="font-size: 13px;">Taxa de cancelamento R$ 100,00</strong></p>
              <p>Adesão<br><strong> R$ <?php echo number_format($adesao_premium_economico, 2, ',', '.'); ?> </strong></p>
              <p style="font-size: 13px;">Mensalidade<br><strong> R$ <?= number_format($mensalidade_r_a, 2, ',', '.'); ?> </strong></p>
            </div>
			<input type="hidden" name="automovel" value="<?= $automovel ?>">
            <input type="hidden" name="valor1" value="<?= $valor ?>">
            <input type="hidden" name="estado" value="<?= $estado ?>">
            <input type="hidden" name="adquirir" value="adquirir">
            <?php
            if ($block != 1) {
            ?>
              <button type="button" data-toggle="modal" onclick="rastreadorAssitencia()" data-id="RASTREADOR_ASSISTENCIA" value="rastreador_assistencia" data-target="#Modal" class="btn btn-migrar">
                Aderir
              </button>
            <?php } ?>
          </div>
        </div>
      </div>
    <? } ?>
    
    <?php if ($type_plan != 4 && $type_plan != 5 && $_POST['produtos'] <> "cooper" or $_POST['tipo'] == "outros") { ?>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
        <div id="heightLock" class="card thumbnail product-box heightLock borda" style="background-color: #fff;">
          <div class="caption">
            <div class="texto-plano">
                <h3 class="textoteste p-b b-b"><b>RASTREADOR</b></h3>
                </br>
                <p>Localização do Veículo</p>
                <p>Aplicativo para celular</p>
                <p>Relatório de percurso</p>
                <p><strong>Rastreador em comodato</strong></p>
                <p><strong style="font-size: 13px;">Taxa de cancelamento R$ 100,00</strong></p>
                <p>Adesão<br><strong> R$ <?php echo number_format($adesao_premium_economico, 2, ',', '.'); ?> </strong></p>
                <p style="font-size: 13px;">Mensalidade<br><strong> R$ <?= number_format($mensalidade_r, 2, ',', '.'); ?> </strong></p>
            </div>
			<input type="hidden" name="automovel" value="<?= $automovel ?>">
            <input type="hidden" name="valor1" value="<?= $valor ?>">
            <input type="hidden" name="estado" value="<?= $estado ?>">
            <input type="hidden" name="adquirir" value="adquirir">
            <?php
            if ($block != 1) {
            ?>
              <button type="button" data-toggle="modal" onclick="rastreador()" data-id="RASTREADOR" data-target="#Modal" class=" btn btn-migrar">
                Aderir
              </button>
            <?php } ?>
          </div>
        </div>
    </div>

     <? } ?>
   



<div class="row p-a">
      <div class="col-lg-12 col-sm-12 col-xs-12 text-center m-t-md card p-a">
        <span style="color: #ff0009;"><b>**** Para aderir a um dos planos você precisa aceitar os termos abaixo.****</b></span>
        <div class="col-md-12 bloqueia m-t-lg text-center">
          <div class="col-md-3 p-a">
            <h4>Termo de Adesão Associado</h4>
            <iframe src="https://docs.google.com/gview?url=https://escritorio.safeclass.com.br/TERMO_DE_ADESAO_ASSOCIADO.pdf&embedded=true" style="width:100px; height:100px;" frameborder="0">
            </iframe>
            <label>Caso não esteja visualizando
              <a href="https://docs.google.com/gview?url=https://escritorio.safeclass.com.br/TERMO_DE_ADESAO_ASSOCIADO.pdf&embedded=true" target="_blank">
                <h5 class="bold">Clique aqui</h5>
              </a>
            </label>
          </div>
          <div class="col-md-3 p-a">
            <h4>Termo de Adesão ao PAM</h4>
            <iframe src="https://docs.google.com/gview?url=https://escritorio.safeclass.com.br/TERMO_DE_ADESAO_AO_PAM.pdf&embedded=true" style="width:100px; height:100px;" frameborder="0">
            </iframe>
            <label>Caso não esteja visualizando
              <a href="https://docs.google.com/gview?url=https://escritorio.safeclass.com.br/TERMO_DE_ADESAO_AO_PAM.pdf&embedded=true" target="_blank">
                <h5 class="bold">Clique aqui</h5>
              </a>
            </label>
          </div>
          <div class="col-md-3 p-a">
            <h4>Termo de Adesão a Proteção de Terceiros</h4>
            <iframe src="https://docs.google.com/gview?url=https://escritorio.safeclass.com.br/TERMO_DE_ADESAO_A_PROTECAO_DE_TERCEIROS.pdf&embedded=true" style="width:100px; height:100px;" frameborder="0">
            </iframe>
            <label>Caso não esteja visualizando
              <a href="https://docs.google.com/gview?url=https://escritorio.safeclass.com.br/TERMO_DE_ADESAO_A_PROTECAO_DE_TERCEIROS.pdf&embedded=true" target="_blank">
                <h5 class="bold">Clique aqui</h5>
              </a></label>
          </div>
          <div class="col-md-3 p-a">
            <h4>Regulamento Associado</h4>
            <iframe src="https://docs.google.com/gview?url=https://escritorio.safeclass.com.br/REGULAMENTO_ASSOCIADO.pdf&embedded=true" style="width:100px; height:100px;" frameborder="0">
            </iframe>
            <label>Caso não esteja visualizando
              <a href="https://docs.google.com/gview?url=https://escritorio.safeclass.com.br/REGULAMENTO_ASSOCIADO.pdf&embedded=true" target="_blank">
                <h5 class="bold">Clique aqui</h5>
              </a>
            </label>
          </div>
        </div>
        <div class="col-md-12 bloqueia p-a m-t-lg text-center">
          <p class="p-l">
            <input type="checkbox" class="p-r" name="termos" id="termos" onclick="validaTermo()" required>
            <b>
              Li e concordo com os termos (PROPOSTA DE ADMISSÃO DE ASSOCIADO, PROGRAMA DE AUXÍLIO MÚTUO <p>- PAM, PROTEÇÃO DE TERCEIROS e REGULAMENTO ASSOCIADO) em condições</p>
            </b>
          </p>
        </div>
        <?php
        ?>
        <div class="col-lg-12 m-t-lg">
          <div class="col-md-6 col-sm-6 col-xs-12" style=" text-align: center">
            <label style="text-transform: uppercase;">Gerar PDF </label>
            <button type="button" class="btn btn-primary" style="border-radius: 5px;" onclick="gerarPdf('heightLock')">
              Clique Aqui
            </button>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 m-b " style="text-align: center">
            <label style="text-transform: uppercase;">Realizar outro orçamento? </label>
            <a href="?p=simular" style='margin-left: 10px;'>
              <button type="button" class="btn btn-pulse" style="border-radius: 5px;">
                Clique aqui
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>

  <div id="capture2"></div>

<? if ($type_plan == 4 || $type_plan == 5) {
  ?>
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" onclick="window.location.reload()" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title text-center" id="exampleModalLabel">Escolha um metódo de pagamento:</h3>
          </div>
          <form action="" id="formulario" method="POST" enctype="multipart/form-data">
            <div class="modal-body" style="overflow-y: auto; min-height: 150px;">
              <div class="col-md-12">
                <h5 class="p-a" id="exampleModalLabel">Escolha a mensalidade: </h5>
                <div id="radio_teste" class="radio_teste">
                  <h5><input type="radio" name="mensalidade1" class="mensalidade p-l" style="width:50px" id="radio_mp" value="MP" required />Mensalidade Padrão</h5>
                </div>
                <div id="radio_teste" class="radio_teste">
                  <h5><input type="radio" name="mensalidade1" class="mensalidade" style="width:50px" id="radio_ra" value="MR" required />Mensalidade reduzida</h5>
                </div>
                <div class="p-l">
                  <h5>R$</h5>
                  <p class="mensalidade_reduzida" style="display:none">
                  </p>
                  <p class="mensalidade_padrao" style="display:none">
                  </p>
                </div>
                <div class="participacao_padrao p-a">
                  <? if ($type_plan == 4 and $_POST['produtos'] != "cooper") { ?>
                    <div class="div_radio_portabilidade">
                      <input type="radio" name="portabilidade" class="portabilidade" id="radio_arquivos" value="SB">
                      <label for='radio_arquivos'>Subir Arquivo</label>
                      <input type="radio" name="portabilidade" class="portabilidade" id="radio_arquivon" value="SP" style="width:50px" required />
                      <label for="radio_arquivon">Fazer Somente Pedido</label>
                    </div>
                    <div class="col-md-12 subir_arquivo" style="display:none;">
                      <h5 class="modal-title" id="exampleModalLabel">Subir arquivo: </h5>
                      <input type="file" id="documento" name="documento">
                    </div>
                    <div class="col-md-12 somente_pedido" style="display:none;">
                      <h5 class="modal-title" id="exampleModalLabel">Gerando Somente Pedido: </h5>
                      <p><b>IMPORTANTE!</b> Subir arquivo em ticket, com o assunto portabilidade, mencionando que pedido ja foi realizado.</p>
                    </div>
                  <? }
                  ?>
                  <div class="participacao_padrao_div" style="display:none">
                    <? if ($_POST['tipo'] == "motos") {
                      if ($valor1 > '22000') {
                        $valor1 = '22000';
                      }
                      echo "Participação referente a mensalidade padrão R$" . number_format((($valor1 / 100) * 10), 2, ',', '.');
                    } else if ($_POST['tipo'] != "motos") {
                      if ($valor1 > '130000') {
                        $valor1 = '130000';
                      }
                      echo "Participação referente a mensalidade padrão R$" . number_format((($valor1 / 100) * 6), 2, ',', '.');
                    } ?>
                  </div>
                  <? if ($_POST['tipo'] == "motos") { ?>
                    <div class="participacao_reduzida" style="display:none">
                      <?= "Participação referente a mensalidade reduzida R$" . number_format((($valor1 / 100) * 20), 2, ',', '.'); ?>
                    </div>
                  <? } else { ?>
                    <div class="participacao_reduzida" style="display:none">
                      <?= "Participação referente a mensalidade reduzida R$" . number_format((($valor1 / 100) * 12), 2, ',', '.'); ?>
                    </div>
                  <? } ?>
                  <? if ($_POST['tipo'] == "motos") { ?>
                    <div id="participacao_minima" style="display:none">
                      <br>
                      <p><b>Participação mínima de R$ 600,00 </b></p>
                    </div>
                  <? } ?>
                </div>
              </div>



              <div class="modal-footer">
                <button type="button" class="btn" onclick="window.location.reload()" style="color:white; background-color:#FF0009; border-radius:5px !important;" data-dismiss="modal">
                  Fechar
                </button>
                <input type="hidden" class="mensalidade_ra" value="MR" id="">
                <input type="hidden" class="mensalidade_po" value="MP" id="mensalidade_escolhida">
                <input type="hidden" id="pacote" name="pacote" value="">
                <input type="hidden" id="adesao" name="adesao" value="">
                <input type="hidden" id="mensalidade" name="mensalidade" value="">
                <input type="hidden" name="servicos" value="<?= $servicos; ?>">
                <input type="hidden" name="valor1" value="<?= $valor1 ?>">
                <input type="hidden" name="tipo_automovel" value="<?= $tipo_automovel; ?>">
                <input type="hidden" name="placa" value="<?= $placa; ?>">
                <input type="hidden" name="pedido_marca" value="<?= $pedido_marca; ?>">
                <input type="hidden" name="pedido_modelo" value="<?= $pedido_modelo; ?>">
                <input type="hidden" name="ano" value="<?= $ano; ?>">
                <input type="hidden" id="estadojs" name="estado" value="<?= $estado; ?>">
                <input type="hidden" name="dormitorio" value="<?= $_POST['estado']; ?>">
                <input type="hidden" name="fipe" value="<?= $fipe; ?>">
                <input type="hidden" name="parcelas" id="parcelas" value="">
                <input type="hidden" name="tipo_plan" id="tipo_plan" value="<?= $type_plan; ?>">
                <input type="hidden" name="tipo_mensalidade" id="tipo_mensalidade" value="">
                <input type="hidden" name="metodo_pagamento" id="metodo_pagamento" value="<?= ($type_plan == 4) ? 'portabilidade' : 'ad=mens' ?>">
                <input type="hidden" name="titular_pagamento" id="titular_pagamento" value="N">
                <button type="submit" onclick="define_mensalidade();javascript:document.getElementById('blanket').style.display = 'block';document.getElementById('aguarde').style.display = 'block';" class="btn btn-primary" style="border-radius: 5px;">
                  Pagar Adesão</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>


  <? } else {   ?>
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" onclick="window.location.reload()" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="modal-title text-center" id="exampleModalLabel">Escolha um metódo de pagamento:</h3>
          </div>
          <div class="modal-body" style="overflow-y: auto; min-height: 150px;">
            <div class="col-md-12">
              <h5 class="p-a" id="exampleModalLabel">Escolha a mensalidade: </h5>
              <div id="radio_teste" class="radio_teste">
                <h5><input type="radio" name="mensalidade" class="mensalidade" style="width:50px" id="radio_mp" value="MP" required />Mensalidade Padrão</h5>
                <?php
                if ($marca != 201911) {
                ?>
                  <?php if ($_POST['tipo'] != 'outros') { ?><h5 id="RASTREADOR"><input type="radio" name="mensalidade" class="mensalidade" style="width:50px" id="radio_mr" value="MR" required />Mensalidade Reduzida</h5> <?php } ?>
                <?php }
                ?>
              </div>
              <div class="p-l">
                
                <p id="mensalidade_reduzida" class="mensalidade_reduzida" style="display:none">
                </p>
                <p id="mensalidade_padrao" class="mensalidade_padrao" style="display:none">
                </p>
              </div>
              <div class="participacao_padrao_div p-a" style="display:none">
                <? if ($_POST['tipo'] == "motos") {
                  if ($valor1 > '22000') {
                    $valor1 = '22000';
                  }
                  echo "Participação referente a mensalidade padrão R$" . number_format((($valor1 / 100) * 10), 2, ',', '.');
                } else if ($_POST['tipo'] != "motos") {
                  if ($valor1 > '130000') {
                    $valor1 = '130000';
                  }
                  echo "Participação referente a mensalidade padrão R$" . number_format((($valor1 / 100) * 6), 2, ',', '.');
                } ?>
              </div>
              <? if ($_POST['tipo'] == "motos") { ?>
                <div class="participacao_reduzida p-a" style="display:none">
                  <?= "Participação referente a mensalidade reduzida R$" . number_format((($valor1 / 100) * 20), 2, ',', '.'); ?>
               
			   </div>
              <? } else { ?>
                <div class="participacao_reduzida p-a" style="display:none">
                  <?= "Participação referente a mensalidade reduzida R$" . number_format((($valor1 / 100) * 12), 2, ',', '.'); ?>
                </div>
              <? } ?>
              <? if ($_POST['tipo'] == "motos") { ?>
                <div id="participacao_minima" style="display:none">
                  <br>
                  <p><b>Participação mínima de R$ 600,00</b></p>
                </div>
              <? } ?>
            </div>
            <form action="" id="formulario" method="POST">
              <div class="">
              </div>
              <input type="radio" name="metodo" class="metodo" id="radio_cpf" value="BL" style="width:50px" required />Boleto
              <br>
              <input type="radio" name="metodo" class="metodo" id="radio_cnpj" value="CC" style="width:50px" required />Cartão de Crédito
              <div class="div_boleto p-a" style="display:none;">
                <?php
                if ($type_plan == 1) {
                  $valor = "350,00";
                  $tx_2 = 28.30;
                  $tx_3 = 33.60;
                  $tx_4 = 39.20;
                  $tx_5 = 44.80;
                  $tx_6 = 50.50;
                  $tx_7 = 57.40;
                  $tx_8 = 63.60;
                  $tx_9 = 69.85;
                  $tx_10 = 77.00;
                } elseif ($type_plan == 2) {
                  $valor = "700,00";
                  $tx_2 = 55.90;
                  $tx_3 = 66.60;
                  $tx_4 = 77.60;
                  $tx_5 = 88.90;
                  $tx_6 = 100.60;
                  $tx_7 = 114.20;
                  $tx_8 = 126.60;
                  $tx_9 = 139.25;
                  $tx_10 = 152.00;
                } elseif ($type_plan == 3) {
                  $valor = "1000,00";
                  $tx_2 = 79.60;
                  $tx_3 = 94.80;
                  $tx_4 = 110.60;
                  $tx_5 = 126.90;
                  $tx_6 = 143.40;
                  $tx_7 = 162.90;
                  $tx_8 = 180.60;
                  $tx_9 = 198.60;
                  $tx_10 = 217.00;
                }
                ?>
                <select name="numberOfInstalments1" required id="numberOfInstalments1" class="form-control">
                  <option>----SELECIONE ----</option>
                  <option value="1">1x R$ <?= $valor ?> sem juros</option>
                  <option value="2">2x R$ <?= number_format($valor / 2, 2, ',', '.') ?> - Total R$ <?= $valor ?> </option>
                  <?php
                  if ($type_plan != 1) {
                  ?>
                    <option value="3">3x R$ <?= number_format((($valor / 3) + 0.01), 2, ',', '.') ?> - Total R$ <?= $valor ?> </option>
                  <? } ?>
                </select>
              </div>
              <div class="div_cartao" style="display:none;">
                <input type="radio" name="titular" class="titular" id="radio_titular" value="S" style="width:50px">Pagar com cartão de terceiros?
                <div class="col-md-12">
                  <div class="col-md-12">
                    <select name="numberOfInstalments" required id="numberOfInstalments" class="form-control">
                      <option>----SELECIONE ----</option>
                      <option value="1">1x R$ <?= $valor ?> sem juros</option>
                      <option value="2">2x R$ <?= number_format(($valor + $tx_2) / 2, 2, ',', '.') ?> - Total R$
                        <?= number_format($valor + $tx_2, 2, ',', '.') ?> </option>
                      <option value="3">3x R$ <?= number_format(($valor + $tx_3) / 3, 2, ',', '.') ?> - Total R$
                        <?= number_format($valor + $tx_3, 2, ',', '.') ?> </option>
                      <option value="4">4x R$ <?= number_format(($valor + $tx_4) / 4, 2, ',', '.') ?> - Total R$
                        <?= number_format($valor + $tx_4, 2, ',', '.') ?> </option>
                      <option value="5">5x R$ <?= number_format(($valor + $tx_5) / 5, 2, ',', '.') ?> - Total R$
                        <?= number_format($valor + $tx_5, 2, ',', '.') ?> </option>
                      <option value="6">6x R$ <?= number_format(($valor + $tx_6) / 6, 2, ',', '.') ?> - Total R$
                        <?= number_format($valor + $tx_6, 2, ',', '.') ?> </option>
                      <option value="7">7x R$ <?= number_format(($valor + $tx_7) / 7, 2, ',', '.') ?> - Total R$
                        <?= number_format($valor + $tx_7, 2, ',', '.') ?> </option>
                      <option value="8">8x R$ <?= number_format(($valor + $tx_8) / 8, 2, ',', '.') ?> - Total R$
                        <?= number_format($valor + $tx_8, 2, ',', '.') ?> </option>
                      <option value="9">9x R$ <?= number_format(($valor + $tx_9) / 9, 2, ',', '.') ?> - Total R$
                        <?= number_format($valor + $tx_9, 2, ',', '.') ?> </option>
                      <option value="10">10x <?= number_format(($valor + $tx_10) / 10, 2, ',', '.') ?> - Total R$
                        <?= number_format($valor + $tx_10, 2, ',', '.') ?> </option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <div class="icon ccic-brand">
                    </div>
                    <input class="form-control" required name="cardNumber" id="cardNumber" placeholder="Número do Cartão" type="text" value="" />
                  </div>
                  <div class="col-md-12">
                    <div class="icon ccic-cvv">
                    </div>
                    <input required name="cvv" id="cvv" class="form-control" maxlength="4" placeholder="CVV" type="text" value="" />
                  </div>
                  <div class="col-md-12">
                    <div class="icon ccic-name">
                    </div>
                    <input required class="form-control" name="nome_card" id="nome_card" placeholder="Titular do Cartão" type="text" value="" />
                  </div>
                  <div class="col-md-12">
                    <div class="icon ccic-exp">
                    </div>
                    <input required class="form-control" name="validade" id="validade" placeholder="MM/AA" type="text" value="" />
                  </div>
                  <!-- <div class="footer"> icones de cartao de credito, link quebrado
                                      <img src="http://storage.pupui.com.br/9CA0F40E971643D1B7C8DE46BBC18396/assets/cc-icons.e8f4c6b4db3cc0869fa93ad535acbfe7.png" alt="Visa, Master, Diners. Amex" border="0" />
                                      <img src="https://blog.pluga.co/uploads/2017/10/formas-de-pagaemnto-moip.png" style="height: 20px;" alt="Pagamentos por Moip" border="0" />
                              </div> -->
                </div>
              </div>
              <div class="dados_hidden" style="display:none;">
                <div id="collapseLocalizacao" class="panel-collapse">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-12">
                        <input class="form-control" maxlength="8" required name="cep" id="cep" placeholder="CEP" type="text" value="" style="background-color: white;">
                      </div>
                      <div class="col-md-12">
                        <input class="form-control" required name="bairro" id="bairro" placeholder="Bairro" type="text" value="" style="background-color: white;">
                      </div>
                      <div class="col-md-12">
                        <input class="form-control" required name="rua" id="rua" placeholder="Rua" type="text" value="" style="background-color: white;">
                        <h5 class="help-block">Nome da Rua \ Avenida</h5>
                      </div>
                      <div class="col-md-12">
                        <input class="form-control" required name="cidade" id="cidade" placeholder="Cidade" type="text" value="" style="background-color: white;">
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" required name="uf" id="uf" placeholder="UF" type="text" value="" style="background-color: white;">
                      </div>
                      <div class="col-md-6">
                        <input class="form-control" required name="numero" id="numero" placeholder="Número" type="text" value="" style="background-color: white;">
                      </div>
                      <div class="col-md-12">
                        <input class="form-control" required name="nascimento" id="nascimento" type="date" value="" style="background-color: white;">
                        <h5 class="help-block">Data Nascimento Titular</h5>
                      </div>
                      <div class="col-md-12">
                        <div id="checagem" style="display: none;">
                          <i class="fa fa-check-circle" style="position: absolute;font-size: 25px;width: 22px;height: 22px;color: green;left: 500px;top: 5px;"></i>
                        </div>
                        <input class="form-control" maxlength="11" onblur="valida()" required name="cpf" id="cpf" placeholder="CPF do Titular" type="text" value="" style="background-color: white;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              if ($type_plan == 1) {
              ?>
                <div class="row">
                  <div class="col-md-6 p-a">
                    <label for="geracao">Indicador geração</label>
                    <select class="form-control" name="geracao" id="geracao">
                      <?php
                      include $_SERVER['DOCUMENT_ROOT'] . 'files/compensacao/buscaAcima.php';
                      buscaAcima($_SESSION['cod_usuario']);
                      ?>
                    </select>
                  </div>
                <? } ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn" onclick="window.location.reload()" class="botao_close" data-dismiss="modal" style="background-color:#ff0009; color:#fff; border-radius: 5px;">
                    Fechar
                  </button>
                  <input type="hidden" class="mensalidade_ra" value="MR" id="">
                  <input type="hidden" class="mensalidade_po" value="MP" id="mensalidade_escolhida">
                  <input type="hidden" id="pacote" name="pacote" value="">
                  <input type="hidden" id="adesao" name="adesao" value="">
                  <input type="hidden" id="mensalidade" name="mensalidade" value="">
                  <input type="hidden" name="servicos" value="<?= $servicos; ?>">
                  <input type="hidden" name="valor1" value="<?= $valor1; ?>">
                  <input type="hidden" name="tipo_automovel" value="<?= $tipo_automovel; ?>">
                  <input type="hidden" name="placa" value="<?= $placa; ?>">
                  <input type="hidden" name="pedido_marca" value="<?= $pedido_marca; ?>">
                  <input type="hidden" name="pedido_modelo" value="<?= $pedido_modelo; ?>">
                  <input type="hidden" name="ano" value="<?= $ano; ?>">
                  <input type="hidden" id="estadojs" name="estado" value="<?= $estado; ?>">
                  <input type="hidden" name="dormitorio" value="<?= $_POST['estado']; ?>">
                  <input type="hidden" name="fipe" value="<?= $fipe; ?>">
                  <input type="hidden" name="parcelas" id="parcelas" value="">
                  <input type="hidden" name="tipo_plan" id="tipo_plan" value="<?= $type_plan; ?>">
                  <input type="hidden" name="tipo_mensalidade" id="tipo_mensalidade" value="">
                  <input type="hidden" name="metodo_pagamento" id="metodo_pagamento" value="">
                  <input type="hidden" name="titular_pagamento" id="titular_pagamento" value="N">
                  <button type="submit" onclick="define_mensalidade();javascript:document.getElementById('blanket').style.display = 'block';document.getElementById('aguarde').style.display = 'block';" class="btn btn-primary" style="border-radius: 5px;">
                    Pagar Adesão
                  </button>
                </div>
            </form>
          </div>
        </div>
      </div>
      
    </div>
  <? } ?>
  
 
  <script>
  function validaTermo() {
		let checado = $("#termos").is(':checked')
		  if (checado == true) {
			$(".btn-migrar").css('display', 'block');
			$(".bloqueia").css('display', 'none');
		}
	};
   </script>
  <script>
  
    let options = $('#geracao_indicacao');
	console.log(options.length + "aqui");

	var numItems = $('option#geracao_indicacao').length;
	console.log(numItems);

	function myFunctionPREMIUM_ECONOMICO() {
	  document.getElementById("adesao").value = <?php echo $mensalidade_premium_economico; ?>;
	  document.getElementById("mensalidade").value = <?php echo $mensalidade_premium_economico_reduzida; ?>;
	  var PremiumEconomico = document.getElementById('mensalidade').value; 
      document.getElementById('mensalidade_reduzida').innerHTML ='R$ '+ parseFloat(PremiumEconomico).toFixed(2);
	  var Economico_adesao = document.getElementById('adesao').value; 
      document.getElementById('mensalidade_padrao').innerHTML = 'R$ '+ parseFloat(Economico_adesao).toFixed(2);
  	  document.getElementById("pacote").value = "ECONOMICO";	
	
	  <?php if ($_POST['tipo'] == 'carros') { ?>
		document.getElementById("pacote").value = "ECONOMICO";
	  <?php } else { ?>
		document.getElementById("pacote").value = "START";
	  <?php } ?>
	};
	
    function myFunctionBASICO() {
		document.getElementById("adesao").value = <?php echo $mensalidade_basico; ?>;
        document.getElementById("mensalidade").value = <?php echo $mensalidade_basico_reduzida; ?>;
	    var valorBasico = document.getElementById('mensalidade').value; 
		 document.getElementById('mensalidade_reduzida').innerHTML ='R$ '+ parseFloat(valorBasico).toFixed(2);
		var adesaobasico = document.getElementById('adesao').value; 
        document.getElementById('mensalidade_padrao').innerHTML = 'R$ '+ parseFloat(adesaobasico).toFixed(2);
		document.getElementById("pacote").value = "BASICO";
	};

	function myFunctionPREMIUM() {
		document.getElementById("adesao").value = <?php echo $mensalidade_premium; ?>;
		document.getElementById("mensalidade").value = <?php echo $mensalidade_premium_reduzida; ?>;
		var valorPremium = document.getElementById('mensalidade').value; 
		//document.getElementById("type_plan").value = <?php echo $type_plan; ?>;
        document.getElementById('mensalidade_reduzida').innerHTML ='R$ '+ parseFloat(valorPremium).toFixed(2);
		var Premium_adesao = document.getElementById('adesao').value; 
        document.getElementById('mensalidade_padrao').innerHTML = 'R$ '+ parseFloat(Premium_adesao).toFixed(2);

		<?php if ($_POST['tipo'] == 'carros') { ?>
			document.getElementById("pacote").value = "PREMIUM";
		<?php } else { ?>
			document.getElementById("pacote").value = "FULL";
		<?php } ?>
	};

     function myFunctionMASTER() {
 		document.getElementById("mensalidade").value = <?php echo $mensalidade_master_reduzida; ?>;
		document.getElementById("adesao").value = <?php echo $mensalidade_master; ?>;
		document.getElementById("pacote").value = "MASTER";
		var valorMaster = document.getElementById('mensalidade').value; 
        document.getElementById('mensalidade_reduzida').innerHTML ='R$ '+ parseFloat(valorMaster).toFixed(2);
		var Master_adesao = document.getElementById('adesao').value; 
        document.getElementById('mensalidade_padrao').innerHTML = 'R$ '+ parseFloat(Master_adesao).toFixed(2);
	};
	function furtoERoubo() {
		  document.getElementById("adesao").value = <?php echo $adesao_premium_economico; ?>;
		  document.getElementById('pacote').value = 'FURTO & ROUBO';
		  document.getElementById("mensalidade").value = <?php echo $mensalidade_f_r_a; ?>;
		
	};
		
	
	function myFunctionCOOPER() {
		document.getElementById("adesao").value = <?php echo $cooper_bronze; ?>;
		document.getElementById("mensalidade").value = <?php echo $cooper_bronze_reduzido; ?>;
		document.getElementById("pacote").value = "COOPER";
	    var valorCopperBasico = document.getElementById('mensalidade').value; 
        document.getElementById('mensalidade_reduzida').innerHTML ='R$ '+ parseFloat(valorCopperBasico).toFixed(2);
		var adesao_cooper = document.getElementById('adesao').value; 
        document.getElementById('mensalidade_padrao').innerHTML = 'R$ '+ parseFloat(adesao_cooper).toFixed(2);
		document.getElementById("pacote").value = "COOPER";
	};

	function myFunctionCOOPER2() {
		  document.getElementById("adesao").value = <?php echo $cooper_prata; ?>;
		  document.getElementById("mensalidade").value = <?php echo $cooper_prata_reduzido; ?>;
		  var valorCopper = document.getElementById('mensalidade').value; 
          document.getElementById('mensalidade_reduzida').innerHTML ='R$ '+ parseFloat(valorCopper).toFixed(2);
          var adesao_coopernovo = document.getElementById('adesao').value; 
          document.getElementById('mensalidade_padrao').innerHTML = 'R$ '+ parseFloat(adesao_coopernovo).toFixed(2);
 		  document.getElementById("pacote").value = "COOPER(2)";
	};

	function myFunctionCOOPER3() {
		  document.getElementById("adesao").value = <?php echo $cooper_ouro; ?>;
		  document.getElementById("mensalidade").value = <?php echo $cooper_ouro_reduzido; ?>;
		  var valorCopperOuro = document.getElementById('mensalidade').value; 
          document.getElementById('mensalidade_reduzida').innerHTML ='R$ '+ parseFloat(valorCopperOuro).toFixed(2);
          var adesao_CooperOuro = document.getElementById('adesao').value; 
          document.getElementById('mensalidade_padrao').innerHTML = 'R$ '+ parseFloat(adesao_CooperOuro).toFixed(2);
		  document.getElementById("pacote").value = "COOPER(3)";
	};
	
    // let n = 2
    // let options = $('#geracao').children()
    // for (let i = 0; i < options.length; i++) {
    //   if (i >= n) {
    //     options[i].remove()
    //   }
    // }
  </script>
  <script>
  function rastreadorAssitencia() {
		 console.log('RASTREADOR + ASSISTÊNCIA');
		 document.getElementById("adesao").value = <?php echo $adesao_premium_economico; ?>;
		 document.getElementById('pacote').value = 'RASTREADOR + ASSISTÊNCIA';
		 document.getElementById("mensalidade").value = <?php echo $mensalidade_r_a; ?>;
		 var valorRastrear = document.getElementById('mensalidade').value; 
         document.getElementById('mensalidade_reduzida').innerHTML ='R$ '+ parseFloat(valorRastrear).toFixed(2);
		 var valor_assistencia = document.getElementById('adesao').value; 
         document.getElementById('mensalidade_padrao').innerHTML = 'R$ '+ parseFloat(valor_assistencia).toFixed(2);
	};
	function rastreador() {
		  document.getElementById("adesao").value = <?php echo $adesao_premium_economico; ?>;
		  document.getElementById('pacote').value = 'RASTREADOR';
		  document.getElementById("mensalidade").value = <?php echo $mensalidade_r; ?>;
		  var valor_rastreador = document.getElementById('mensalidade').value; 
          document.getElementById('mensalidade_reduzida').innerHTML ='R$ '+ parseFloat(valor_rastreador).toFixed(2);
		  var valor_rastrearadesao = document.getElementById('adesao').value; 
          document.getElementById('mensalidade_padrao').innerHTML = 'R$ '+ parseFloat(valor_rastrearadesao).toFixed(2);
		 
	};	
  
  </script>
  <script>
    $(document).ready(function () {
        $('input[type=radio][name=metodo]').on('change', function() {
            if ($(this).val() == 'BL') {
			$(".div_boleto").css('display', 'block');
			console.log('aqui');
			$(".div_cartao").css('display', 'none');
			$("#cep").removeAttr("required");
			$("#bairro").removeAttr("required");
			$("#rua").removeAttr("required");
			$("#cidade").removeAttr("required");
			$("#numero").removeAttr("required");
			$("#uf").removeAttr("required");
			$("#nascimento").removeAttr("required");
			$("#cardNumber").removeAttr("required");
			$("#cvv").removeAttr("required");
			$("#cpf").removeAttr("required");
			$("#nome_card").removeAttr("required");
			$("#validade").removeAttr("required");
			$("#numberOfInstalments").removeAttr("required");
			document.getElementById("metodo_pagamento").value = "boleto";
		  } else {
			$(".div_cartao").css('display', 'block');
			$(".div_boleto").css('display', 'none');
			document.getElementById("metodo_pagamento").value = "cartao";
		  } 
        });
    });
	
	
</script>
  <script>
    $(document).ready(function () {
         $('input:radio[name=mensalidade]').change(function() {
			if ($(this).val() == 'MR'){
				console.log('Men Reduzidda');
				 $(".mensalidade_reduzida").css('display', 'block');
				 $(".participacao_reduzida").css('display', 'block');
				 $("#tipo_mensalidade").val('Mensalidade Reduzida');
				 $(".mensalidade_padrao").css('display', 'none');
				 $(".participacao_padrao_div").css('display', 'none');
				 $('.mensalidade_ra').attr('id', 'mensalidade_escolhida');
				 $('.mensalidade_po').attr('id', '');
				 
			}
			else if ($(this).val() == 'MP') {
				console.log('Men Padrão');
				 $(".mensalidade_padrao").css('display', 'block');
			     $(".participacao_padrao_div").css('display', 'block');
			     $("#tipo_mensalidade").val('Mensalidade Padrão');
			     $(".mensalidade_reduzida").css('display', 'none');
			     $(".participacao_reduzida").css('display', 'none');
			     $('.mensalidade_po').attr('id', 'mensalidade_escolhida');
			     $('.mensalidade_ra').attr('id', '');
			
			}
       });
    });
</script>
  <script>
    $(document).ready(function() {
      $(".btn-migrar").css('display', 'none');
    });
    
	 $(document).ready(function() {
     //$('input[type=radio][name=mensalidade]').on('change', function() {
	 //  alert('oi');
	//$(".mensalidade").on('change', function() {
    //  if ($(this).val() == 'MR') {
    //    console.log('Men Reduzidda');
    //    $(".mensalidade_reduzida").css('display', 'block');
    //    $(".participacao_reduzida").css('display', 'block');
    //    $("#tipo_mensalidade").val('Mensalidade Reduzida');
     //   $(".mensalidade_padrao").css('display', 'none');
     //   $(".participacao_padrao_div").css('display', 'none');
     //   $('.mensalidade_ra').attr('id', 'mensalidade_escolhida');
     //   $('.mensalidade_po').attr('id', '');
     // } else if ($(this).val() == 'MP') {
     //   console.log('Men Padrão');
     //   $(".mensalidade_padrao").css('display', 'block');
     //   $(".participacao_padrao_div").css('display', 'block');
     //   $("#tipo_mensalidade").val('Mensalidade Padrão');
     //   $(".mensalidade_reduzida").css('display', 'none');
     //   $(".participacao_reduzida").css('display', 'none');
     //   $('.mensalidade_po').attr('id', 'mensalidade_escolhida');
     //   $('.mensalidade_ra').attr('id', '');
     // }
    
	
	//});
	 
	 
    });
	
    $(document).ready(function() {
      $("#cpf").removeAttr("required");
      $("#cep").removeAttr("required");
      $("#bairro").removeAttr("required");
      $("#rua").removeAttr("required");
      $("#cidade").removeAttr("required");
      $("#numero").removeAttr("required");
      $("#uf").removeAttr("required");
      $("#nascimento").removeAttr("required");
    });
    $(".titular").on('change', function() {
      if ($(this).val() == 'S') {
        $("#cpf").attr("required", "required");
        $("#cep").attr("required", "required");
        $("#bairro").attr("required", "required");
        $("#rua").attr("required", "required");
        $("#cidade").attr("required", "required");
        $("#numero").attr("required", "required");
        $("#uf").attr("required", "required");
        $("#nascimento").attr("required", "required");
        $(".dados_hidden").css('display', 'block');
        document.getElementById("titular_pagamento").value = "S";
      } else {
        $("#cpf").removeAttr("required");
        $("#cep").removeAttr("required");
        $("#bairro").removeAttr("required");
        $("#rua").removeAttr("required");
        $("#cidade").removeAttr("required");
        $("#numero").removeAttr("required");
        $("#uf").removeAttr("required");
        $("#nascimento").removeAttr("required");
        document.getElementById("titular_pagamento").value = "N";
      }
    });
    //$(".metodo").on('change', function() {
	//	alert('oi');
    //  if ($(this).val() == 'BL') {
     //   $(".div_boleto").css('display', 'block');
     //   console.log('aqui');
     //   $(".div_cartao").css('display', 'none');
     //   $("#cep").removeAttr("required");
     //   $("#bairro").removeAttr("required");
     //   $("#rua").removeAttr("required");
     //   $("#cidade").removeAttr("required");
     //   $("#numero").removeAttr("required");
     //   $("#uf").removeAttr("required");
     //   $("#nascimento").removeAttr("required");
     //   $("#cardNumber").removeAttr("required");
     //   $("#cvv").removeAttr("required");
     //   $("#cpf").removeAttr("required");
     //   $("#nome_card").removeAttr("required");
     //   $("#validade").removeAttr("required");
     //   $("#numberOfInstalments").removeAttr("required");
     //   document.getElementById("metodo_pagamento").value = "boleto";
     // } else {
     //   $(".div_cartao").css('display', 'block');
     //   $(".div_boleto").css('display', 'none');
     //   document.getElementById("metodo_pagamento").value = "cartao";
     // }
    //});
    $(".portabilidade").on('change', function() {
      if ($(this).val() == 'SB') {
        $(".subir_arquivo").css('display', 'block');
        $(".somente_pedido").css('display', 'none');
      } else {
        $(".somente_pedido").css('display', 'block');
        $(".subir_arquivo").css('display', 'none');
      }
    });
    $(document).ready(function() {
      $(".btn-migrar").click(function() {
        var tipo = $("#tipo_aut").val();
        var dados = $(this).attr("data-id");
        var estado = $("#estadojs").val();
        if (tipo != "motos") {
          if (dados === 'RASTREADOR') {
            if (estado == "MG" || estado == "SE") {
              $('.mensalidade_padrao').html('79,00');
            } else if (estado == "ES") {
              $('.mensalidade_padrao').html('79,90');
            } else {
              $('.mensalidade_padrao').html('79,00');
            }
            $('#RASTREADOR').css('display', 'none');
            $('.participacao_padrao').css('display', 'none');
            $('.participacao_reduzida').css('display', 'none');
          } else if (dados === 'RASTREADOR_ASSISTENCIA') {
            if (estado == "MG" || estado == "SE") {
              $('.mensalidade_padrao').html('99,00');
            } else if (estado == "ES") {
              $('.mensalidade_padrao').html('109,90');
            } else {
              $('.mensalidade_padrao').html('99,00');
            }
            $('#RASTREADOR').css('display', 'none');
            $('.participacao_padrao').css('display', 'none');
            $('.participacao_reduzida').css('display', 'none');
          } else if (dados === 'FURTO') {
            if (estado == "MG" || estado == "SE") {
              $('.mensalidade_padrao').html('141,08');
            } else if (estado == "ES") {
              $('.mensalidade_padrao').html('141,08');
            } else {
              $('.mensalidade_padrao').html('141,08');
            }
            $('#FURTO').css('display', 'none');
            $('.participacao_padrao').css('display', 'none');
            $('.participacao_reduzida').css('display', 'none');
          }
        } else if (tipo == "motos") {
          if (dados === 'RASTREADOR') {
            if (estado == "MG" || estado == "SE") {
              $('.mensalidade_padrao').html('79,90');
            } else if (estado == "ES") {
              $('.mensalidade_padrao').html('79,90');
            } else {
              $('.mensalidade_padrao').html('79,90');
            }
            $('#RASTREADOR').css('display', 'none');
            $('.participacao_padrao').css('display', 'none');
            $('.participacao_reduzida').css('display', 'none');
          } else if (dados === 'RASTREADOR_ASSISTENCIA') {
            if (estado == "MG" || estado == "SE") {
              $('.mensalidade_padrao').html('99,00');
            } else if (estado == "ES") {
              $('.mensalidade_padrao').html('109,90');
            } else {
              $('.mensalidade_padrao').html('99,00');
            }
            $('#RASTREADOR').css('display', 'none');
            $('.participacao_padrao').css('display', 'none');
            $('.participacao_reduzida').css('display', 'none');
          }
        }
      })
    });
    
	var mensalidade_escolhida;
    var pacote;
    function define_mensalidade() {
      console.log("chegou no definir mensalidade");
      mensalidade_escolhida = document.getElementById("mensalidade_escolhida");
      pacote = document.getElementById("pacote");
      marca = document.getElementById("");
      if (pacote.value == "ECONOMICO" || pacote.value == "START") {
        if (mensalidade_escolhida.value == "MP") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_premium_economico; ?>;
        }
        if (mensalidade_escolhida.value == "MR") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_premium_economico_reduzida; ?>;
        }
      }
      if (pacote.value == "PREMIUM" || pacote.value == "FULL") {
        if (mensalidade_escolhida.value == "MP") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_premium; ?>;
        }
        if (mensalidade_escolhida.value == "MR") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_premium_reduzida; ?>;
        }
      }
      if (pacote.value == "MASTER") {
        if (mensalidade_escolhida.value == "MP") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_master; ?>;
        }
        if (mensalidade_escolhida.value == "MR") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_master_reduzida; ?>;
        }
      }
      // if (pacote.value == "FURTO & ROUBO") {
      //   if (mensalidade_escolhida.value == "MP") {
      //     document.getElementById("mensalidade").value = <?php //echo $mensalidade_f_r_a; 
                                                            ?>;
      //   }
      //   if (mensalidade_escolhida.value == "MR") {
      //     document.getElementById("mensalidade").value = <?php //echo $mensalidade_master_reduzida; 
                                                            ?>;
      //   }
      // }
      if (pacote.value == "BÁSICO") {
        if (mensalidade_escolhida.value == "MP") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_basico; ?>;
        }
        if (mensalidade_escolhida.value == "MR") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_basico_reduzida; ?>;
        }
      }
      if (pacote.value == "COOPER") {
        if (mensalidade_escolhida.value == "MP") {
			document.getElementById("adesao").value = <?php echo $cooper_bronze; ?>;
            document.getElementById("mensalidade").value = <?php echo $cooper_bronze; ?>;
        }
        if (mensalidade_escolhida.value == "MR") {
          document.getElementById("mensalidade").value = <?php echo $cooper_bronze_reduzido; ?>;
        }
      };
      if (pacote.value == "COOPER(2)") {
        if (mensalidade_escolhida.value == "MP") {
	 	  document.getElementById("adesao").value = <?php echo $cooper_prata; ?>;	
          document.getElementById("mensalidade").value = <?php echo $cooper_prata; ?>;
        }
        if (mensalidade_escolhida.value == "MR") {
          document.getElementById("mensalidade").value = <?php echo $cooper_prata_reduzido; ?>;
        }
      };
      if (pacote.value == "COOPER(3)") {
        if (mensalidade_escolhida.value == "MP") {
		   document.getElementById("adesao").value = <?php echo $cooper_ouro; ?>;	
           document.getElementById("mensalidade").value = <?php echo $cooper_ouro; ?>;
        }
        if (mensalidade_escolhida.value == "MR") {
           document.getElementById("mensalidade").value = <?php echo $cooper_ouro_reduzido; ?>;
        }
      };
	  if (pacote.value == "RASTREADOR") {
		 if (mensalidade_escolhida.value == "MP") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_r; ?>;
        }
        if (mensalidade_escolhida.value == "MR") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_r; ?>;
        }
      };
	  if (pacote.value == "RASTREADOR + ASSISTÊNCIA 24H") {
		 if (mensalidade_escolhida.value == "MP") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_r_a; ?>;
        }
        if (mensalidade_escolhida.value == "MR") {
          document.getElementById("mensalidade").value = <?php echo $mensalidade_r_a; ?>;
        }
      };
	  
    }
    function valida() {
      if (valida_cpf(document.getElementById('cpf').value)) {
        $("#checagem").css('display', 'block');
      } else {
        $("#checagem").css('display', 'none');
        alert('CPF Inválido');
        document.getElementById('cpf').value = '';
      }
      function valida_cpf(cpf) {
        var numeros, digitos, soma, i, resultado, digitos_iguais;
        digitos_iguais = 1;
        if (cpf.length < 11) {
          return false;
        }
        for (i = 0; i < cpf.length - 1; i++)
          if (cpf.charAt(i) != cpf.charAt(i + 1)) {
            digitos_iguais = 0;
            break;
          } if (!digitos_iguais) {
          numeros = cpf.substring(0, 9);
          digitos = cpf.substring(9);
          soma = 0;
          for (i = 10; i > 1; i--)
            soma += numeros.charAt(10 - i) * i;
          resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
          if (resultado != digitos.charAt(0)) return false;
          numeros = cpf.substring(0, 10);
          soma = 0;
          for (i = 11; i > 1; i--)
            soma += numeros.charAt(11 - i) * i;
          resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
          if (resultado != digitos.charAt(1)) return false;
          return true;
        } else {
          return false;
        }
      }
    };
    $(document).ready(function() {
      $('#validade').mask('00/00');
      $('#cardNumber').mask('0000 0000 0000 0000');
    });
    function lettersOnly(evt) {
      evt = (evt) ? evt : event;
      var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
      if (charCode > 31 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122)) {
        return false;
      }
      return true;
    }
    $("#numberOfInstalments").on('change', function(e) {
      var selecionado = $(this).val();
      document.getElementById("parcelas").value = selecionado;
    });
    $("#numberOfInstalments1").on('change', function(e) {
      var selecionado = $(this).val();
      document.getElementById("parcelas").value = selecionado;
    });
    $(document).ready(function() {
      function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
      }
      //Quando o campo cep perde o foco.
      $("#cep").blur(function() {
        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');
        //Verifica se campo cep possui valor informado.
        if (cep != "") {
          //Expressão regular para validar o CEP.
          var validacep = /^[0-9]{8}$/;
          //Valida o formato do CEP.
          if (validacep.test(cep)) {
            //Preenche os campos com "..." enquanto consulta webservice.
            $("#rua").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#uf").val("...");
            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {
              if (!("erro" in dados)) {
                //Atualiza os campos com os valores da consulta.
                $("#rua").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
                $("#cidade").val(dados.localidade);
                $("#uf").val(dados.uf);
              } //end if.
              else {
                //CEP pesquisado não foi encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
              }
            });
          } //end if.
          else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
          }
        } //end if.
        else {
          //cep sem valor, limpa formulário.
          limpa_formulário_cep();
        }
      });
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <!-- <script type="text/javascript" charset="utf-8" src="/files/main/funcoes2.js.php"></script> -->
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/files/main/funcoes2.js.php'; ?>