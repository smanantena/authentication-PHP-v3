<?= (isset($message['usernamePassword'])) ? ("<p class=\"alert alert-danger\">{$message['usernamePassword']}</p>") : null ?>
<form method="<?= (isset($formMethod)) ? ($formMethod) : ("post") ?>" <?= (isset($formAction)) ? ("action=\"{$formAction}\"") : null ?>>
    <?= (isset($message['username'])) ? ("<p class=\"alert alert-danger\">{$message['username']}</p>") : null ?>
    <input class="form-controls" type="text" name="username" placeholder="Your username." <?= (isset($username)) ? "value=\"{$username}\"" : null ?>>
    <?= (isset($message['password'])) ? ("<p class=\"alert alert-danger\">{$message['password']}</p>") : null ?>
    <input class="form-controls" type="password" name="password" placeholder="Your password.">
    <button>Connect</button>
</form>