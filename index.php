
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


      <h1>Mål</h1>

      <div id="goalcontent">
      <?php  getGoalTitle($connection, 4); ?>

      </div>

    </div>

    <div class="right">



			<h1>Reflektion</h1>

			<div id="reflectioncontent">

				<h2>2016-11-14 Målrubrik</h2>
				<h2>2016-11-14 Målrubrik</h2>
				<h2>2016-11-14 Målrubrik</h2>
				<h2>2016-11-14 Målrubrik</h2>



			</div>


    </div>

    </div>
  </div>

  </body>
</html>
