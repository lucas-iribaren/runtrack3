<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de tri</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Filtreur de Pokémon</h2>
    <form id="filterForm">
        <label for="id">ID :</label>
        <input type="text" id="id" name="id">
        <br><br>

        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">
        <br><br>

        <label for="type">Type :</label>
        <select id="type" name="type">
            <option value="">Choisissez un type</option>
            <option value="Normal">Normal</option>
            <option value="Grass">Plante</option>
            <option value="Poison">Poison</option>
            <option value="Fire">Feu</option>
            <option value="Water">Eau</option>
            <option value="Electric">Electrique</option>
            <option value="Flying">Vol</option>
            <option value="Ground">Sol</option>
            <option value="Fairy">Fée</option>
            <option value="Psychic">Psy</option>
            <option value="Fighting">Combat</option>
            <option value="Rock">Roche</option>
            <option value="Bug">Insecte</option>
            <option value="Steel">Acier</option>
            <option value="Ice">Glace</option>
            <option value="Ghost">Spectre</option>
            <option value="Dragon">Dragon</option>
        </select>
        <br><br>

        <input type="button" id='filterbtn' value="Filtrer" onclick="filterData()">
    </form>

    <h3>Résultats :</h3>
    <div id="result"></div>
</body>
</html>
