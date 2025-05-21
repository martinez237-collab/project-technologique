<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'inscription</title>
</head>
<link rel="stylesheet" href="formulaire.css">
<body>
    <div class="forme">
        <form action="" method="get">
            <h1 style="text-align: center;">login</h1>
            <div>
               <label for="Genre"></label>
               <input type="radio" name="radiogenre" id="chk"><label for="chk">Homme</label>
               <input type="radio" name="radiogenre" id="chf"><label for="chf">Femme</label>
               <input type="radio" name="radiogenre" id="chg"><label for="chg">indifferent</label>
            </div>
            <div>
               <label for="chnom">Nom:</label>
               <input type="text" id="chnom" name="champnom" required>
            </div>
            <div>
               <label for="chprenom">Prenom :</label>
               <input type="text" name="champrenom" id="chprenom" required>
            </div>
            <div>
               <label for="chdatenaissance"> date de naissance</label>
               <input type="date" id="chdatenaissance" name="champdate" required>
            </div>
            <div>
               <label for="chemail">E-mail</label>
               <input type="text" id="chemail" name="champemail" required>
            </div>
            <div>
               <label for="chnombre">nombre d'accompagnants</label>
               <input type="number" id="chnombre" name="champnombre" required>
            </div>
            <div class="h2">
               <h2>preferences de jeux</h2>
               <label for="ch1">Monopoly 💰</label> <input type="checkbox" name="champc1" id="ch1">
               <label for="ch2">Uno 🎴</label>
               <input type="checkbox" name="champc3" id="ch3"><label for="ch3">Catan 🌍</label><input type="checkbox" name="champc2" id="ch2">
            </div>
            <div class="btn2">
               <label for="champnationalite">Nationalite</label>
              <select name="chnationalite" id="champnationalite">
               <option value="0">France</option>
               <option value="1">Beligue</option>
               <option value="2">Suise</option>
               <option value="3">Espagne</option>
               <option value="4">Allemagne</option>
               <option value="5">Cameroun</option>
               <option value="6">Cote d'ivoire</option>
               <option value="7">Sengal</option>
               <option value="8">Mali</option>
               <option value="9">Congo</option>
               <option value="15">Tchad</option>
               <option value="16">Burkina-Faso</option>
               <option value="10">Etats-unis</option>
               <option value="11">canada</option>
               <option value="12">cuba</option>
               <option value="13">Agentine</option>
               <option value="14">Bresil</option>
              </select>
            </div>
            <div class="btn1">
               <button type="submit" >Valider</button>
            </div>
       
           </form>
    </div>
       
   
</body>
</html>