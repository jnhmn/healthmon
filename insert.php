<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blutdruck Daten</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://root.lan.jnhmn.de/healthmon/">Healthmon</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="insert.html">
                  <span data-feather="file"></span>
                  New Dataset <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>

          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">New Dataset</h1>
          </div>

          <form class="needs-validation" novalidate="" action="submit.php" method="post">



            <div class="mb-3">
              <label for="SYS">SYS <span class="text-muted">(Optional)</span></label>
              <input type="number" class="form-control" name="SYS" id="SYS" placeholder="SYS (mmhg)">
            </div>
            <div class="mb-3">
              <label for="DIA">DIA <span class="text-muted">(Optional)</span></label>
              <input type="number" class="form-control" name="DIA" id="DIA" placeholder="DIA (mmhg)">
            </div>
            <div class="mb-3">
              <label for="PULSE">PULSE <span class="text-muted">(Optional)</span></label>
              <input type="number" class="form-control" name="PULSE" id="PULSE" placeholder="PULSE (/min)">
            </div>
            <div class="mb-3">
              <label for="Date">Date </label>
              <input class="form-control" name="date" id="datepicker" value="<?php echo date("d.m.Y H:i"); ?>">
    <script>
        $('#datepicker').datetimepicker({
            uiLibrary: 'bootstrap4',
            footer: true,
            modal: true,
            value: '<?php echo date("d.m.Y H:i"); ?>',
            format: 'dd.mm.yyyy HH:MM'
        });
    </script>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
            <button class="btn btn-secondary btn-lg btn-block" type="reset">Reset</button>
          </form>
        

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>
</html>

