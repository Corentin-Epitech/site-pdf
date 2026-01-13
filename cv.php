<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Site to pdf</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div id="form" class="form">
            <form action="">
            <div class="info">
                <h1>Informations général :</h1>
                <input class="nom" id="nom" type="text" name="nom" oninput="document.getElementById('nom-preview').innerHTML = this.value">
                <input class="prenom" id="prenom" type="text" name="prenom" oninput="document.getElementById('prenom-preview').innerHTML = this.value">
                <input class="title" id="title" type="text" name="title" oninput="document.getElementById('title-preview').innerHTML = this.value">
                <input class="mail" id="mail" type="text" name="mail" oninput="document.getElementById('mail-preview').innerHTML = this.value">
                <input class="phone" id="phone" type="text" name="phone" oninput="document.getElementById('tel-preview').innerHTML = this.value">
                <textarea class="desc" id="desc" name="desc" oninput="document.getElementById('desc-preview').innerHTML = this.value"></textarea>
            </div>
            <div id="comp" class="competences">
                <h1>Compétences :</h1>
                <input class="comp" type="text" id="comp-input" required>
                <button type="button" id="comp-button" onclick="addComp()">Ajouter</button>
            </div>
            <div id="experiences" class="exp">
                <h1>Expériences professionelles :</h1>
                <input class="nom-poste" id="nom-poste" type="text">
                <input class="nom-entreprise" id="nom-entreprise" type="text">
                <input class="exp-date" id="exp-date" type="date">
                <input class="exp-date-fin" id="exp-date-fin" type="date">
                <textarea name="exp" id="desc-exp"></textarea>
                <button id="exp-button" type="button" onclick="addExp()" >Ajouter</button>
            </div>
            <div class="formations" id="formations">
                <h1>Formations :</h1>
                <input class="nom-formations" id="nom-formations" type="text">
                <input class="etab" id="etab" type="text">
                <input class="form-date" id="form-date" type="date">
                <input class="form-date-fin" id="form-date-fin" type="date">
                <textarea class="desc-form" id="desc-form" name="forma" id="desc-formation"></textarea>
                <button type="button" onclick="addForm()" >Ajouter</button>
            </div>
            <button type="submit">Valider</button>
            </form>
        </div>


        <div id="preview">
            <h1 id="nom-preview"></h1>
            <h2 id="prenom-preview"></h2>
            <h3 id="title-preview"></h3>
            <p id="mail-preview"></p>
            <p id="tel-preview"></p>
            <p id="desc-preview"></p>
        </div>
        <script src="main.js"></script>

        
    </body>
</html>
