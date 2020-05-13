<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Confites Nani -  @yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="icon" href="img/logo.png">
  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Sanchez&display=swap" rel="stylesheet">
  
  <script src="https://kit.fontawesome.com/316e317fa5.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- Navigation -->
    @include('layout.navbar')
    <!-- End of Navigation -->

  <!-- Page Content -->

    @yield('content')

  <!-- /.container -->

  
    <!-- Footer -->
    @include('layout.footer')
    <!-- End of Footer -->


  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  

</body>

</html>
