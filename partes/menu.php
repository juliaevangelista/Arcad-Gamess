<?php include('verifica_login.php');?>
<nav>
  <div class="container">
    <ul>
      <li><a href="home.php"><img src="img/icons/home.png"></a></li>
      <li> <a href="#">Ação<i class='fa fa-angle-down'></i></a>
        <ul>
          <li><a href="assassins-creed.php">Assassin's Creed Odyssey</a></li>
          <li><a href="csgo.php">CS:GO</a></li>
          <li><a href="#">Endless Space 2</a></li>
          <li><a href="#">Deep Rock Galactic</a></li>
          <li><a href="#">GTA V</a></li>
          <li><a href="#">Grim Dawn</a></li>
          <li><a href="#">Team Fortress 2</a></li>
          <li><a href="#">Xera Survival</a></li>
          <li><a href="#">Invitation</a></li>
        </ul>
      </li>
      <li class='sub-menu'> <a href="#">Corrida<i class='fa fa-angle-down'></i></a>
        <ul>
          <li><a href="the-crew.php">The Crew 2</a></li>
          <li><a href="#">Need For Speed Shift</a></li>
          <li><a href="#">Grid 2</a></li>
          <li><a href="#">Motorsport Manager</a></li>
          <li><a href="#">Moto Racer Collection</a></li>
          <li><a href="#">Reflex MX vs ATV</a></li>
          <li><a href="#">MXGP 3</a></li>
          <li><a href="#">Mad Max</a></li>
          <li><a href="#">Dirt Rally</a></li>
        </ul>
      </li>
      <li class='sub-menu'> <a href="#">RPG<i class='fa fa-angle-down'></i></a>
        <ul>
          <li><a href="dota.php">Dota 2</a></li>
          <li><a href="#">League Of Legends</a></li>
          <li><a href="#">Smite</a></li>
          <li><a href="#">Path Of Exile</a></li>
          <li><a href="#">The Witcher Wild Hunt</a></li>
          <li><a href="#">Prey For The Gods</a></li>
          <li><a href="#">Conan Exiles</a></li>
          <li><a href="#">Monster Hunter World</a></li>
          <li><a href="#">Crypt Hunner</a></li>
        </ul>
      </li>
      <div class="user" onclick="document.getElementById('id01').style.display='block'">
        <li class="sair"><a href="logout.php">Sair</a></li>
      </div>
    </ul>
  </div>
</nav>
<div class="jquery-script-ads" style="margin-top:50px" align="center"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script>
$('nav li').hover(
  function() {
	  $('ul', this).stop().slideDown(200);
  },
	function() {
    $('ul', this).stop().slideUp(200);
  }
);
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>