<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <title><?php echo $titulo; ?></title>
  </head>
  <body>   
  <header>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Menu 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Menu 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Menu 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <div class="jumbotron">
      <h1 class="display-3">Nombre empresa, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    </div>
  </header>
    <div class="container caja">
      <!-- <div class="row">
        <div class="col-6 text-center"><h1>Informe 1</h1></div>
        <div class="col-6 text-center"><h1>Informe 2</h1></div>
      </div>
      <div class="row">
        <div class="col-6">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-6">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6 text-center">
          SELECT 
              ID_CO AS CENTRO_OPERATIVO,
              LAPSO_DOC AS LAPSO,
              FECHA_DCTO AS FECHA,
              ID_TIPDOC AS TIPO_FAC,
              (CASE 
              WHEN ID_TIPDOC<> '  ' THEN 'FACTURADO'
                  ELSE 'REMISIONADO'
             END) AS ESTADO,
              DOCUMENTO_FC AS NUMERO_FAC,
              ID_F_PAGO,
              (CASE
                  WHEN ID_F_PAGO = '  ' THEN 'CONTADO'
                  ELSE 'CREDITO'
              END) AS FORMA_PAGO,
              IT.ID_REFERENCIA AS REFERENCIA,
              IT.PESO AS PESO,
              CANTIDAD AS CANTIDAD,
              (CANTIDAD * IT.PESO) AS PESO_REAL,
              TOT_VENTA AS VENTA_PESOS,
              IT.ID_LINEA AS LINEA,
              LI.CMLINEAS_DESCRIPCION AS DESCRIPCION,
              DOC_RM_TIPO AS TIPO_REMISION,
              DOCUMENTO_RM AS NUM_REMISION
          FROM
              `BD_BIABLE01`.`CMMOVIMIENTO_VENTAS` AS VEN
                  LEFT JOIN
              ITEMS AS IT ON VEN.ID_ITEM = IT.ID_ITEM
                  LEFT JOIN
              LINEAS AS LI ON IT.ID_LINEA=LI.ID_LINEA AND LI.ID_TIPO="1"
          WHERE
              LAPSO_DOC > '201805' AND DOC_RM_TIPO<>"DV";
        </div>
        <div class="col-6 text-center">
          <h1>Informe 4</h1>
          
        </div>
      </div>
      <div class="row">
        <div class="col-6 text-center"><h1>Informe 5</h1></div>
        <div class="col-6 text-center"><h1>Informe 6</h1></div>
      </div>
      <div class="row">
        <div class="col-6">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-6">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div id="grafica01" style="width:100%; height:400px;"></div>
        </div>
        <div class="col-6">
          <div id="grafica02" style="width:100%; height:400px;"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div id="grafica03" style="width:100%; height:400px;"></div>
        </div>
        <div class="col-6">
          <div id="grafica04" style="width:100%; height:400px;"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div id="grafica05" style="width:100%; height:400px;"></div>
        </div>
        <div class="col-6">
          <div id="grafica06" style="width:100%; height:400px;"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div id="grafica07" style="width:100%; height:400px;"></div>
        </div>
        <div class="col-6">
          <div id="grafica08" style="width:100%; height:400px;"></div>
        </div>
      </div> -->
      <div class="">
        Formulario
      </div>
      <div class="table-responsive">
      <table id="table_id" class="table table-sm table-striped display">
        <thead>
        <tr>
          <th>Zona</th>
          <th>Descripción</th>
          <th>Línea</th>
          <th>Código</th>
          <th>Sucursal</th>
          <th>Nombre_Cliente</th>
          <th>Establecimiento</th> 
          <th>Código</th>
          <th>Nombre_Vendedor</th>
          <th>Ciudad</th>
          <th>Ene-19</th>
          <th>Oct-19</th>
          <th>Nov-19</th>
          <th>Dic-19</th>          
          <th>Ene-20</th>          
          <th>Proyección</th>
          <th>Prom.U3M</th>
          <th>%pPart</th>
          <th>%VarKgVsPpto</th>
          <th>VarKgVsPpto</th>
          <th>VarkgVsMesAnt</th>
           <th>VarkgVsAñoAnt</th> 
        </tr>
        </thead>
        <tbody>
        <?php
        //echo $titulo;
          // foreach ($user_entrys as list($cabecera, $valor))
          // {
          //   echo "{$cabecera} {$valor}";
          //   echo "</br>";
          // }

          // $keys = array_keys($user_entrys);
          // var_dump($keys);

          foreach ($user_entrys as $item)
          {
            echo "<tr>";
            foreach($item as $valor){
              echo    "<td>".$valor."</td>";  
            }
            echo "</tr>";
          }
          //var_dump($user_entrys);
          ?>
        </tbody>
      </table>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">Developer by anRoswell 2019</div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.highcharts.com/highcharts.src.js"></script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/stock/modules/export-data.js"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap/js/funciones.js"></script>
    
    
  </body>
</html>
