<!DOCTYPE html>
<!-- HEY ! Demat jeune développeur ! Je vois que tu accèdes au Code du site de l'Empire Breton ! Saches que tu peux tout à fait utiliser des éléments de ce site à ton goût pour ton propre projet, à condition de ne pas recopier à la lettre pour recrééer exactement le même site. Si tu veux me contacter viens sur le Discord de l'Empire Breton ou contacte moi sur Discord @gaelBZH#0060 ou sur Twitter @gaelBZH42 ! Même pour me dire qu'au moins une personne aura lu ce Message xD. -->
<html lang="fr">
<head>
    <meta charset="UTF-8"> <!--Encodage UTF-8-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff - Empire Breton</title> <!--Titre de la Page-->
    <link rel="stylesheet" href="Staff/Staff.css"> <!--Feuille de Style CSS-->
    <link rel="stylesheet" href="StyleBoutons.css"> <!--Feuille de Style CSS-->
    <link rel="icon" href="Images/Icone.png"> <!--Icône du Site-->
    <script>function passwordshow() {
        let x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      function verifiermdp(){
        let x = document.getElementById("password");
        let y = document.getElementById("boutonacces");
        x.style.color = "white";
        if (x.value === "motdepassessb") {
            x.style.backgroundColor = "green";
            y.disabled = false;
        } else {
          x.style.backgroundColor = "red";
          y.disabled = true;
        }
      }</script>
</head>
<body>
    <h1><table style="margin: auto;"><tbody><tr>
        <td class="dixpourcent"></td>
        <td id="TitrePrincipal">Liste des Membres du Staff</td>
        <td class="dixpourcent"><a href="index.html" class="BoutonViolet" style="float: right;">Menu Principal</a></td>
    </tr></tbody></table></h1>
    <h2><i>Bienvenue en Bretagne • Degemer mat e Breizh</i></h2>
    
    <label for="pass">Password :</label><br>
    <input type="password" id="password" name="MotDePasse" onchange="verifiermdp()"><button onclick="php()" id="boutonacces" href="index" disabled>Accéder au Site SSB</button><br>
    <input type="checkbox" onclick="<php include ('script.php '); ?>">Show Password<br>
    

    <!--Liens Utiles-->
    <div id="LiensUtiles">
        <p class="TitrePartie"><u>Liens Utiles :</u></p>

        <table><tbody><tr>
            <td class="Tiers">
                <ul>
                    <li>Questionnaire de Satisfaction : <a href="QuestionnaireDeSatisfaction.html"><i>QuestionnaireDeSatisfaction.html</i></a></li>
                    <li>Site Web de l'Empire Breton : <a  href="https://gaelbzh.github.io"><i>gaelbzh.github.io</i></a></li>
                    <li>Notre Serveur Discord <a href="https://discord.gg/Zaw7bB2bnj"><i>discord.gg</i></a></li>
                </ul>    
            </td>
            <td class="DeuxTiers">
                <img src="Images/Flamme.png" alt="Flamme Ducale Bretonne" id="Flamme">
            </td>
        </tr></tbody></table>
    </div>

    <!--Barre du Bas-->
    <div id="BarreDuBas">
        <a href="https://discord.gg/Zaw7bB2bnj" style="color:white;  text-decoration: none;">
        © <script>document.write(new Date().getFullYear());</script> Empire Breton
        </a>
    </div>
    <!--Barre du Bas-->
</body>
</html>