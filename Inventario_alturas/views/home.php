<?php include_once('../layouts/header.php'); ?>

<?php
$hostname="localhost";
$username="root";
$password="";
$db = "altura";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
foreach($dbh->query('SELECT COUNT(*) FROM tool') as $row) {
}
foreach($dbh->query('SELECT COUNT(*) FROM categoria') as $rowa) {
}
foreach($dbh->query('SELECT COUNT(*) FROM instructor') as $rowas) {
}
?>

<div class="contact-info">
      <div class="card">
        <i class="card-icon fa fa-archive"></i>
        <p><?php echo "Numero de Herramientas " . $row['COUNT(*)']; ?></p>
      </div>

      <div class="card">
        <i class="card-icon fas fa-folder"></i>
        <p><?php echo "Numero de Categorias " . $rowa['COUNT(*)']; ?></p>
      </div>

      <div class="card">
        <i class="card-icon fas fa-user"></i>
        <p><?php echo "Numero de Instructores " . $rowas['COUNT(*)']; ?></p>
      </div>
</div>
<div class="skills">
      <div class="skill">
        <div class="skill-name">Herramientas</div>
        <div class="skill-bar">
          <div class="skill-per" per=<?php echo $row["COUNT(*)"]; ?>></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-name">Categorias</div>
        <div class="skill-bar">
          <div class="skill-per" per=<?php echo $rowa["COUNT(*)"]; ?>></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-name">Instructores</div>
        <div class="skill-bar">
          <div class="skill-per" per=<?php echo $rowas["COUNT(*)"]; ?>></div>
        </div>
      </div>
    </div>

    <script>
      $('.skill-per').each(function(){
        var $this = $(this);
        var per = $this.attr('per');
        $this.css("width",per+'%');
        $({animatedValue: 0}).animate({animatedValue: per},{
          duration: 1000,
          step: function(){
            $this.attr('per', Math.floor(this.animatedValue) + '%');
          },
          complete: function(){
            $this.attr('per', Math.floor(this.animatedValue) + '%');
          }
        });
      });
    </script>
