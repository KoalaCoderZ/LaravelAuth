<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Register</title>
    <link href="assets/plugins/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ruang-admin.min.css" rel="stylesheet">

    <!-- JQuery DatePicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

</head>

<body class="bg-gradient-login">

    <!-- Register Content -->
    <div class="container">
        @yield('register-content')
    </div>

    <!-- Register Content -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="assets/plugins/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/ruang-admin.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type="">
        $(function() {
      $( ".datepicker" ).datepicker();
    });
  </script>

</body>

</html>