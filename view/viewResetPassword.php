<?php
function renderResetPasswordForm($message = '')
{
    ob_start();
    ?>
    <main>
        <section class="formContainer">
            <h1>Réinitialisation du mot de passe</h1>
            <?php if (!empty($message)): ?>
                <p class="message"><?php echo $message; ?></p>
            <?php endif; ?>

            <form action="" method="post" class="formStyle">
                <div class="formGroup">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <button type="submit" name="submit_reset" class="formButton">Réinitialiser le mot de passe</button>
            </form>
            <p>
                <a href="/controller/connexion.php">Retour à la connexion</a>
            </p>
        </section>
    </main>
    <?php
    return ob_get_clean();
}

function renderResetPasswordFormWithToken($token, $message = '')
{
    ob_start();
    ?>
    <main>
        <section class="formContainer">
            <h1>Nouveau mot de passe</h1>
            <?php if (!empty($message)): ?>
                <p class="message"><?php echo $message; ?></p>
            <?php endif; ?>

            <form action="" method="post" class="formStyle">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
                <div class="formGroup">
                    <label for="new_password">Nouveau mot de passe :</label>
                    <input type="password" name="new_password" id="new_password" required>
                </div>
                <div class="formGroup">
                    <label for="confirm_password">Confirmer le mot de passe :</label>
                    <input type="password" name="confirm_password" id="confirm_password" required>
                </div>
                <button type="submit" name="submit_new_password" class="formButton">Changer le mot de passe</button>
            </form>
        </section>
    </main>
    <?php
    return ob_get_clean();
}
?>