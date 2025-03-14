<?php
function renderConnexion($message)
{
    ob_start();
    ?>
    <main>
        <section class="formContainer">
            <section class="formWrapper">
                <article class="cardFormWrapper">
                    <p><?php echo $message ?></p>
                    <article class="cardFormHeader">
                        <article id="forLogin" class="formHeader active">
                            Se connecter
                        </article>
                        <article id="forRegister" class="formHeader">
                            S'inscrire
                        </article>
                    </article>
                    <article class="cardFormBody" id="formContainer">
                        <form id="formLogin" action="" method="post">
                            <input type="email" name="login" class="formControl" placeholder="Votre email" />
                            <input type="password" name="password" class="formControl" placeholder="Votre mot de passe" />
                            <input type="hidden" name="action" value="login" />
                            <button type="submit" name="submit_connexion" class="formButton">Se connecter</button>
                        </form>
                        <p>
                            <a href="/controller/resetPassword.php">Mot de passe oublié ?</a>
                        </p>
                        <form class="toggleForm" id="formRegister" action="" method="post">
                            <input type="email" name="login" class="formControl" placeholder="Email *" required />
                            <input type="text" name="nom" class="formControl" placeholder="Nom *" required />
                            <input type="text" name="prenom" class="formControl" placeholder="Prénom *" required />
                            <input type="text" name="pseudo" class="formControl" placeholder="Pseudo *" required />
                            <!-- <input type="text" id="date" onfocus="(this.type='date')" onblur="(this.type='text')"
                                name="date_de_naissance" class="formControl" placeholder="Date de naissance " /> -->
                            <input type="text" id="date" name="date_de_naissance" class="formControl"
                                placeholder="Date de naissance" />
                            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                            <script>
                                flatpickr("#date", {
                                    dateFormat: "Y-m-d",
                                    allowInput: true
                                });
                            </script>
                            <input type="text" name="adresse" class="formControl" placeholder="Adresse" />
                            <input type="text" name="code_postal" class="formControl" placeholder="Code postal" />
                            <input type="text" name="pays" class="formControl" placeholder="Pays" />
                            <input type="text" name="ville" class="formControl" placeholder="Ville" />
                            <input type="tel" name="telephone" class="formControl" placeholder="Téléphone" />
                            <input type="text" name="genre" class="formControl" placeholder="Genre" />
                            <input type="password" name="password" class="formControl" placeholder="Mot de passe *"
                                required />
                            <input type="password" name="password_confirm" class="formControl"
                                placeholder="Confirmer le mot de passe *" required />
                            <button class="formButton" type="submit" name="submit_register">
                                Inscription
                            </button>
                        </form>
                    </article>
                </article>
            </section>
        </section>
    </main>
    <?php
    return ob_get_clean();
}