
<html>
  <head>

    <?php
      require('assets/php/templates/head.php');
      require('assets/php/functions.php')
    ?>

  </head>
  <body>
    <?php
      require('assets/php/templates/header.php');
    ?>



    <div class="content">
    <div class="left">



      <h1>Mina mål</h1>

      <div id="goalcontent">
      <?php  getGoalTitle($connection, 4); ?>

      </div>

    </div>

    <div class="right">



        <h1>Mål rubrik</h1>
			  <div id="lecturecontent">
        <p>Beskrivning</p><br/>
        <p>Beskrivning 2</p><br/>
        <p>Startdatum</p><p>Slutdatym</p><br/>
      </div>


</div>






			</div>


    </div>

    </div>
  </div>

  <footer>
    <?php
      require('assets/php/templates/footer.php');
    ?>
  </footer>

  </body>
</html>
