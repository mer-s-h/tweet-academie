<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="/ressources/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;1,300&family=Roboto+Mono:ital,wght@0,200;1,100&family=Roboto+Slab:wght@200;300&family=Roboto:ital,wght@0,300;1,100;1,300&display=swap" rel="stylesheet">
    <title>Twitter</title>
</head>

<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" id="mod">
                <div class="modal-body" id="modBody">
                    <img src="/ressources/images/kitty.png" alt="icon twitter">
                    <br>
                    <h4>Créer votre compte</h4>
                    <br>
                    <form id="signUp" action="" method="">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="prenom" placeholder="name@example.com">
                            <label class="label" for="floatingInput">Prenom</label>
                        </div>
                        <div style="display:none" id="alert-prenom" class="alert alert-danger" role="alert"></div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput2" name="nom" placeholder="name@example.com">
                            <label class="label" for="floatingInput2">Nom</label>
                        </div>
                        <div style="display:none" id="alert-nom" class="alert alert-danger" role="alert"></div>

                        <div id="telUse" class="form-floating mb-3">
                            <input type="tel" class="form-control" id="floatingInput3" name="telephone" placeholder="name@example.com">
                            <label class="label" for="floatingInput3">Telephone</label>
                        </div>
                        <div style="display:none" id="alert-telephone" class="alert alert-danger" role="alert"></div>

                        <div id="emailUse" class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput4" name="email" placeholder="name@example.com">
                            <label class="label" for="floatingInput4">Adresse Email</label>
                        </div>
                        <div style="display:none" id="alert-email" class="alert alert-danger" role="alert"></div>

                        <div id="pass" class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingInput5" name="password">
                            <label class="label" for="floatingInput5">mot de passe</label>
                        </div>
                        <div style="display:none" id="alert-password" class="alert alert-danger" role="alert"></div>

                        <div id="confirmpass" class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingInput6" name="confirm">
                            <label class="label" for="floatingInput6">Confirmez votre mot de passe</label>
                        </div>
                        <div style="display:none" id="alert-confirm" class="alert alert-danger" role="alert"></div>

                        <br>
                        <p><strong>Date de naissance</strong></p>
                        <p>Cette information ne sera pas affichée publiquement. Confirmez votre âge, même si ce compte est pour une entreprise, un animal de compagnie ou autre chose.</p>
                        <div id="birthday">
                            <select id="day" name="jour" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Jour</option>
                                <?php
                                $jour = 1;
                                for ($i = 0; $i < 31; $i++) {
                                    echo "<option value='{$jour}'>{$jour}</option>";
                                    $jour++;
                                }
                                ?>

                            </select>
                            <select id="month" name="mois" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Mois</option>
                                <option value="01">Janvier</option>
                                <option value="02">Fevrier</option>
                                <option value="03">Mars</option>
                                <option value="04">Avril</option>
                                <option value="05">Mai</option>
                                <option value="06">Juin</option>
                                <option value="07">Juillet</option>
                                <option value="08">Aout</option>
                                <option value="09">Septembre</option>
                                <option value="10">Octobre</option>
                                <option value="11">Novembre</option>
                                <option value="12">Decembre</option>
                            </select>
                            <select id="year" name="annee" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Année</option>
                                <?php
                                $date = 2021;
                                for ($i = 0; $i < 100; $i++) {
                                    echo "<option value='{$date}'>{$date}</option>";
                                    $date = $date - 1;
                                }
                                ?>
                            </select>
                            <br>
                        </div>
                        <br>
                        <button type="submit" id="submit" class="btn btn-primary">Suivant</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col">
                <img src="/ressources/images/cats.jpeg" alt="twitter">
            </div>

            <div class="col marg">

                <div class="pad">
                    <img src="/ressources/images/kitty.png" alt="icon twitter">
                    <div class="title">
                        <h1 class="pad">Ça se passe maintenant</h1>
                        <h2>Rejoignez Twitter dès maintenant.</h2>
                    </div>

                    <div class="inscription">
                        <div class="signUp">
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">S'inscrire</a>
                        </div>
                        <div class="logIn">
                            <a href="#">Se connecter</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer>

            <span>©2021</span>

        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="modal.js"></script>
        <script src="ajax.js"></script>

</body>

</html>