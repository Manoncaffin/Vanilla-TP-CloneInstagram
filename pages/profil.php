<?php
require_once('../process/database.php');
$request = $database->query('SELECT * FROM user ORDER BY id DESC');
$allUsers = $request->fetchAll();

// var_dump($_GET['pseudo']);

include_once('../process/result_research.php');

// var_dump($allUsers);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../styles.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="row d-flex">

            <div class="blockInsta col-4 col-lg-3 p-5">
                <div class="d-flex justify-content-start">
                    <h1 class="text center">Instagram</h1>
                </div>

                <div class="pt-5">
                    <p class="text-black">Accueil</p>
                    <br>
                    <form action="../process/file_send.php" method="POST" enctype="multipart/form-data">
                        <label for="file">Créer</label>
                        <br>
                        <br>
                        <input type="file" name="file">
                        <br>
                        <br>
                        <button class="btn btn-outline-danger" type="submit">Enregistrer</button>
                        <button class="btn btn-outline-danger" type="submit">Enregistrer</button>
                        <br>
                        <br>
                    </form>
                    <a href="../pages/index.php" class="text-decoration-none text-black">Profil</a>
                    <br>
                    <br>
                    <a href="../pages/user_connect.php" class="text-decoration-none text-black">Se déconnecter</a>
                    <br>
                    <br>
                    <form method="POST" class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Rechercher" name="pseudo">
                        <button class="btn btn-outline-danger" type="submit">Rechercher</button>
                    </form>
                    <br>
                    <br>
                    <!-- boucle pour trouver un utilisateur dans la barre de recherche (+ code php en haut de la page + code result_research.php) -->
                    <?php foreach ($allUsers as $allUser) { ?>
                        <a href="./profil.php?pseudo=<?php echo $allUser['pseudo'] ?>"> <?= $allUser['pseudo'] ?></a>
                    <?php } ?>
                </div>
            </div>

            <div class="container-md col-8 col-lg-9 p-5 px-0">
            <div class="container-md col-8 col-lg-9 p-5 px-0">

                <div class="avatar d-flex justify-content-around">

                    <img src="../img/insta4.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:auto; height:70%">

                    <div class="flex-colum">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="pe-3">Construire Solidaire</strong>

                            <div class="justify-content-between pb-3">
                                <button type="button" class="btn btn-secondary btn-sm">Modifier le profil</button>
                                <button type="button" class="btn btn-secondary btn-sm">Voir l'archive</button>
                            </div>
                        </div>

                        <div>
                            <p>CONSTRUIRE SOLIDAIRE #SCIC-PTCE rassemble des acteurs</p>
                            <p>engagés #éco-construction #habitat durable et solidaire</p>
                            <br>
                            <a href="">www.construire-solidaire.fr</a>
                        </div>

                        <div class="d-flex justify-content-between align-items-center text-center pt-3">
                            <div>
                                <img src="../img/inter1.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:70px; height:70px">
                                <p class="">Interview</p>
                            </div>
                            <div>
                                <img src="../img/insta4.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:70px; height:70px">
                                <p>Collectif</p>
                            </div>
                            <div>
                                <img src="../img/colectivité.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:70px; height:70px">
                                <p>Collectivités</p>
                            </div>
                            <div>
                                <img src="../img/archi1.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:70px; height:70px">
                                <p>Architecture</p>
                            </div>
                            <div>
                                <img src="../img/centre social.jpg" class="rounded-circle" alt="Logo HTML w3" style="width:70px; height:70px">
                                <p>Centre social</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- photos in profile -->
                <section class="myPhotos container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <?php foreach ($posts as $post) : ?>
                            <div class="col-lg-4">
                                <img class="border-myImage pt-5 myPost" src="<?php echo "../img_post/" . $post['photo'] ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    </form>
                </section>

                <div class="container-fluid d-flex justify-content-between w-100 pt-5">
                    <div class="col-3">
                        <div class="pb-3 d-flex justify-content-center">
                            <img src="../img/archi2.jpg" alt="Photo de montagne" title="Cliquez pour agrandir" class="imgpost" />
                        </div>

                        <!-- <div>
                            <?php
                            // echo "<img src=\"../img_post" . $_SERVER["DOCUMENT_ROOT"] . "../img_post" . $_POST["photo"] . "\" />";
                            // echo "<input type=\"hidden\" name=\"photo\" value=\"" . $_POST["photo"] . "\" />\n";
                            ?>
                            <img src="../img_post/mail.png" class="rounded-circle" alt="Logo HTML w3" style="width:auto; height:70%">
                        </div> -->

                        <div class="col-7 pb-3">
                            <img src="../img/pleins-logo-insta.jpeg" alt="Photo de montagne" title="Cliquez pour agrandir" class="imgpost" />
                        </div>

                        <div class="pb-3 d-flex justify-content-center">
                            <img src="../img/insta3.jpg" alt="Photo de montagne" title="Cliquez pour agrandir" class="imgpost" />
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="pb-3 d-flex justify-content-center">
                            <img src="../img/mock-up-instagram.png" alt="Photo de montagne" title="Cliquez pour agrandir" class="imgpost" />
                        </div>

                        <div class="pb-3 d-flex justify-content-center">
                            <img src="../img/archi4.jpg" alt="Photo de montagne" title="Cliquez pour agrandir" class="imgpost" />
                        </div>

                        <div class="pb-3 d-flex justify-content-center">
                            <img src="../img/archi5.jpg" alt="Photo de montagne" title="Cliquez pour agrandir" class="imgpost" />
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="pb-3 d-flex justify-content-center">
                            <img src="../img/archi7.jpg" alt="Photo de montagne" title="Cliquez pour agrandir" class="imgpost" />
                        </div>

                        <div class="pb-3 d-flex justify-content-center">
                            <img src="../img/archi6.jpg" alt="Photo de montagne" title="Cliquez pour agrandir" class="imgpost" />
                        </div>

                        <div class="pb-3 d-flex justify-content-center">
                            <img src="../img/archi8.jpg" alt="Photo de montagne" title="Cliquez pour agrandir" class="imgpost" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="myModal" class="modalImg d-none">
        <img id="imgModal" src="" width="600px" height="600px" alt="">
        <div class="">
            <div id="btn_close">
                <button type="button" class="btn-close " aria-label="Close"></button>
            </div>
            <div class="carre_comment"></div>
            <input class="commentaire" type="text" placeholder="commenter...">
            <!-- <img id="coeur" class="coeur" height="60px " width="60px" src="../img/coeur.jpg" alt=""> -->
            <div class="border h-25" id="coeur"></div>
            <div><button type="submit" class="btn btn-primary">Go</button></div>
        </div>
    </div>

    


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../js/modal.js"></script>
    <script src="../js/like.js"></script>
</body>

</html>