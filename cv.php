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
                <input class="nom" type="text" name="nom">
                <input class="prenom" type="text" name="prenom">
                <input class="title" type="text" name="title">
                <input class="mail" type="text" name="mail">
                <input class="phone" type="text" name="phone">
                <textarea class="desc" name="desc"></textarea>
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
                <input class="exp-date" id="exp-date" type="text">
                <input class="exp-date-fin" id="exp-date-fin" type="text">
                <textarea name="exp" id="desc-exp"></textarea>
                <button id="exp-button" type="button" onclick="addExp()" >Ajouter</button>
            </div>
            <div class="formations" id="formations">
                <h1>Formations :</h1>
                <input class="nom-formations" id="nom-formations" type="text">
                <input class="etab" id="etab" type="text">
                <input class="form-date" id="form-date" type="text">
                <input class="form-date-fin" id="form-date-fin" type="text">
                <textarea class="desc-form" id="desc-form" name="forma" id="desc-formation"></textarea>
                <button type="button" onclick="addForm()" >Ajouter</button>
            </div>
            <button type="submit">Valider</button>
            </form>
        </div>
        <script src="main.js"></script>
    </body>
</html>
