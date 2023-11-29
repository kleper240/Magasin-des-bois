// Récupère la valeur du type d'article depuis la liste déroulante
function filtre(params) {
    const t = document.getElementById("type_article").value;
    // Vérifie si le type d'article est 'aucune' pour masquer ou afficher la section de filtrage
    if (t == 'aucune'){
        document.getElementById("filtrage").style.display = "none";

    }
    else {
        document.getElementById("filtrage").style.display = "block";
    }
    // Modifie les libellés des critères en fonction du type d'article sélectionné
    if (t == "article1") {
        document.getElementById("critere1").innerHTML = "Hauteur";
        document.getElementById("critere2").innerHTML = "Largeur";
        document.getElementById("critere3").innerHTML = "Epaissseur";


    }else if (t == "article2") {
        document.getElementById("critere1").innerHTML = "Largeur";
        document.getElementById("critere2").innerHTML = "Pronfondeur";
        document.getElementById("critere3").innerHTML = "Epaissseur";

        
    } else if (t == "article3"){
        document.getElementById("critere1").innerHTML = "Hauteur";
        document.getElementById("critere2").innerHTML = "Largeur";
        document.getElementById("critere3").innerHTML = "Pronfondeur";
        
    } 


    
}