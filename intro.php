<!DOCTYPE html>
<html>
	<head>
		
	</head>
	
	<body>
		<!-- Declarando Variaveis -->
         <?php 
            $x = 10;
            $y = 5.0;
            $nome = "Pedro Yoshikado Garcia";
            echo $x;
            echo "<br>" . $x . " Seloco mano " . $nome . "<br>";
            
            var_dump ($x);
            echo "<br>";
            var_dump ($y);
            echo "<br>";
            var_dump ($nome);

            echo "<br>";
            echo $x + $y;
            
            echo "<br>";
            var_dump(5);
            echo "<br>";
            var_dump("Elias");
            echo "<br>";
            var_dump(3.14);
            echo "<br>";
            var_dump(true);
            echo "<br>";
            var_dump([2,3,5,6]);
            echo "<br>";
            var_dump(null);
            
            echo "<br>";
            $vetor = array();

            array_push($vetor, "Limão", "Banana");

            echo "<br>";
            var_dump($vetor);
            echo "<br>";
            print_r($vetor);

         ?>
	</body>
</html>
