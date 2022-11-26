
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
    <title>Le Dérailleur</title>
</head>
<body>
    <div class="lg:content-auto">
    <h1 class=" md:mr-auto md:ml-4 md:py-1 md:pl-4 text-3xl font-bold underline text-center" >Le Dérailleur</h1>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 	flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" onclick="aff(1)">L’Association</a>
      <a class="mr-5 hover:text-gray-900" onclick="aff(2)">Activités</a>
      <a class="mr-5 hover:text-gray-900" onclick="aff(3)">Photos</a>
      <a class="mr-5 hover:text-gray-900" onclick="aff(4)">Contact</a>
      
    </nav>
    <p>Texte de Présentation</p>
    
<div class="" id="content" style="border:1px solid #F1F1F1;" ></div>


</div>


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
