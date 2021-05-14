<?php
    // require 'vendor/autoload.php';
?>
<!DOCTYPE html "http://www.w3.org/TR/html4/loose.dtd">
<html lang=pt-br>
    <head>

        <meta http-equiv="Content-Type" content="text/html"/>
        <title>Lets ganhar na Lotofácil</title>
        <meta charset="UTF-8">
        <meta name="description" content="Loto Fácil"/>
        <meta name="keywords" content="Loto Fácil"/>
        <meta name="author" content="TiFlux - Gestão de TI"/>
        <link href="https://www.tiflux.com.br<?php echo '/'.$the_key;?>" rel="canonical" />

        <link rel="canonical" href="https://www.tiflux.com.br<?php echo '/'.$the_key;?>" hreflang="x-default" />
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="max-age=604800, public">


        <META NAME="ROBOTS" CONTENT="INDEX"/>
    </head>
    <body>
        <style>
            .active{background-color: green; color: white;}
        </style>
        <script>
            function percentIdentify(){
                var e = document.getElementById("PatternDate");
                var patternDate = e.options[e.selectedIndex].value;

                var b = document.getElementById("quantityDistance");
                var quantityDistance = b.options[b.selectedIndex].value;

                var url = "http://gabrielfemello.com.br/home-calculator.php";

                url += '?patternDate='+patternDate+'&quantityDistance='+quantityDistance;;

                plays_number = document.getElementById("PlaysNumber").value;
                number_1 = document.getElementById("first_number").value;
                number_2 = document.getElementById("seccond_number").value;
                number_3 = document.getElementById("third_number").value;
                number_4 = document.getElementById("fourth_number").value;
                number_5 = document.getElementById("fifth_number").value;

                part_1 = "&plays_number="+plays_number;
                part_2 = "&number_1="+number_1;
                part_3 = "&number_2="+number_2;
                part_4 = "&number_3="+number_3;
                part_5 = "&number_4="+number_4;
                part_6 = "&number_5="+number_5;

                url += '&'+part_1+part_2+part_3+part_4+part_5+part_6;

                window.location.href = url;

            };
        </script>

        <?php
            $fullNumber = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25);

            require_once('resultados-anteriores.php')

            $my_pattern_check = end($lastCheck);
            $my_pattern_check_key = key($lastCheck);
            $distance = 20;

            $responserList = 5;

            $myListReduce = array();
            $myListReduce[0] = 2;
            $myListReduce[1] = 8;
            $myListReduce[2] = 11;
            $myListReduce[3] = 21;
            $myListReduce[4] = 22;

            if (isset($_REQUEST['plays_number'])){
                $responserList = $_REQUEST['plays_number'];
                $myListReduce[0] = $_REQUEST['number_1'];
                $myListReduce[1] = $_REQUEST['number_2'];
                $myListReduce[2] = $_REQUEST['number_3'];
                $myListReduce[3] = $_REQUEST['number_4'];
                $myListReduce[4] = $_REQUEST['number_5'];


                $my_pattern_check_key = $_REQUEST['patternDate'];
                $distance = $_REQUEST['quantityDistance'];
            }
        ?>

        <?php require_once('filtro-analise-porcentagens.php') ?>
        <?php require_once('lista-de-resultados.php') ?>
        <?php require_once('home-calculator.php') ?>

        <script>
            function setNumberCause() {

                const demoClasses = document.querySelectorAll(".momentum");
                demoClasses.forEach(element => {element.classList.remove('active');});


            }
        </script>
        <div id="MyStyle">
        </div>


        <script src="/__/firebase/8.6.1/firebase-app.js"></script>
        <script src="/__/firebase/8.6.1/firebase-analytics.js"></script>
        <script src="/__/firebase/init.js"></script>
    </body>
</html>