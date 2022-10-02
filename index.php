<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page personnelle de présentation de maxime boujeant, concépteur développeur d'application web et logiciel">
    <meta name="keywords" content="maxime, boujeant, développeur web, développeur, concépteur ">
    <meta name="google-site-verification" content="pelB-l2Zop8x_4Tou9_GsJYFX-tLd2jJVwfrDezWxPA" />
    <title>MaximeBoujeant.fr</title>
    <link rel="shortcut icon" href="src/image/favicon.ico" type="images/x-icon" />

    <link rel="stylesheet" href="src/sass/main.css">
</head>

<body class="light" onload="initElement();">
    <div class="preloader">
        <h1>Chargement</h1>
        <span class="loader"></span>
    </div>

    <div id="wrapper" class="wrapper">
        <div class="bureau" id="bureau">
            <div class="div1">
                <img class="img" src="src/image/bureau/corbeille.svg" alt=""> corbeille
            </div>
            <div class="div2" id="pdf" onclick="apparaitreFenetreBureau(cv)">
                <img class="img" src="src/image/bureau/pdf.png" alt=""> CV
            </div>
            <div class="div3" id="experience" onclick="apparaitreFenetreBureau(exp)">
                <img class="img" src="src/image/bureau/experience.png" alt=""> Experience
            </div>
            <div class="div4" id="courier" onclick="apparaitreFenetreBureau(mail)">
                <img class="img" src="src/image/bureau/courier.svg" alt=""> Contact
            </div>
            <div class="div5" id="dossier" onclick="apparaitreFenetreBureau(proj)">
                <img class="img" src="src/image/bureau/dossier.svg" alt=""> Projets
            </div>
            <div class="div6" id="images" onclick="apparaitreFenetreBureau(skill)">
                <img class="img" src="src/image/bureau/images.png" alt=""> Skills
            </div>
            <div class="div7" id="code" onclick="apparaitreFenetreBureau(formation)">
                <img class="img" src="src/image/bureau/code.svg" alt=""> Formation
            </div>
            <div class="div8" id="parametre" onclick="apparaitreFenetreBureau(moi)">
                <img class="img" src="src/image/bureau/parametre.svg" alt=""> Profil
            </div>
        </div>
        <div id="cv">
            <header>
                <div class="fermer" onclick="fermerFenetre()"></div>
                <div class="taille"></div>
                <div class="reduire"></div>
            </header>
            <embed src="src/image/CV_Maxime_Boujeant_Alternance.pdf" width="800" height="500" type="application/pdf" />
        </div>
        <div id="formation">
            <header>
                <div class="fermer" onclick="fermerFenetre()"></div>
                <div class="taille"></div>
                <div class="reduire"></div>
            </header>
            <div class="corps">
                <nav>
                    <p><strong>Mes Projets</strong></p>
                    <ul>
                        <li>formations.html</li>
                    </ul>
                </nav>
                <hr>
                <main>
                    <div>
                        <p class="balise"><span class="sign">&#60!</span>DOCTYPE <span class="class">html</span><span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60</span>html <span class="class">lang</span>=<span class="inner-class">"fr"</span><span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60</span>head<span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60</span>meta <span class="class">charset</span>=<span class="inner-class">"UTF-8"</span><span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60</span>meta <span class="class">http-equiv</span>=<span class="inner-class">"X-UA-Compatible"</span> <span class="class">content</span>=<span class="inner-class">"IE=edge"</span><span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60</span>meta <span class="class">name</span>=<span class="inner-class">"viewport"</span> <span class="class">content</span>=<span class="inner-class">"width=device-width, initial-scale=1.0"</span><span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60</span>title<span class="sign">></span><span class="texte">Formations</span> <span class="sign">&#60/</span>title<span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60/</span>head<span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60</span>body<span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60</span>div <span class="class">class</span>=<span class="inner-class">"container"</span><span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60</span>p<span class="sign">></span><span class="texte"><a href="https://iut-lannion.univ-rennes1.fr/informatique">BUT informatique - Lannion | 2021 - Maintenant</a></span><span class="sign">&#60/</span>p<span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60</span>p<span class="sign">></span><span class="texte"><a href="https://lycee-serusier-carhaix.ac-rennes.fr/">Lycée polyvalent paul sérusier - Carhaix | 2018 - 2021</a> <span class="sign">&#60</span><span class="balise">br</span><span class="sign">></span> Spécialitées : Mathématique informatique</span><span class="sign">&#60/</span>p<span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60/</span>div<span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60/</span>body<span class="sign">></span></p>
                        <p class="balise"><span class="sign">&#60/</span>html<span class="sign">></span></p>
                    </div>
                </main>
            </div>
        </div>
        <div id="exp">
            <header>
                <div class="fermer" onclick="fermerFenetre()"></div>
                <div class="taille"></div>
                <div class="reduire"></div>
            </header>
            <div class="corps">
                <nav>
                    <p><strong>Favoris</strong></p>
                    <ul>
                        <li>Paramètres</li>
                        <li>Bureau</li>
                        <li>CV</li>
                        <li>Projets</li>
                    </ul>
                    <p><strong>Tags</strong></p>
                    <ul>
                        <li>
                            <div class="Red"></div>Red
                        </li>
                        <li>
                            <div class="Orange"></div>Orange
                        </li>
                        <li>
                            <div class="Yellow"></div>Yellow
                        </li>
                        <li>
                            <div class="Green"></div>Green
                        </li>
                        <li>
                            <div class="Blue"></div>Blue
                        </li>
                        <li>
                            <div class="Purple"></div>Purple
                        </li>
                        <li>
                            <div class="Grey"></div>Grey
                        </li>
                        <li>
                            <div class="All_Tags"></div>All Tags
                        </li>
                    </ul>
                </nav>
                <hr>
                <main>
                    <div class="exp-container">
                        <h1>Expérience Professionnel</h1>
                        <div class="exp-img">
                            <div>
                                <img src="src/image/experience/supermarche.jpg" alt=""> Employé de mise en rayon
                            </div>
                            <div>
                                <img src="src/image/experience/mcdonald.jpg" alt=""> Employé polyvalent
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div id="mail">
            <header>
                <div class="fermer" onclick="fermerFenetre()"></div>
                <div class="taille"></div>
                <div class="reduire"></div>
            </header>
            <div class="corps">
                <nav>
                    <p><strong>Courrier</strong></p>
                    <ul>
                        <li>Boite de réception</li>
                        <li>Messages suivis</li>
                        <li>En attente</li>
                        <li>Messages envoyés</li>
                        <li>Bouillons</li>
                    </ul>
                </nav>
                <hr>
                <main>
                    <div>
                        <h1>Contact</h1>
                        <form action="" method="post">
                            <label>Adresse mail*</label>
                            <input type="email" name="email" placeholder="Email..." required><br>
                            <label>Votre demande...*</label>
                            <input type="text" name="object" placeholder="Sujet...." required><br>
                            <label>Sujet*</label>
                            <textarea name="message" placeholder="Tapez votre message..." required></textarea><br>
                            <input type="submit" value="Hop c'est parti !">
                            <h2>* Pour les champs obligatoires</h2>
                        </form>
                        <?php
                        if (isset($_POST['message'])) {
                            $entete  = 'MIME-Version: 1.0' . "\r\n";
                            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                            $entete .= 'From: ' . $_POST['email'] . "\r\n";
                            $entete .= 'Reply-to: ' . $_POST['email'];

                            $message = '<h1>Message envoyé depuis la page Contact de MaximeBoujeant.fr</h1>
                            <p><b>Email : </b>' . $_POST['email'] . '<br>
                            <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

                            $retour = mail('furiousBoujeant@gmail.com', $_POST['object'], nl2br($message), $entete);
                        }
                        ?>
                    </div>
                </main>
            </div>
        </div>
        <div id="proj">
            <header>
                <div class="fermer" onclick="fermerFenetre()"></div>
                <div class="taille"></div>
                <div class="reduire"></div>
            </header>
            <div class="corps" id="projet-corps">
                <nav id="projet-nav">
                    <ul>
                        <li id="nav-ludo">Ludo-Rostrenen</li>
                        <li id="nav-furious">maximeboujeant.fr</li>
                        <li id="nav-kohfrais">KohFrais</li>
                        <li id="nav-yams">Yams</li>
                        <li id="nav-adv">Advender</li>
                        <li id="nav-eduq">Eduq ton ptit</li>
                    </ul>
                </nav>
                <hr id="projet-delimiter">
                <main id="projet-container">
                    <div id="projet-retour">< retour</div>
                    <div id="fenetre-eduq" class="eduq">
                        <h1>Projet : Eduq ton ptit</h1>
                        <p>
                            <strong>Définition :</strong> Eduq ton ptit est un site internet destiné aux enfants permettant un soutien scolaire du niveau CE2 à CM2. Ce site internet a été développé en équipe de 4 et à fait également l'objet d'un développement
                            d'une application hybride.<br><br>
                            <strong>Année de réalisation : </strong>2020<br><br>
                            <strong>Technologies utilisées :</strong><br>
                        <div class="img">
                            <img src="src/image/Langage/HTML.png" alt="html">
                            <img src="src/image/Langage/CSS.png" alt="css">
                            <img src="src/image/Langage/JS.svg" alt="js"><br>
                        </div>
                        <strong>Etapes du travail :</strong>
                        <ul>
                            <li>Prise en compte d'un cahier des charges</li>
                            <li>Réalisation d'un StoryBoard/Maquettage</li>
                            <li>Développement du site web</li>
                            <li>Conversion du site web en application hybride</li>
                        </ul>
                        <strong>Résultat :</strong>
                        <figure>
                            <img src="src/image/Projet/eduqtonptit.jpg" alt="Image de l'application hybride fini">
                            <figcaption>Application hybride fini</figcaption>
                        </figure>
                        <strong>Acquis : </strong>
                        <ul>
                            <li>Réponse à un besoin spontané</li>
                            <li>Travail en situation difficile</li>
                            <li>Organisation</li>
                        </ul>
                        <img src="src/image/Projet/eduq.png" alt="">
                    </div>
                    <div id="fenetre-adv" class="adv">
                        <h1>Projet : Advender</h1>
                        <p>
                            <strong>Définition : </strong>Advender est un site internet destiné au grand public qui à pour principe un QCM aléatoire sur plusieurs thèmes. Ce site était un projet informatique en équipe de quatre dans le cadre d'une formation.
                            scolaire.
                            <br><br>
                            <strong>Année de réalisation : </strong>2021<br><br>
                            <strong>Technologies utilisées : </strong><br>
                        <div class="img">
                            <img src="src/image/Langage/HTML.png" alt="html">
                            <img src="src/image/Langage/CSS.png" alt="css">
                            <img src="src/image/Langage/JS.svg" alt="js">
                            <img src="src/image/Langage/MySQL.svg" alt="mysql">
                            <img src="src/image/Langage/php.png" alt="php">
                        </div>
                        <strong>Etapes du travail :</strong>
                        <ul>
                            <li>Prise en compte d'un cahier des charges</li>
                            <li>Réalisation d'un StoryBoard/Maquettage</li>
                            <li>Développement du site web</li>
                        </ul>
                        <strong>Acquis : </strong>
                        <ul>
                            <li>Gestion d'équipe</li>
                            <li>Conception d'application</li>
                            <li>Communication</li>
                        </ul>
                        <strong>Liens du GitHub du projet : </strong> <br>
                        <a href="https://github.com/maximefurious/Advender">https://github.com/maximefurious/Advender</a>
                        <img src="src/image/Projet/Advender.png" alt="logo Advender">
                    </div>
                    <div id="fenetre-kohfrais">
                        <h1>Projet : KohFrais</h1>
                        <p>
                            <strong>Définition :</strong> KohFrais est un site vitrine de glace réaliser en équipe de quatre dans le cadre d'une évaluation à l'IUT. Ce projet, a été réalisé en plusieurs étapes, la première étant la phase de synthèse des
                            besoins clients d'après une interview, ensuite est venu la phase de conception de la maquette, puis de l'arborescence et enfin est venu la partie développement en équipe du site web.<br><br>
                            <strong>Année de réalisation : </strong>2021<br><br>
                            <strong>Technologies utilisées :</strong><br>
                        <div class="img">
                            <img src="src/image/Langage/HTML.png" alt="html">
                            <img src="src/image/Langage/CSS.png" alt="css">
                            <img src="src/image/Langage/boostrap.svg" alt="Boostrap"><br>
                            <img src="src/image/Langage/gitlab.svg" alt="GitLab">
                        </div>
                        <strong>Acquis : </strong>
                        <ul>
                            <li>Respect des délais</li>
                            <li>Travail en équipe</li>
                            <li>Organisation</li>
                        </ul>
                        <strong>Liens du GitHub du projet : </strong> <br>
                        <a href="https://github.com/maximefurious/KohFrais">https://github.com/maximefurious/KohFrais</a>


                    </div>
                    <div id="fenetre-ludo" class="ludo">
                        <h1>Projet : Ludothèque Rostrenen</h1>
                        <p>
                            <strong>Définition : </strong>Ce site internet est un site vitrine permettant d'améliorer le référencement des jeux de société présent dans la ludothèque à Rostrenen. Ce site internet qui est actuellement en développement sera
                            accessible au grand public.
                            <br><br>
                            <strong>Année de réalisation : </strong>2022<br><br>
                            <strong>Technologies utilisées : </strong><br>
                        <div class="img">
                            <img src="src/image/Langage/HTML.png" alt="HTML">
                            <img src="src/image/Langage/CSS.png" alt="CSS">
                            <img src="src/image/Langage/MySQL.svg" alt="MySQL">
                            <img src="src/image/Langage/php.png" alt="php">
                        </div>
                        <strong>Acquis : </strong>
                        <ul>
                            <li>Recueil d'un besoin</li>
                            <li>Communication avec le client</li>
                        </ul>
                    </div>
                    <div id="fenetre-furious" class="furious">
                        <h1>Projet : maximeboujeant.fr</h1>
                        <p>
                            <strong>Définition : </strong>maximeboujeant.fr est un site mettant en valeur mes compétences et mes savoirs fairs pour toutes personnes curieuses à mon égard.
                            <br><br>
                            <strong>Année de réalisation : </strong>2022<br><br>
                            <strong>Technologies utilisées : </strong><br>
                        <div class="img">
                            <img src="src/image/Langage/HTML.png" alt="HTML">
                            <img src="src/image/Langage/CSS.png" alt="CSS">
                            <img src="src/image/Langage/JS.svg" alt="js">
                            <img src="src/image/Langage/php.png" alt="PHP">
                            <img src="src/image/Langage/sass.png" alt="Sass">
                            <img src="src/image/Langage/cypress.png" alt="Cypress">
                        </div>
                        <strong>Acquis : </strong>
                        <ul>
                            <li>Analyse de soi-même</li>
                            <li>Développement d'une IHM</li>
                            <li>Regard critique sur soi-même</li>
                        </ul>
                    </div>
                    <div id="fenetre-yams" class="yams">
                        <h1>Projet : Yams</h1>
                        <p>
                            <strong>Définition : </strong> Lors d'un projet, j'ai réalisé un jeu de YAMS à deux joueurs, fonctionnant grâce au langage C. Le principe était qu’il y avait deux joueurs, et que le yams s’affichait dans un terminal. Ce projet,
                            a été réalisé en plusieurs étapes, en commençant par la prise en compte d'un cahier des charges, puis la réalisation de la maquette de la grille des scores, ensuite est venu la rédaction d'un cahier de test, puis la phase de
                            conception d'un algorithme en langage naturel et enfin est venu la phase de conception en langage C ainsi que la phase de test à l'aide du cahier de test rédigé plus tôt.<br><br>
                            <strong>Année de réalisation : </strong>2021<br><br>
                            <strong>Technologies utilisées : </strong><br>
                        <div class="img">
                            <img src="src/image/Langage/C.svg" alt="C">
                        </div>
                        <strong>Acquis : </strong>
                        <ul>
                            <li>Respect d'un cahier des charges</li>
                            <li>Gestion du temps</li>
                            <li>Analyse de besoin précis</li>
                        </ul>
                        <strong>Liens du GitHub du projet : </strong> <br>
                        <a href="https://github.com/maximefurious/Yams">https://github.com/maximefurious/Yams</a>
                    </div>
                </main>
            </div>
        </div>
        <div id="skill">
            <header>
                <div class="fermer" onclick="fermerFenetre()"></div>
                <div class="taille"></div>
                <div class="reduire"></div>
            </header>
            <div class="corps">
                <nav>
                    <p><strong>Favoris</strong></p>
                    <ul>
                        <li>Paramètres</li>
                        <li>Bureau</li>
                        <li>CV</li>
                        <li>Projets</li>
                    </ul>
                    <p><strong>Tags</strong></p>
                    <ul>
                        <li>
                            <div class="Red"></div>Red
                        </li>
                        <li>
                            <div class="Orange"></div>Orange
                        </li>
                        <li>
                            <div class="Yellow"></div>Yellow
                        </li>
                        <li>
                            <div class="Green"></div>Green
                        </li>
                        <li>
                            <div class="Blue"></div>Blue
                        </li>
                        <li>
                            <div class="Purple"></div>Purple
                        </li>
                        <li>
                            <div class="Grey"></div>Grey
                        </li>
                        <li>
                            <div class="All_Tags"></div>All Tags
                        </li>
                    </ul>
                </nav>
                <hr>
                <main>
                    <div class="skills-container">
                        <div><img src="src/image/Langage/HTML.png" alt="HTML"> HTML</div>
                        <div><img src="src/image/Langage/CSS.png" alt="CSS"> CSS</div>
                        <div><img src="src/image/Langage/JS.svg" alt="JS"> JS</div>
                        <div><img src="src/image/Langage/php.png" alt="php"> Php</div>
                        <div><img src="src/image/Langage/sass.png" alt="sass"> Sass</div>
                        <div><img src="src/image/Langage/postgresql.svg" alt="postgresql"> Postgresql</div>
                        <div><img src="src/image/Langage/MySQL.svg" alt="MySQL"> MySQL</div>
                        <div><img src="src/image/Langage/cypress.png" alt="cypress"> Cypress</div>
                        <div><img src="src/image/Langage/boostrap.svg" alt="boostrap"> Boostrap</div>
                        <div><img src="src/image/Langage/java.svg" alt="java"> Java</div>
                        <div><img src="src/image/Langage/javafx.png" alt="javafx"> JavaFX</div>
                        <div><img src="src/image/Langage/C.svg" alt="C"> C</div>
                        <div><img src="src/image/Langage/python.svg" alt="python"> Python</div>
                        <div><img src="src/image/Langage/github.svg" alt="github"> Github</div>
                        <div><img src="src/image/Langage/gitlab.svg" alt="gitlab"> Gitlab</div>
                        <div><img src="src/image/Langage/linux.png" alt="linux"> Linux</div>
                        <div><img src="src/image/Langage/bash.svg" alt="bash"> Bash</div>
                        <div><img src="src/image/Langage/docker.svg" alt="docker"> Docker</div>
                        <div><img src="src/image/Langage/webstorm.svg" alt="webstorm"> Webstorm</div>
                        <div><img src="src/image/Langage/eclipse.svg" alt="eclipse"> eclipse</div>
                        <div><img src="src/image/bureau/code.svg" alt="Visual Studio code"> Visual Studio code</div>
                        <div><img src="src/image/Langage/xampp.png" alt="xampp"> xampp</div>
                        <div><img src="src/image/Langage/photoshop.svg" alt="photoshop"> Photoshop</div>
                        <div><img src="src/image/Langage/trello.svg" alt="trello"> Trello</div>
                    </div>
                </main>
            </div>
        </div>
        <div id="moi">
            <header>
                <div class="fermer" onclick="fermerFenetre()"></div>
                <div class="taille"></div>
                <div class="reduire"></div>
            </header>
            <div class="corps" id="profil-corps">
                <nav id="profil-nav">
                    <img src="src/image/logo.jpg" alt="logo">
                    <p class="border">Maxime Boujeant</p>
                    <ul>
                        <li id="para-general">Général</li>
                        <li id="para-bureau">Bureau</li>
                        <li id="para-accessibiliter">Accessibilité</li>
                        <li id="para-preference">Préférence</li>
                        <li id="para-cgu">mentions légales</li>
                    </ul>
                </nav>
                <hr id="profil-delimiter">
                <main id="profil-container">
                    <div id="btn-retour">< retour</div>
                    <div id="general" class="general">
                        <h1>Général</h1>
                        <div class="sous-general">
                            <div class="general-1">
                                <p><strong>Nom :</strong> Maxime Boujeant</p>
                                <p><strong>Age :</strong> 18 ans</p>
                                <p><strong>Permis :</strong> Oui</p>
                                <p><strong>Email :</strong>
                                    <a href="mailto:maxime.boujeant@gmail.com">maxime.boujeant@gmail.com</a>
                                </p>
                            </div>
                            <div class="general-2">
                                <p><strong>GitHub :</strong>
                                <a href="https://github.com/maximefurious">https://github.com/maximefurious</a>
                            </p>
                                <strong>Langues :</strong>
                                <div class="langue">
                                    <img src="src/image/Profil/royaume-uni.png" alt="Anglais" title="Anglais">
                                    <img src="src/image/Profil/allemagne.png" alt="Allemand" title="Allemand">
                                    <img src="src/image/Profil/chine.png" alt="Chinois" title="Chinois">
                                </div>
                            </div>
                        </div>
                        <h2>Présentation</h2>
                        <p>
                            Bonjour je m'appelle Maxime, je suis un étudiant en informatique à l'iut informatique de Lannion,  
                            j'ai 18 ans et je suis passionné par le développement web depuis l'âge de 14 ans. Dans la vie j'aime 
                            l'adrénaline ainsi que les jeux vidéos et la programmation. Je souhaiterai me spécialiser dans le 
                            développement web fullstack et donc pour devenir développeur web fullstack à l'avenir. Je suis quelqu'un
                            de dynamique et je suis toujours à la recherche de nouveaux challenges, ainsi que d'opportunité pour
                            m'améliorer et développer mes compétences dans le développement web. 
                        </p>
                        <h2>Centres d'intérêts</h2>
                        <div class="interet">
                            <div class="sous-interet" id="i1">
                                <img src="src/image/Profil/Conduire.jpg" alt="Conduire" title="Conduire"> Conduire
                            </div>
                            <div class="sous-interet" id="i2">
                                <img src="src/image/Profil/Challenge.jpg" alt="Relever des challenges" title="Relever des challenges"> Relever des challenges
                            </div>
                            <div class="sous-interet" id="i3">
                                <img src="src/image/Profil/Programmer.jpg" alt="Programmer" title="Programmer"> Programmer
                            </div>
                        </div>
                    </div>
                    <div id="preference">
                        <h1>Accessibilité</h1>
                        <div class="sous-pref">
                            <div id="light">
                                <img src="src/image/parametre/light.png" alt="">
                                <p>Light Mode</p>
                            </div>
                            <div id="dark">
                                <img src="src/image/parametre/dark.png" alt="">
                                <p>Dark Mode</p>
                            </div>
                        </div>
                    </div>
                    <div id="cgu">
                        <embed src="src/image/parametre/cgu.pdf" type="application/pdf" />
                    </div>
                </main>
            </div>
        </div>
        <footer id="legal" onclick="apparaitreLegal()">Made by Maxime Boujeant © Copyright 2022</footer>
    </div>
</body>
<script type="text/javascript" src="src/js/app.js"></script>

</html>