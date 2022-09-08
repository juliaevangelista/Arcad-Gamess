<html>
    <head>
    	<meta charset="utf-8">
        <script type="text/javascript">
            /* FUNÇÃO DE ERROR */
            function error(){
                setTimeout("window.location='home.php'", 2000);
            }

        /* AÇÃO */

            function assassins_creed(){
            setTimeout("window.location='assassins-creed.php'");
            }
            function csgo(){
            setTimeout("window.location='csgo.php'");
            }
            
        /* CORRIDA */

            function the_crew(){
            setTimeout("window.location='the-crew.php'");
            }

                            //RPG//

            function dota_2(){
            setTimeout("window.location='dota.php'");	
            }
        </script>
    </head>
    <body>
        <?php
            $pesq = $_POST['pesq'];
            $pesq = strtolower($pesq);

            switch ($pesq) {


            /* AÇÃO */

                case "assassins creed odyssey":
                    echo '<script>assassins_creed()</script>';
                break;
                case "csgo":
                    echo '<script>csgo()</script>';
                break;

            /* CORRIDA */

                case "the crew 2":
                    echo '<script>the_crew()</script>';
                break;

                            //RPG//

                case "dota 2":
                    echo '<script>dota_2()</script>';
                break;
					
                default:
                    echo '<p>Jogo não encontrado</p>';
                    echo "<script>error()</script>";
            }
        ?>
    </body>
</html>