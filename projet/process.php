<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
<?php
// Assurez-vous que le formulaire a été soumis

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Récupérez les valeurs du formulaire
    $type_article = $_POST["type_article"];
    $bois = $_POST["bois"];
    $dimension1 = $_POST["dimension1"];
    $dimension2 = $_POST["dimension2"];
    $dimension3 = $_POST["dimension3"];

    // Vérification des dimensions
    if (is_numeric($dimension1) && is_numeric($dimension2) && is_numeric($dimension3) &&
        $dimension1 > 0 && $dimension2 > 0 && $dimension3 > 0) {

        // Tableau des prix par type de bois
        $table_bois = array(
            'Bois1' => 120,
            'Bois2' => 110,
            'Bois3' => 75,
            'Bois4' => 80,
            'Bois5' => 90
        );

        // Vérification si le bois existe dans le tableau
        
        foreach ($table_bois as $cle => $valeur){

            if ($bois == $cle){
                // Calcul du prix et de la quantité en fonction du type d'article
                if ($type_article == 'article1'){
                   $calcule = $dimension1 * $dimension2 * $valeur;
                    $quatité = $dimension1 * $dimension2 ; 

                    echo"
                    <h1>Resultat</h1>
                    <div class='contenaire'>
                        <div class='contenaire1'>
                                <h3>Texte</h3>
                                <ul>
                                    <li>Porte en bois: $cle. </li>
                                    <li> Dimension: Hauteur : $dimension1, largeur : $dimension2, Epaissseur : $dimension3.</li>
                                </ul>
                        </div>
                        <div class='contenaire2'>
                                <h3>Prix</h3>
                                <p> $calcule  euros</p>
                        </div>
                        <div class='contenaire3'>
                                <h3>Quantité</h3>
                                <p>$quatité Mettre carré</p>
                        </div>
                    </div>
                    
                    ";
                
                }
                
                else if($type_article == 'article2'){
                    $calcule = $dimension1 * $dimension2 * $valeur;
                    $quatité = $dimension1 * $dimension2 ; 

                    echo"
                    <h1>Resultat</h1>
                    <div class='contenaire'>
                        <div class='contenaire1'>
                                <h3>Texte</h3>
                                <ul>
                                    <li>Etagère en bois : $cle. </li>
                                    <li> Dimension: Largeur : $dimension1, Profondeur : $dimension2, Epaissseur : $dimension3.</li>
                                </ul>
                        </div>
                        <div class='contenaire2'>
                                <h3>Prix</h3>
                                <p> $calcule  euros</p>
                        </div>
                        <div class='contenaire3'>
                                <h3>Quantité</h3>
                                <p>$quatité Mettre carré</p>
                        </div>
                    </div>
                    
                    ";

                    

                    
                }
                else if($type_article == 'article3'){
                    // Calcul pour le cas où dimension2 est inférieur à 1000
                    if ($dimension2 < 1000){
                        $calcule = $dimension1 * $dimension2 * $dimension3 * $valeur * 2;
                        $quatité = $dimension1 * $dimension2 * $dimension3 ;
                        
                        echo"
                        <h1>Resultat</h1>
                            <div class='contenaire'>
                                <div class='contenaire1'>
                                        <h3>Texte</h3>
                                        <ul>
                                            <li>Meuble en bois intérieur  :  $cle  et extérieur :  $cle . </li>
                                            <li> Dimension: Hauteur : $dimension1, largeur : $dimension2, Profondeur : $dimension3.</li>
                                        </ul>
                                </div>
                                <div class='contenaire2'>
                                        <h3>Prix</h3>
                                        <p> $calcule  euros</p>
                                </div>
                                <div class='contenaire3'>
                                        <h3>Quantité</h3>
                                        <p>$quatité Mettre carré</p>
                                </div>
                            </div>
                        
                        ";
                        
                    }
                    else {
                        // Calcul pour le cas où dimension2 est supérieur ou égal à 1000
                        $calcule = $dimension1 * $dimension2 * $dimension3 * $valeur * 3;
                        $quatité = $dimension1 * $dimension2 * $dimension3 ;
                        
                        
                        echo"
                        <h1>Resultat</h1>
                            <div class='contenaire'>
                                <div class='contenaire1'>
                                        <h3>Texte</h3>
                                        <ul>
                                            <li>Meuble en bois intérieur  :  $cle  et extérieur :  $cle . </li>
                                            <li> Dimension: Hauteur : $dimension1, largeur : $dimension2, Profondeur : $dimension3.</li>
                                        </ul>
                                </div>
                                <div class='contenaire2'>
                                        <h3>Prix</h3>
                                        <p> $calcule  euros</p>
                                </div>
                                <div class='contenaire3'>
                                        <h3>Quantité</h3>
                                        <p>$quatité Mettre carré</p>
                                </div>
                            </div>
                        
                        ";
                        
                    }
                    
                }
            }    
        }
        } else {
                    // Message d'erreur si les dimensions ne sont pas valides
            echo "<div class='contenaireF'>
                <h1> ⚠️ Les dimensions doivent être des nombres positifs. ⚠️ <br>
                <p> Faites attention de ne pas saisir des lettres ou des caractères spéciaux.  </p>
            </div>";
        }


    
}


?>
</body>
</html>


