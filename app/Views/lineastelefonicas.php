<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Linea Telefónica</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo base_url ('/');?>">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
    
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ci Telefonia
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php echo base_url ('ver_clientes');?>">Clientes</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url ('ver_lineatelefonica');?>">Linea Telefónica</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url ('ver_planes');?>">Planes</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <table class="table table-border table-striped">
        <thead>
            <tr>
                <th>Número de Teléfono</th>
                <th>Fecha de Pago </th>
                <th>Meses Atrasados</th>
                <th>Id de Planes</th>
                <th>Id de Clientes</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datos as $lineastelefonicas):
                    
            ?>
            <tr>
                <td><?php echo $lineastelefonicas['no_telefono'];?></td>
                <td><?php echo $lineastelefonicas['fecha_pago'];?></td>
                <td><?php echo $lineastelefonicas['meses_atraso'];?></td>
                <td><?php echo $lineastelefonicas['plan_id'];?></td>
                <td><?php echo $lineastelefonicas['cliente_id'];?></td>               
            </tr>
            <?php 
                endforeach;
            ?>
        </tbody>
    </table>
   </div> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>