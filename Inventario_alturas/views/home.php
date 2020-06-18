<?php include_once('../layouts/header.php'); ?>
<div class="contact-info">
      <div class="card">
        <i class="card-icon fa fa-archive"></i>
        <p>20 Herremientas</p>
      </div>

      <div class="card">
        <i class="card-icon fa fa-address-card"></i>
        <p>Usuarios Registados</p>
      </div>

      <div class="card">
        <i class="card-icon fas fa-map-marker-alt"></i>
        <p>Sena Reginal,Caldas</p>
      </div>
</div>
<div class="skills">
      <div class="skill">
        <div class="skill-name">Herremientas</div>
        <div class="skill-bar">
          <div class="skill-per" per="90"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-name">Categorias</div>
        <div class="skill-bar">
          <div class="skill-per" per="70"></div>
        </div>
      </div>

      <div class="skill">
        <div class="skill-name">Usuarios</div>
        <div class="skill-bar">
          <div class="skill-per" per="60"></div>
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
