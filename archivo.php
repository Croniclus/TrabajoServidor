<html>

<head></head>

<body>
    <?php
       echo "Ejercicio 1";
       echo "<br>";
       echo "<br>";
       $var_hola="hola";
       $var_espacio=" ";
       $var_mundo=" mundo";
       $var_final=$var_hola.$var_espacio.$var_mundo;
       echo $var_final;
       echo "<br>";
       $var_boolean=true;
       echo $var_boolean;
       $var_PI=3.14;
       echo "<br>";
       echo $var_PI;
       echo "<br>";
       $var_array=array("clave1"=>1,
                        "clave2"=>2,
                        "clave3"=>3);
        echo $var_array["clave1"];
        echo "<br>";
        echo $var_array["clave2"];
        echo "<br>";
        echo $var_array["clave3"];
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo "Ejercicio 2";
        $var_boolean=false;
        echo $var_boolean;
        echo "<br>";
        echo "No sale nada ya que False en boolean se muestra como ausencia o vacio.";
        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo "Ejercicio 3";
        echo "<br>";
        $var_final=str_replace(" ", "", $var_final);
        echo $var_final;
        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo "Ejercicio 4";
        echo "<br>";
        $var_cadena="El operador \"+\" sirve para sumar el valor de variables. Con la \"/\" podemos
        dividir valores entre variables. El símbolo del dólar \"$\" indica que estamos
        utilizando variables pero no lo usaremos en las constantes o globales. (1
        punto)";
        echo $var_cadena;
        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo "Ejercicio 5";
        echo "<br>";
        $var_cantidad = strlen($var_cadena);
        echo $var_cantidad;
        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo "Ejercicio 6";
        echo "<br>";
        $var_cadena=strtolower($var_cadena);
        $var_cadena=str_replace("a", "", $var_cadena);
        $var_cadena=str_replace("e", "", $var_cadena);
        $var_cadena=str_replace("i", "", $var_cadena);
        $var_cadena=str_replace("o", "", $var_cadena);
        $var_cadena=str_replace("u", "", $var_cadena);
        echo $var_cadena;
        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo "Ejercicio 7";
        echo "<br>";
        $var_vacia="";
        $var_comprobarVacia;
        $var_comprobarVacia = empty($var_vacia);
        echo $var_comprobarVacia;
        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo "Ejercicio 8";
        echo "<br>";
        $var_casteo="Hola mundo";
        $var_casteo=intval($var_casteo);
        echo $var_casteo;
        echo "<br>";
        echo "Sale ser porque PHP intenta analizar la cadena como un numero y no tener caracteres numericos se considera 0 su valor";
        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo "Ejercicio 9";
        echo "<br>";
        $var_raiz=sqrt(144);
        echo $var_raiz;
        echo "<br>";
        $var_potencia=pow(2,8);
        echo $var_potencia;
        echo "<br>";
        $var_resto=100%6;
        echo $var_resto;
        echo "<br>";

        $var_n1 = 3;
        $var_n2 = 6;
        $divisores_n1=array();
        $divisores_n2=array();
        if($var_n1<$var_n2){
            for($i=1; $i<=$var_n1;$i++){
                if($var_n1 % $i == 0){
                    array_push($divisores_n1,$i);
                }
            }
        }else{
            for($i=1; $i<$var_n1;$i++){
                if($var_n1 % $i == 0){
                    array_push($divisores_n1,$i);
                }
            }
        }
        if($var_n2<$var_n1){
            for($i=1; $i<=$var_n2;$i++){
                if($var_n2 % $i == 0){
                    array_push($divisores_n2,$i);
                }
            }
        }else{
            for($i=1; $i<$var_n2;$i++){
                if($var_n2 % $i == 0){
                    array_push($divisores_n2,$i);
                }
            }
        }
        print_r($divisores_n1);
        print_r($divisores_n2);
        $var_delimitador=0;
        /*if(sizeof($divisores_n1)<sizeof($divisores_n2)){
            $var_delimitador=sizeof($divisores_n2);
        }else{
            $var_delimitador=sizeof($divisores_n1);
        }*/
        $var_mcd=0;
        for($i=0;$i<sizeof($divisores_n1);$i++){
            for($x=0;$x<sizeof($divisores_n2);$x++){
                if($divisores_n1[$i]==$divisores_n2[$x]){
                    $var_mcd=$divisores_n1[$i]; 
                    $x=sizeof($divisores_n2);
                }
            }
        }
        echo "<br>";
        echo $var_mcd;
    ?>
</body>

</html>