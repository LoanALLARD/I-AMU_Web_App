<?php
    include __DIR__ . '/../layout/header.php';
    use App\core\Translation;
?>

<body>
    <main>
        <div class="form-container">
            <div class="form-title"><?= Translation::get("register.form.title") ?></div>
            <form method="POST" action="/index.php?url=register/register">
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
                    <label for="email"><?= Translation::get("register.form.email.title") ?></label>
                    <input type="text" id="email" name="email" required placeholder=<?= Translation::get("register.form.email.input.placeholder") ?>>
                </div>
                <div class="form-group">
                    <label for="password"><?= Translation::get("register.form.password.title") ?></label>
                    <input type="password" id="password" name="password" required placeholder="**********">
                </div>
                <div class="form-group">
                    <label for="confirm_password"><?= Translation::get("register.form.confirmPassword.title") ?></label>
                    <input type="password" id="confirm_password" name="confirm_password" required
                        placeholder="**********">
                </div>
                <button class="form-submit" type="submit"><?= Translation::get("register.form.registerButton.title") ?></button>
            </form>
            <a class="form-link" href="/login"><?= Translation::get("register.form.alreadyRegistered.placeholder") ?></a>
        </div>
    </main>
    <?php include __DIR__ . '/../layout/footer.php'; ?>
</body>

</html>