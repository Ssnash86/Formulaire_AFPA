<?php
if (isset($_POST['Envoyer'])) {
    $Nom = $_POST["Nom"];
    $Courriel = $_POST["Courriel"];
    $Telephone = $_POST["Telephone"];
    $Genre = $_POST["Genre"];
    $Commentaire = $_POST["Commentaire"];
    $Contact_Pref = $_POST["Contact_Pref"];
    $Lundi = $_POST["Lundi"];
    $Mardi = $_POST["Mardi"];
    $Mercredi = $_POST["Mercredi"];
    $Jeudi = $_POST["Jeudi"];
    $Vendredi = $_POST["Vendredi"];
    $Matin = $_POST["Matin"];
    $Soir = $_POST["Soir"];

    $inF = fopen("compte.txt", "w+");

    fwrite($inF, " Nom et Prénom :  $Nom \r\n Adress Mail :$Courriel \r\n Numéro Téléphone:$Telephone \r\n Genre: $Genre \r\n Commentaire: $Commentaire \r\n Moyen de contact: $Contact_Pref \r\n Jours disponnibles: $Lundi  $Mardi $Mercredi $Jeudi $Vendredi \r\n Moment de Contact: $Matin  $Soir \r\n ");
    header("Location:compte.txt");

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_AFPA</title>
    <link rel="stylesheet" href="formulaire_AFPA.css">

</head>

<body id="Body">

    <main id="Main">
        <section>
            <img src="https://www.afpa.fr/image/layout_set_logo?img_id=34521924&t=1718511863053" alt="Afpa">
        </section>

        <form class="All" action="" method="post">
            <div class="Formulaire_Main">
                <div>
                    <div class="Formulaire">
                        <label for="Nom"></label>
                        <input class="input" type="text" placeholder="Nom-Prénom" name="Nom">

                        <label for="Mail"></label>
                        <input class="input" type="email" placeholder="Courriel" name="Courriel">

                        <label for="Telephone"></label>
                        <input class="input" type="tel" placeholder="Telephone" name="Telephone">

                        <label for="Genre"></label>
                        <select class="input" name="Genre" id="Genre_select">

                            <optgroup label="Vous êtes">
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </optgroup>
                        </select>

                        <label for="Commentaire"></label>
                        <textarea class="input" id="Commentaire" type="textarea" placeholder="Commentaire" name=Commentaire></textarea>
                    </div>

                </div>
                <div class="Formulaire">
                    <h2>Quelle est la meilleur manière de vous contactez ? </h2>
                    <div>
                        <div class="Formulaire">
                            <div>
                                <input type="radio" id="Tel" name="Contact_Pref" value="Tel" />
                                <label for="Tel">Téléphone</label>
                            </div>
                            <div>
                                <input type="radio" id="Courriel" name="Contact_Pref" value="Courriel" />
                                <label for="Courriel">Courriel</label>
                            </div>
                        </div>

                        <h2>Jours de la semaine ou vous êtes disponnible:</h2>

                        <div>
                            <input type="checkbox" id="Lundi" name="Lundi" value="Lundi" checked />
                            <label for="Lundi">Lundi</label>
                        </div>
                        <div>
                            <input type="checkbox" id="Mardi" name="Mardi" value="Mardi" checked />
                            <label for="Mardi">Mardi</label>
                        </div>
                        <div>
                            <input type="checkbox" id="Mercredi" name="Mercredi" value="Mercredi" checked />
                            <label for="Mercredi">Mercredi</label>
                        </div>
                        <div>
                            <input type="checkbox" id="Jeudi" name="Jeudi" value="Jeudi" checked />
                            <label for="Jeudi">Jeudi</label>
                        </div>
                        <div>
                            <input type="checkbox" id="Vendredi" name="Vendredi" value="Vendredi" checked />
                            <label for="Vendredi">Vendredi</label>
                        </div>

                        <h2>Heure appropriée pour un rendez-vous:</h2>
                        <div>
                            <input type="checkbox" id="Matin" name="Matin" value="Matin" checked />
                            <label for="Matin">Matin</label>
                        </div>
                        <div>
                            <input type="checkbox" id="Soir" name="Soir" value="Soir" checked />
                            <label for="Soir">Soir</label>
                        </div>
                    </div>

                </div>
            </div>
            <section class="Bouton">
                <button type="submit" value="Envoyer" name="Envoyer">Envoyer</button>

            </section>

            </section>
        </form>
    </main>
</body>

</html>