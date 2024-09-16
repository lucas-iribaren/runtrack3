<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Inscription</h1>
    <form id="inscriptionForm">
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
            <span id="nomError" class="error"></span>
        </div>
        <div>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
            <span id="prenomError" class="error"></span>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span id="emailError" class="error"></span>
        </div>
        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
            <span id="passwordError" class="error"></span>
        </div>
        <div>
            <label for="confirmPassword">Confirmez le mot de passe:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
            <span id="confirmPasswordError" class="error"></span>
        </div>        
        <button type="submit">S'inscrire</button>
    </form>
    <script src="inscription.js"></script>
</body>
</html>
