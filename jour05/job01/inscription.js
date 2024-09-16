document.getElementById('inscriptionForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const nom = document.getElementById('nom').value;
    const prenom = document.getElementById('prenom').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (nom.trim().length < 2) {
        document.getElementById('nomError').textContent = 'Le nom doit avoir au moins 2 caractères.';
        return;
    } else {
        document.getElementById('nomError').textContent = '';
    }

    if (prenom.trim().length < 2) {
        document.getElementById('prenomError').textContent = 'Le prénom doit avoir au moins 2 caractères.';
        return;
    } else {
        document.getElementById('prenomError').textContent = '';
    }

    if (!isValidEmail(email)) {
        document.getElementById('emailError').textContent = 'Veuillez saisir une adresse email valide.';
        return;
    } else {
        document.getElementById('emailError').textContent = '';
    }

    if (!isValidPassword(password)) {
        document.getElementById('passwordError').textContent = 'Le mot de passe doit contenir au moins 8 caractères, dont au moins 1 lettre, 1 chiffre et 1 caractère spécial.';
        return;
    } else {
        document.getElementById('passwordError').textContent = '';
    }

    if (password !== confirmPassword) {
        document.getElementById('confirmPasswordError').textContent = 'Les mots de passe ne correspondent pas.';
        return;
    } else {
        document.getElementById('confirmPasswordError').textContent = '';
    }

    this.submit();
});

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isValidPassword(password) {
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    return passwordRegex.test(password);
}
