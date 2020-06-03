<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/main.css">
    <link rel="stylesheet" href="../src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/icomoon.css">
    <link rel="stylesheet" href="../src/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  </head>
  <body>
    <header>
      <div class="inner-width">
        <a href="#" class="logo"><img src="../src/img/logo.jpg" alt=""></a>
        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu">
          <a href="#"><i class="fas fa-home home"></i> Home</a>
          <a href="#"><i class="fas fa-archive about"></i> Prestamo</a>
          <a href="#"><i class="fab fa-algolia works"></i> Mantinimiento</a>
          <a href="#"><i class="fas fa-users team"></i> Usuarios</a>
          <a href="#"><i class="fas fa-cog contact"></i> Config</a>
        </nav>
      </div>
    </header>


    <script type="text/javascript">
      $(".menu-toggle-btn").click(function(){
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
      });
    </script>
  </body>
</html>