<!doctype html>
    <html lang="fr">
        
        <head>
            <meta charset="utf-8">
            <title>Titre de la page</title>
            <link href="assets/style3.css" rel="stylesheet">
            <script src="https://kit.fontawesome.com/fda357da01.js" crossorigin="anonymous"></script>
        </head>

        <body>
            <nav class="header">
                <div class="center">
                    <a href="#"><div class="Logo">
                        <img src="logo.png" alt="LogoInsta" class="imgLogo">
                    </div></a>
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass icon-search"></i>
                        <input type="text" maxlength="12" placeholder="Rechercher" class="searchbar" />
                    </div>
                    <div class="navigation">
                        <?php echo'<a href="index.php?uc=accueil&action=afficher&id=' . $_SESSION['id'] . '">';?><i class="fa-solid fa-house icon"></i></a>
                        <a href="#"><i class="fa-solid fa-paper-plane icon"></i></a>
                        <a href="#"><i class="fa-solid fa-plus icon"></i></a>
                        <a href="#"><i class="fa-solid fa-compass icon"></i></a>
                        <a href="#"><i class="fa-solid fa-heart icon"></i></a>
                        <div style="height: 28px; width: 28px;" onclick="clique()">
                            <div class="boxPdp" style="height: 28px; width: 28px; border: 1px solid rgba(var(--i1d,38,38,38),1); border-radius: 50%;"></div>
                            <img src="<?php echo "membres/avatars/".$userinfo['avatar']; ?>" style="position: absolute; top: 15px; height: 28px; width: 28px; border: 1px solid rgba(var(--i1d,38,38,38),1); border-radius: 50%;">
                        </div>
                    </div>
                </div>
                <div class="menuDeroulantPdp" id="menuDeroulantPdp">
                    <?php echo'<a href="index.php?uc=profil&action=consulterProfil&id=' . $_SESSION['id'] . '">';?><div class="profil" style="border-top-left-radius: 20px; border-top-right-radius: 20px;"><span class="text"><i class="fa-solid fa-user" style="margin-right: 10px;"></i> Profil</span></div></a>
                    <a href="#"><div class="profil"><span class="text"><i class="fa-solid fa-bookmark" style="margin-right: 10px;"></i> Enregistré</span></div></a>
                    <a href="#"><div class="profil"><span class="text"><i class="fa-solid fa-gear" style="margin-right: 10px;"></i></i> Paramètres</span></div></a>
                    <a href="#"><div class="profil"><span class="text"><i class="fa-solid fa-arrows-rotate" style="margin-right: 10px;"></i> Changer de compte</span></div></a>
                    <hr>
                        <a href="index.php?uc=connexion&action=deconnexion"><div class="deconnexion" style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;"><span class="text"> Déconnexion </span></div></a>
                </div>
            </nav>
            <div class="colonnePrincipale">
                <div class="CategorieModif">
                    <div class="Liste">
                        <ul>
                            <li><a href="#" class="textCategorie ">Modifier profil</a></li>
                            <li><?php echo'<a href="index.php?uc=profil&action=modifierMDP&id=' . $_SESSION['id'] . '" class="textCategorie">';?>Changer de mot de passe</a></li>
                            <li><a href="#" class="textCategorie ">Apps et sites web</a></li>
                            <li><a href="#" class="textCategorie ">Notifications par e-mail</a></li>
                            <li><a href="#" class="textCategorie ">Notifications push</a></li>
                            <li><a href="#" class="textCategorie ">Gérer les contacts</a></li>
                            <li><a href="#" class="textCategorie ">Sécurité et confidentialité</a></li>
                            <li><a href="#" class="textCategorie ">Activité de connexion</a></li>
                            <li><a href="#" class="textCategorie ">E-mails d'Instagram</a></li>
                            <li><a href="#" class="textCategorie ">Aide</a></li>
                        </ul>
                        <a id="ComptePro" href="#">Passer à un compte professionnel</a>
                    </div>
                    <div class="meta">
                        <span style="display:flex; padding-bottom: 15px;"><svg aria-label="Logo du mot-symbole et de la famille d’applications Facebook" height="12" viewBox="0 0 500 100" width="60"><defs><linearGradient gradientUnits="userSpaceOnUse" id="b" x1="125" x2="160.217" y1="97" y2="57.435"><stop offset=".21" stop-color="#0278F1"></stop><stop offset=".533" stop-color="#0180FA"></stop></linearGradient><linearGradient gradientUnits="userSpaceOnUse" id="c" x1="44" x2="0" y1="5" y2="64"><stop offset=".427" stop-color="#0165E0"></stop><stop offset=".917" stop-color="#0180FA"></stop></linearGradient><linearGradient gradientUnits="userSpaceOnUse" id="d" x1="28.5" x2="135" y1="29" y2="72"><stop stop-color="#0064E0"></stop><stop offset=".656" stop-color="#0066E2"></stop><stop offset="1" stop-color="#0278F1"></stop></linearGradient><clipPath id="a"><path d="M0 0h496.236v100H0z" fill="#fff"></path></clipPath></defs><g clip-path="url(#a)"><path d="M182.141 3.213h18.808l31.98 57.849 31.979-57.849h18.401V98.27h-15.345V25.416l-28.042 50.448h-14.394l-28.042-50.448V98.27h-15.345V3.213ZM332.804 99.967c-7.107 0-13.353-1.573-18.739-4.718-5.387-3.146-9.586-7.504-12.595-13.07-3.011-5.569-4.515-11.95-4.515-19.148 0-7.287 1.47-13.738 4.413-19.35 2.942-5.613 7.027-10.004 12.255-13.173 5.229-3.168 11.238-4.753 18.027-4.753 6.744 0 12.55 1.596 17.416 4.787 4.865 3.191 8.611 7.661 11.237 13.41 2.624 5.749 3.938 12.492 3.938 20.233v4.21h-52.077c.95 5.794 3.292 10.354 7.027 13.68 3.735 3.328 8.453 4.991 14.157 4.991 4.571 0 8.509-.679 11.814-2.037 3.303-1.358 6.404-3.417 9.302-6.178l8.147 9.98c-8.103 7.425-18.038 11.136-29.807 11.136Zm11.204-56.389c-3.215-3.281-7.425-4.923-12.629-4.923-5.07 0-9.314 1.676-12.731 5.025-3.418 3.35-5.58 7.854-6.484 13.512h37.343c-.453-5.794-2.286-10.331-5.499-13.614ZM382.846 40.014h-14.123V27.453h14.123V6.676h14.802v20.777h21.455v12.561h-21.455v31.844c0 5.295.905 9.075 2.716 11.338 1.809 2.264 4.911 3.395 9.302 3.395 1.945 0 3.598-.078 4.956-.237a92.35 92.35 0 0 0 4.481-.646v12.425c-1.675.498-3.564.906-5.669 1.223a44.63 44.63 0 0 1-6.62.475c-15.979 0-23.968-8.735-23.968-26.208V40.014ZM496.236 98.27h-14.53v-9.913c-2.58 3.712-5.862 6.575-9.845 8.588-3.983 2.014-8.51 3.022-13.579 3.022-6.247 0-11.78-1.596-16.601-4.787s-8.612-7.581-11.373-13.172c-2.761-5.59-4.142-11.983-4.142-19.18 0-7.243 1.403-13.648 4.21-19.216 2.806-5.567 6.688-9.935 11.645-13.104 4.956-3.168 10.648-4.753 17.075-4.753 4.844 0 9.189.94 13.037 2.818a25.768 25.768 0 0 1 9.573 7.978v-9.098h14.53V98.27Zm-14.801-46.035c-1.585-4.028-4.085-7.207-7.503-9.54-3.418-2.33-7.367-3.496-11.848-3.496-6.338 0-11.384 2.128-15.141 6.382-3.758 4.255-5.635 10.004-5.635 17.246 0 7.289 1.809 13.06 5.431 17.314 3.621 4.255 8.532 6.382 14.734 6.382 4.571 0 8.645-1.176 12.222-3.53 3.575-2.353 6.155-5.522 7.74-9.506V52.235Z" fill="#262626"></path><path d="M108 0C95.66 0 86.015 9.294 77.284 21.1 65.284 5.821 55.25 0 43.24 0 18.76 0 0 31.862 0 65.586 0 86.69 10.21 100 27.31 100c12.308 0 21.16-5.803 36.897-33.31 0 0 6.56-11.584 11.072-19.564 1.582 2.553 3.243 5.3 4.997 8.253l7.38 12.414C102.03 91.848 110.038 100 124.551 100c16.659 0 25.931-13.492 25.931-35.034C150.483 29.656 131.301 0 108 0ZM52.207 59.241c-12.759 20-17.172 24.483-24.276 24.483-7.31 0-11.655-6.418-11.655-17.862 0-24.483 12.207-49.517 26.759-49.517 7.88 0 14.465 4.55 24.552 18.991-9.578 14.691-15.38 23.905-15.38 23.905Zm48.153-2.517-8.823-14.715a301.425 301.425 0 0 0-6.884-10.723c7.952-12.274 14.511-18.39 22.313-18.39 16.206 0 29.172 23.863 29.172 53.173 0 11.172-3.659 17.655-11.241 17.655-7.268 0-10.739-4.8-24.537-27Z" fill="#0180FA"></path><path d="M145.586 35H130.66c3.452 8.746 5.478 19.482 5.478 31.069 0 11.172-3.659 17.655-11.241 17.655-1.407 0-2.672-.18-3.897-.631V99.82c1.143.122 2.324.18 3.552.18 16.659 0 25.931-13.492 25.931-35.034 0-10.737-1.774-20.95-4.897-29.966Z" fill="url(#b)"></path><path d="M43.241 0c.254 0 .507.003.759.008v16.36c-.32-.015-.642-.023-.965-.023-14.183 0-26.139 23.782-26.736 47.655H.014C.59 30.87 19.143 0 43.24 0Z" fill="url(#c)"></path><path d="M43.241 0c11.152 0 20.601 5.02 31.502 17.971 3.065 3.828 6.761 8.805 10.716 14.557l.017.025.025-.003a311.041 311.041 0 0 1 6.036 9.459l8.823 14.715c13.798 22.2 17.269 27 24.537 27H125v16.273c-.149.002-.298.003-.448.003-14.513 0-22.522-8.152-36.897-32.207l-7.38-12.414a596.368 596.368 0 0 0-2.294-3.834L78 51.5c-5.5-9-9-14.5-12-18.5l-.05.038c-9.18-12.63-15.47-16.693-22.916-16.693H43V0L43.241 0Z" fill="url(#d)"></path></g></svg></span>
                        <a id="EspacesComptes" href="#">Espaces Comptes</a>
                        <a id="DescriptionMeta">Réglez les paramètres des expériences partagées entre Instagram, l’application Facebook et Messenger, notamment pour le partage de stories et de publications, ainsi que pour se connecter.</a>
                    </div>
                </div>
                <div class="colonneProfil">
                    <div class="PremiereLigneProfil">
                        <div class="pdpProfil">
                            <div style="width: 100%; height: 100%; position: relative;">
                                <button class="btnPdp" id="modal-btn2"><img src="<?php echo "membres/avatars/".$userinfo['avatar']; ?>" alt="" class="imgModifPdp"></button>
                            </div>
                        </div>
                        <div class="InfosProfil">
                            <h1 class="InfosNom"><?php echo $userinfo['nomUtilisateur']; ?> </h1>
                            <button id="modal-btn" class="btnModifierPdp">Modifier la photo de profil</button>
                        </div>
                    </div>

                    <div id="my-modal" class="modal">
                        <div class="modal-content">
                            <div class="TitreModal">
                                <h3>Modifier la photo de profil</h3>
                            </div>
                            <div class="btnModifPhoto">
                                <button class="Import">Importer une photo</button>
                                <form action="index.php?uc=profil&action=changerPhoto" id="form_file" method="POST" enctype="multipart/form-data">
                                    <input type="file" name="upfile" onchange="document.getElementById('form_file').submit()">
                                </form>
                                    <button class="Delete">Supprimer la photo actuelle</button>
                                    <form action="index.php?uc=profil&action=supprimerPhoto" id="form_file" method="POST" enctype="multipart/form-data" style="transform: translateY(48px);">
                                        <input type="submit" name="deletefile" class="submitInput">
                                    </form>
                                <button class="close">Annuler</button>
                            </div>
                        </div>
                    </div>

                    <form action="index.php?uc=profil&action=modifierInfos" method="post" class="formModifProfil">
                        <div style="display: flex; margin-bottom: 16px;">
                            <aside class="aside">
                                <label for="Name" class="label">Nom</label>
                            </aside>
                            <div style="display:flex; flex-grow: 1; flex-shrink: 0; flex-basis: 355px; flex-direction: row; padding-right: 60px;">
                                <div class="DivInputNom">
                                    <input aria-required="false" name="modifNom" id="Name" placeholder="Nom" type="text" class="input" value="<?php echo $userinfo['nom']; ?>">
                                    <div class="textInput">
                                        <p style="margin-bottom: 16px;">Aidez les gens à trouver votre compte à l’aide de votre nom le plus connu, que ce soit votre nom complet, votre surnom ou votre nom d’entreprise.</p>
                                        <p>Vous pouvez uniquement changer votre nom deux fois tous les 14 jours.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; margin-bottom: 16px;">
                            <aside class="aside">
                                <label for="Username" class="label">Nom d'utilisateur</label>
                            </aside>
                            <div style="display:flex; flex-grow: 1; flex-shrink: 0; flex-basis: 355px; flex-direction: row; padding-right: 60px;">
                                <div class="DivInputNom">
                                    <input aria-required="false" name="modifUsername" id="Username" placeholder="Username" type="text" class="input" value="<?php echo $userinfo['nomUtilisateur']; ?>">
                                    <div class="textInput">
                                        <p>Dans la plupart des cas, vous pourrez reprendre votre nom d’utilisateur <?php echo $userinfo['nomUtilisateur']; ?> pendant encore 14 jours. En savoir plus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; margin-bottom: 16px;">
                            <aside class="aside">
                                <label for="WebSite" class="label">Site web</label>
                            </aside>
                            <div style="display:flex; flex-grow: 1; flex-shrink: 0; flex-basis: 355px; flex-direction: row; padding-right: 60px;">
                                <div class="DivInputNom">
                                    <input aria-required="false" name="modifWebSite" id="WebSite" placeholder="Site Web" type="text" class="input" value="<?php  echo $userinfo['siteWeb']; ?> ">
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; margin-bottom: 16px;">
                            <aside class="aside">
                                <label for="Bio" class="label">Bio</label>
                            </aside>
                            <div style="display:flex; flex-grow: 1; flex-shrink: 0; flex-basis: 355px; flex-direction: row; padding-right: 60px;">
                                <div class="DivInputNom">
                                    <textarea class="_ab44" name="modifBio" id="Bio" style="height: 68px; resize: vertical; width: 100%; background: transparent; flex: 0 1 355px; border: 1px solid rgb(219,219,219);"><?php echo $userinfo['Biographie']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; margin-bottom: 16px;">
                            <aside class="aside">
                                <label for="Info" class="label"></label>
                            </aside>
                            <div style="display:flex; flex-grow: 1; flex-shrink: 0; flex-basis: 355px; flex-direction: row; padding-right: 60px;">
                                <div class="DivInputNom">
                                    <div class="textInput">
                                        <h2 style="color: rgb(142,142,142); font-size: 14px; font-weight: 600px;">Informations personnelles</h2>
                                        <p>Fournissez vos informations personnelles, même si le compte est utilisé pour une entreprise, un animal ou autre chose. Elles n’apparaîtront pas sur votre profil public.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; margin-bottom: 16px;">
                            <aside class="aside">
                                <label for="e-mail" class="label">Adresse e-mail</label>
                            </aside>
                            <div style="display:flex; flex-grow: 1; flex-shrink: 0; flex-basis: 355px; flex-direction: row; padding-right: 60px;">
                                <div class="DivInputNom">
                                    <input aria-required="false" name="modifEmail" id="e-mail" placeholder="e-mail" type="text" class="input" value="<?php echo $userinfo['email']; ?>">
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; margin-bottom: 16px;">
                            <aside class="aside">
                                <label for="num" class="label">Numéro de téléphone</label>
                            </aside>
                            <div style="display:flex; flex-grow: 1; flex-shrink: 0; flex-basis: 355px; flex-direction: row; padding-right: 60px;">
                                <div class="DivInputNom">
                                    <input aria-required="false" name="modifNum" id="num" placeholder="Numéro de téléphone" type="text" class="input" value="<?php  echo $userinfo['telephone']; ?>">
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; margin-bottom: 16px;">
                            <aside class="aside">
                                <label for="Genre" class="label">Genre</label>
                            </aside>
                            <div style="display:flex; flex-grow: 1; flex-shrink: 0; flex-basis: 355px; flex-direction: row; padding-right: 60px;">
                                <div class="DivInputNom">
                                    <input aria-required="false" name="Genre" id="Genre" placeholder="Genre" type="text" class="input" value="Je préfère ne pas répondre">
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; margin-bottom: 16px;">
                            <aside class="aside">
                                <label for="Comptes" class="label">Comptes similaires suggérés</label>
                            </aside>
                            <div style="display:flex; flex-grow: 1; flex-shrink: 0; flex-basis: 355px; flex-direction: row; padding-right: 60px;">
                                <div class="DivInputNom">
                                    
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; margin-bottom: 16px;">
                            <aside class="aside">
                                <label for="submit" class="label"></label>
                            </aside>
                            <div style="display:flex; flex-grow: 1; flex-shrink: 0; flex-basis: 355px; flex-direction: row;">
                                <div class="DivInputNom" style=" display: flex;">
                                    <input type="submit" value="Envoyer" name="submit" class="btnSubmitProfil">
                                    <button class="btnDesactiverCompte" type="button"><a href="#" style="color: rgb(0,149,246);">Désactiver temporairement mon compte.</a></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <script src="assets/script.js"></script>
        </body>
    </html>