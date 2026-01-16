<?php
    include __DIR__ . '/../layout/header.php';
    use App\core\Translation;
?>

<body>
    <main>
        <div class="form-container">
            <div class="form-title"><?= Translation::get("login.form.title") ?></div>
            <form method="POST" action="/index.php?url=login/login">
                <?php if (isset($errorMessage)): ?>
                    <div class="alert alert-error">
                        <?= htmlspecialchars($errorMessage) ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($successMessage)): ?>
                    <div class="alert alert-success">
                        <?= htmlspecialchars($successMessage) ?>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="email"><?= Translation::get("login.form.email.title") ?></label>
                    <input type="text" id="email" name="email" required placeholder=<?= Translation::get("login.form.email.input.placeholder") ?>>
                </div>
                <div class="form-group">
                    <label for="password"><?= Translation::get("login.form.password.title") ?></label>
                    <input type="password" id="password" name="password" required placeholder="**********">
                </div>
                <button class="form-submit" type="submit"><?= Translation::get("login.form.loginButton.title") ?></button>
            </form>
            <a class="form-link" href="/register"><?= Translation::get("login.form.notRegister.placeholder") ?></a>
            <a class="form-link" href="/forgottenpassword"><?= Translation::get("login.form.forgottenPassword.placeholder") ?></a>
        </div>
    </main>
    <?php include __DIR__ . '/../layout/footer.php'; ?>
</body>

</html>