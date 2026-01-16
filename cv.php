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
            <form action="export.php" method="post">
            <div class="info">
                <h1>Informations général :</h1>
                <input class="nom" id="nom" type="text" name="nom" oninput="document.getElementById('nom-preview').innerHTML = this.value" maxlength="20">
                <input class="prenom" id="prenom" type="text" name="prenom" oninput="document.getElementById('prenom-preview').innerHTML = this.value" maxlength="20">
                <input class="title" id="title" type="text" name="title" oninput="document.getElementById('title-preview').innerHTML = this.value" maxlength="40">
                <input class="mail" id="mail" type="text" name="mail" oninput="document.getElementById('mail-preview').innerHTML = this.value" maxlength="100">
                <input class="phone" id="phone" type="text" name="phone" oninput="document.getElementById('tel-preview').innerHTML = this.value" maxlength="20">
                <textarea class="desc" id="desc" name="desc" oninput="document.getElementById('desc-preview').innerHTML = this.value" maxlength="400"></textarea>
            </div>
            <h1>Compétences :</h1>
            <div id="comp" class="competences" name="competences">
                <div>
                    <input name="comp[]" class="comp" type="text" id="comp-input" maxlength="20">
                    <select name="comp[]" class="comp" id="level">
                        <option value="novice">Novice</option>
                        <option value="intermédiaire">Intermédiaire</option>
                        <option value="confirmé">Confirmé</option>
                        <option value="Expert">Expert</option>
                    </select>
                    <button type="button" id="comp-button" onclick="addComp()">Ajouter</button>
                </div>
            </div>
            <h1>Expériences professionelles :</h1>
            <div id="experiences" class="exp">
                <div>
                    <input class="nom-poste" id="nom-poste-input" type="text" maxlength="35">
                    <input class="nom-entreprise" id="nom-entreprise-input" type="text" maxlength="35">
                    <input class="exp-date" id="exp-date-input" type="date">
                    <input class="exp-date-fin" id="exp-date-fin-input" type="date">
                    <textarea name="exp" id="desc-exp-input"maxlength="500"></textarea>
                    <button id="exp-button" type="button" onclick="addExp()" >Ajouter</button>
                </div>
            </div>
            
            <div class="formations" id="formations">
                <h1>Formations :</h1>
                <div>
                    <input class="nom-formations" id="nom-formations-input" type="text" maxlength="35">
                    <input class="etab" id="etab-input" type="text" maxlength="35">
                    <input class="form-date" id="form-date-input" type="date">
                    <input class="form-date-fin" id="form-date-fin-input" type="date">
                    <textarea class="desc-form" id="desc-form-input" name="forma" id="desc-formation" maxlength="500"></textarea>
                    <button type="button" onclick="addForm()" >Ajouter</button>
                </div>
            </div>
            <button type="submit">Valider</button>
            </form>
        </div>

        <div id="preview">
            <div class="Basic-info">
                <h1 id="nom-preview"></h1>
                <h2 id="prenom-preview"></h2>
                <h3 id="title-preview"></h3>
                <p id="mail-preview"></p>
                <p id="tel-preview"></p>
                <p id="desc-preview"></p>
            </div>
            <h1>Compétences:</h1>
            <div id="preview-comp" name="test">
            </div>
            <h1>Expériences:</h1>
            <div id="preview-experiences"></div>
            <h1>Formations</h1>
            <div id="preview-formations"></div>
        </div>
        <script src="main.js"></script>

        
    </body>
</html>
