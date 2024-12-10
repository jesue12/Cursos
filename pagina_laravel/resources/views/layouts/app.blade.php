<!doctype html>
<html>
<head>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      .log {
        width: 15%;
      }
    </style>
  </head>


<body>
  <header><center><img src="/images/LogoF.png" class="log" alt="logo Ferrari"></center></header>
 <!-- <center><img src="/images/LogoF.png"></center>-->
       @yield('content')     <!-- con esto se especifica lo que cambiará -->
     
  <footer></footer> 
</body>
</html>