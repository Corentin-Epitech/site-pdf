<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Site to pdf</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link type="text/css" href="assets/css/style.css" rel="stylesheet" />
</head>

<header class="bg-primary text-blue pb-2">
    <h1 class="container text-white text-uppercase">Générateur de CV
    </h1>
</header>

<body class="">
    <div id="form" class=" form container ">
        <form action="export.php" method="post" class="row">
            <div class="input-bloc shadow-lg col border bg-light ms-3 me-3 gy-3">
                <div class="info container">
                    <div class="row">
                        <h1>Informations général :</h1>
                        <label for="nom">Nom:
                        <input class="nom" id="nom" type="text" name="nom"
                            oninput="document.getElementById('nom-preview').innerHTML = this.value" maxlength="20" required data-errorfieldname="Password">
                            <span class="formError"></span>
                        </label>
                        <label for="prenom">Prénom:</label>
                        <input class="prenom" id="prenom" type="text" name="prenom"
                            oninput="document.getElementById('prenom-preview').innerHTML = this.value" maxlength="20">
                        <label for="title">Intitulé:</label>
                        <input class="title" id="title" type="text" name="title"
                            oninput="document.getElementById('title-preview').innerHTML = this.value" maxlength="30">
                        <label for="mail">Email:</label>
                        <input class="mail" id="mail" type="email" name="mail"
                            oninput="document.getElementById('mail-preview').innerHTML = this.value" maxlength="100"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        <label for="phone">Téléphone:</label>
                        <input class="phone" id="phone" type="tel" name="phone"
                            oninput="document.getElementById('tel-preview').innerHTML = this.value" maxlength="20">
                        <label for="desc">Description:</label>
                        <textarea class="desc" id="desc" name="desc"
                            oninput="document.getElementById('desc-preview').innerHTML = this.value"
                            maxlength="200"></textarea>
                    </div>
                </div>
                <hr>
                <h1>Compétences :</h1>
                <div id="comp" class="competences container" name="competences">
                    <div>
                        <label for="comp-input">Nom :</label>
                        <input name="comp" class="comp" type="text" id="comp-input" maxlength="20">
                        <label for="level">Niveau :</label>
                        <select name="comp" class="comp" id="level">
                            <option value="novice">Novice</option>
                            <option value="intermédiaire">Intermédiaire</option>
                            <option value="confirmé">Confirmé</option>
                            <option value="Expert">Expert</option>
                        </select>
                        <button type="button" id="comp-button" onclick="addComp()">Ajouter</button>
                    </div>
                </div>
                <hr>
                <h1>Expériences professionelles :</h1>
                <div id="experiences" class="exp">
                    <div class="container">

                        <label for="nom-poste-input">Nom :</label>
                        <input class="nom-poste" id="nom-poste-input" type="text" maxlength="35">


                        <label for="nom-entreprise-input">Nom Entreprise :</label>
                        <input class="nom-entreprise" id="nom-entreprise-input" type="text" maxlength="35">


                        <label for="exp-date-input">Date de début :</label>
                        <input class="exp-date col" id="exp-date-input" type="date">

                        <label for="exp-date-fin-input">Date de fin :</label>
                        <input class="exp-date-fin col" id="exp-date-fin-input" type="date">


                        <label for="desc-exp-input">Description expériences :</label>
                        <textarea class="col" id="desc-exp-input" maxlength="200"></textarea>

                        <button id="exp-button" type="button" onclick="addExp()">Ajouter</button>
                    </div>
                </div>
                <hr>
                <div class="formations" id="formations">
                    <h1>Formations :</h1>
                    <div class="container">
                        <label for="nom-formations-input">Nom :</label>
                        <input class="nom-formations" id="nom-formations-input" type="text" maxlength="35">
                        <label for="etab-input">Etablissement :</label>
                        <input class="etab" id="etab-input" type="text" maxlength="35">
                        <label for="form-date-input">Date de début :</label>
                        <input class="form-date" id="form-date-input" type="date">
                        <label for="form-date-fin-input">Date de fin :</label>
                        <input class="form-date-fin" id="form-date-fin-input" type="date">
                        <label for="desc-form-input">Description formation :</label>
                        <textarea class="desc-form" id="desc-form-input" name="forma" id="desc-formation"
                            maxlength="200"></textarea>
                        <button type="button" onclick="addForm()">Ajouter</button>
                    </div>
                </div>
                <button class="submit" onclick="addValue()">Valider</button>
            </div>

            <input type="hidden" name="test" id="hidden-input">

            <div id="preview" class=" shadow-lg col border bg-light ms-3 me-3 gy-3">
                <style>
                    #preview {
                        padding: 0px;
                        width: 594px;
                        height: 841px;
                    }

                    .Basic-info {
                        padding-left: 15px;
                        background-color: gray;
                    }

                    .Basic-info h1 {
                        display: inline-block;
                        font-size: 24px;
                    }

                    .Basic-info h2 {
                        display: inline-block;
                        font-size: 20px;
                    }

                    .Basic-info h3 {
                        display: block;
                        font-size: 18px;
                    }

                    .Basic-info #mail-preview {
                        display: inline-block;
                        font-size: 16px;

                    }

                    .Basic-info #tel-preview {
                        display: inline-block;
                        font-size: 16px;
                    }

                    .Basic-info #desc-preview {
                        display: block;
                        font-size: 16px;
                    }

                    .separateur {
                        margin: 0px;
                    }

                    #preview-comp div {
                        display: inline-block;
                        font-size: 18px;
                        border: 1px solid black;
                        border-radius: 15px;
                        background-color: rgb(5, 102, 102);
                        padding: 5px;
                        margin: 5px;
                    }

                    #preview-comp p {
                        margin: 0px;
                        display: inline-block;
                        font-size: 16px;
                    }

                    #preview-experiences {
                        background-color: gray;
                        
                    }

                    #preview-experiences div {
                        display: inline-block;
                        margin: 5px;
                    }

                    #preview-experiences .title {
                        display: block;
                        font-size: 24px;
                    }

                    #preview-experiences h1 {
                        display: inline-block;
                        font-size: 24px;
                        width: auto;
                    }

                    #preview-experiences h2 {
                        display: inline-block;
                        font-size: 20px;
                        margin-left: 10px;
                    }

                    #preview-experiences h3 {
                        display: block;
                        font-size: 16px;
                    }

                    #preview-experiences p {
                        display: block;
                        font-size: 18px;
                    }



                    #preview-formations div {
                        display: inline-block;
                        margin: 5px;
                    }

                    #preview-formations .title {
                        display: block;
                        font-size: 24px;
                    }

                    #preview-formations h1 {
                        display: inline-block;
                        font-size: 24px;
                        width: auto;
                    }

                    #preview-formations h2 {
                        display: inline-block;
                        font-size: 20px;
                        margin-left: 10px;
                    }

                    #preview-formations h3 {
                        display: block;
                        font-size: 16px;
                    }

                    #preview-formations p {
                        display: block;
                        font-size: 18px;
                    }

                    #preview-comp .title {
                        font-size: 24px;
                    }
                </style>
                <div class="Basic-info">
                    <h1 id="nom-preview"></h1>
                    <h2 id="prenom-preview"></h2>
                    <h3 id="title-preview"></h3>
                    <p id="mail-preview"></p>
                    <p id="tel-preview"></p>
                    <p id="desc-preview"></p>
                </div>
                <hr class="separateur">
                <div id="preview-comp" name="test">
                    <h1 class="title">Compétences:</h1>
                </div>
                <hr>
                <div id="preview-experiences">
                    <h1 class="title">Expériences:</h1>
                </div>
                <hr>
                <div id="preview-formations">
                    <h1 class="title">Formations</h1>
                </div>
            </div>

        </form>
    </div>


    <script src="assets/js/main.js"></script>
</body>

</html>