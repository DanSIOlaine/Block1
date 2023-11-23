<!DOCTYPE html>
<html lang="fr">
<head>


</head>

<body>
    


    <?php
        $a=[1,2,3,4,"Bonjour"];
        echo count($a). "éléments dans a";
        foreach ($a as $index=>$value){
            echo "<br>$value a la position $index";
        }
            
        for($i=0;$i<count($a);$i++){
            echo "<br>.$a[$i].a la position .$i";
        }




    ?>













</body> 



  

?>
