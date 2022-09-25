<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
  <script src="assets/js/Cliente.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <br>
          <div class="table-responsive">
            <table class="table" id="tablaDatos" style="width:100%">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">MOTIVO</th>
                  <th scope="col">DESCRIPCION</th>
                  <th scope="col">NOTIFICACION</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php
    include "app/view/MENU/scripts.php";
    ?>
</body>

</html>