
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



			<h1>Resultat</h1>

			<div id="reflectioncontent">


				<div id="chart" class="ct-chart ct-perfect-fourth"></div>

				<img src="../../images/piechart.png" id="piechart" />



			</div>


    </div>

    </div>
  </div>

  <script src="/assets/js/bower_components/chartist/dist/chartist.min.js"></script>

<footer>
  <?php
    require('assets/php/templates/footer.php');
  ?>
</footer>


  </body>
</html>
