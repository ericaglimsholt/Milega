
<html>
  <head>


<script>
window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 20);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
</script>

    <?php
			require('assets/php/templates/head.php');
		?>

  </head>
  <body>
    <?php
      require('assets/php/templates/header.php');
			require('assets/php/templates/inputgoal.php');
    ?>



<div class="content">
<div class="left">


<h1>Välj bilaga:</h1>
       <div class="lecgoalcontent">

        <div class="first" onclick="smoothScroll(document.getElementById('first'))"><h2>Mina styrkor och utvecklingsområden</h2></div>
        <div class="second" onclick="smoothScroll(document.getElementById('second'))"><h2>Ledarkompetenshjulet</h2></div>
        <div class="third" onclick="smoothScroll(document.getElementById('third'))"><h2>Intra- och interpersonell kommunikation</h2></div>

        <div class="fourth" onclick="smoothScroll(document.getElementById('fourth'))"><h2>Frågeteknik</h2></div>
      </div>





    </div>

    <div class="right">


			  <div class="lecturecontent">
        <h1>Kursmaterial</h1>
        <div class="first" id="first">
        <h3>Mina styrkor och utvecklingsområden</h3>
        <p> Detta är första övningen du gör i att färdigställa målet med ditt ledarskap. Dokumentet kommer att vara levande under hela utbildningen och det är meningen att du skall fylla på allteftersom du tillför mer kunskaper om dig själv och vad du vill göra i din roll som ledare.
        Dag 7 kommer du att inför gruppen kort få redogöra för hur långt ditt arbete med detta kommit. <br/>
         <br/>
        Denna första övning är uppdelad i tre olika moment. I den första individuella övningen reflekterar du över din JTI. I den andra individuella övningen kartlägger du dig själv utifrån ditt uppdrag.<br/>
        <br/>
        Därefter skall du i del 3 dels arbeta med en individuell kompetensprofil  samt – i  anslutning till denna - träffa en person i gruppen som skall ”coacha” dig så att du får feedback på dina specifika kompetensområden. </p>
      </div>
      <div class="second" id="second">
        <h3>Ledarkompetenshjulet</h3>
        <p>Ledarkompetenshjulet (inspirerat av Whitworth m.fl.) är en övning som kan hjälpa dig att tydliggöra balansen mellan olika viktiga kompetensområden i ditt ledarskap.<br/>
        <br/>
        I ledarkompetenshjulet har vi föreslagit några olika områden som är viktiga att arbeta med i ledarskap.  Se hjulets centrum som 0 och den yttre ändan som 10. Gradera din tillfredställelse med varje förmåga på dess område i hjulet och dra en ny linje. Den linjen representerar ditt personliga ledarkompetenshjul.<br/>
        <br/>
        Hur ser det ut? Hur skulle du vilja att det var? Vilket område vill du förändra först ? </p>
</div>
<div class="third" id="third">
        <h3>Intra- och interpersonell kommunikation</h3>
        <p>Kommunikation har två dimensioner; den interpersonella kommunikationen som handlar om mellanmänsklig kommunikation, och den intrapersonella kommunikationen som handlar om kommunikationen inom oss själva. Eftersom alla människor har olika bakgrund så uppfattar vi ord, bilder och uttryck på olika sätt beroende på vilken situation vi är i och därför kan vi kalla den mellanmänskliga kommunikationen för en förhandling mellan oss människor.</p>
</div>
<div class="fourth" id="fourth">
        <h3>Frågeteknik</h3>
        <p>Det finns olika typer av frågor som kan användas för att stimulera olika saker i en dialog. För att få reda på andras åsikter och tankar bör öppna frågor användas. Öppna frågor leder till att motpartens synpunkter dominerar samtalet. Får till följd att denne får plats (utrymme). De öppna frågorna kan också ha som syfte att fokusera på olika saker och hjälper därmed till att strukturera upp samtalet. <br/>
        <br/>
        Exempel på öppna frågor:<br/>
        <br/>
         -”Vad tycker du om...?” <br/>
         -”Hur upplever du...?” <br/>
         -”Hur kommer det sig att...?” <br/>
         -”Vad menar du med...?” <br/>
         -”Hur tänker du då?” <br/>
<br/>
         Exempel på öppna frågor som har ett visst fokus: <br/>
         -”Hur ser du på att projektet ska läggas ner?” <br/>
         -”Vilka fördelar finns det med att...?” <br/>
         -”Vad är viktigt för...?” <br/>
         -”Nu har vi bara pratat om allt som är problematiskt” <br/>
         -”Vilken nytta tillför projektet...?” <br/>
      <br/>
        Slutna frågor och faktafrågor är nödvändiga, men dominans av dessa leder till att samtalet blir torftigt, avhugget och frågetätt. Kan vara nödvändigt särskilt i inledningen av ett samtal. <br/>
<br/>
        Exempel på slutna frågor: <br/>
        -”Vad är klockan?” <br/>
        -”Vilket namn har projektet” <br/>
        -”Hur lång är delkursen?” <br/>
        -”Vilket pris fick du på...?” </p>


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
