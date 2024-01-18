<?php
/*
 * provincias.php
 * 
 * Copyright 2017 ESPE <ESPE@LAPTOP_DELL>
 
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title> TALLER CUBOS</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.31" />
	<style>
        #boton-menu {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: yellowgreen;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #boton-menu:hover {
            background-color: #2980b9;
        }

		form {
            margin: 10px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: inline-block;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="continente">Continentes:</label>
    <select id="continente" name="continente">
        <option value="AMERICA">AMERICA</option>
        <option value="EUROPA">EUROPA</option>
        <option value="AFRICA">AFRICA</option>
        <option value="ASIA">ASIA</option>
        <option value="OCEANIA">OCEANIA</option>
    </select>
    <input type="submit" value="Mostrar">
</form>


<?php
	
	include "./Continentes/America.php";
	include "./Continentes/Europa.php";
	include "./Continentes/Africa.php";
	include "./Continentes/Asia.php";
	include "./Continentes/Oceania.php";
	
	      
// MATRICES ASOCIATIVAS	             
	 $titulo = ["AMERICA","EUROPA","AFRICA","ASIA","OCEANIA"];
	 $Cubos = [$America,$Europa,$Africa,$Asia,$Oceania];
					   
	 if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $continenteElegido = $_POST["continente"];
        $indiceContinente = array_search($continenteElegido, $titulo);
        
        if ($indiceContinente !== false && isset($Cubos[$indiceContinente])) {
            $Pais = $Cubos[$indiceContinente];
            $html = '<h1>' . $continenteElegido . '</h1>';
            
            foreach ($Pais as $cara=>$info){        
                $html .='
                    <table border=1>
                    <tr>';
                            
                $maxColum=null;
                foreach($info as $prov=>$arreglo) {
                    $tam=count($info[$prov]);
                    $maxColum=($maxColum >= $tam) ? $maxColum : $tam;
                }
                
				$html.=' <tr>  
				<th style="background-color: salmon;" colspan=" ' . $maxColum . '"> ' . $cara . ' </th>
				</tr>';
				
	  		 	foreach($info as $prov=>$arreglo){
		 		  $html.="<th> $prov </th>"; 
	  		 	}
   
	   			//IMPRIMIR LA TABLA EN HTML 
	   			for($f=0;$f < $maxColum; $f++){
		  		$html.='<tr>';
		  			 foreach($info as $data){
			  		 $bgColor = (isset($data[$f])) ? '#D6FAF2' : '#85C1E9';
			  		 $html .= '<td bgcolor="' . $bgColor . '">' . (isset($data[$f]) ? $data[$f] : '&nbsp;') . '</td>';     
		   			}
		   		$html.='</tr>';
	   			}  
                
                $html .= "</table>"; 
                $html .= "<br> <br>";
            }  
            echo $html;
        } else {
            echo "Error: Continente no encontrado.";
        }
    }
?>     
                  
<button id="boton-menu" onclick="window.location.href='../index.html'">Menú Principal</button>
</body>

</html>