
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Dérailleur</title>
</head>
<body>
    <h1>Le Dérailleur</h1>
    <p>Texte de Présentation</p>
    <ul>
        <li onclick="aff(1)">L’Association</li>
        <li onclick="aff(2)">Activités</li>
        <li onclick="aff(3)">Photos</li>
        <li onclick="aff(4)">Contact</li>


    </ul>
<div class="" id="content" style="border:1px solid #F1F1F1;" ></div>





    <h2>inspirations </H2>
    <ul>
        <li><a href="https://casabicicleta.org/" target="_blank">https://casabicicleta.org/</a> </li>
        <li><a href="https://atelierso.fr/" target="_blank"> https://atelierso.fr/</a> </li>
        <li><a href="https://cyclocube.org/" target="_blank"> https://cyclocube.org/</a> </li>
        <li><a href="https://solicycle.org/" target="_blank"> https://solicycle.org/</a> </li>
        <li><a href="https://ateliers-alabricole.fr/entretien-de-velo/" target="_blank">https://ateliers-alabricole.fr/entretien-de-velo/</a> </li>
      
    </ul>
</body>
<script>
console.log('test')
function aff(id){
    var text ="";
    switch (id){
        case 1:
            text = "Texte pour le menu Association";
            break;
        case 2:
            text = "Texte pour Activités";
            break;
         case 3:
            text = "Page de photos";
            break;
        case 4:
            text = "Nous contacter :";
            break;

    }
    $_div = document.getElementById("content");
 
    $_div.innerHTML = text
}

</script>
</html>
