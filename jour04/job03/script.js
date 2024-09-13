let pokemonData = [];

        // Charger les données depuis un fichier JSON
        fetch('pokemon.json')
            .then(response => response.json())
            .then(data => {
                pokemonData = data;
            })
            .catch(error => {
                console.error('Erreur lors du chargement des données:', error);
            });

        // Fonction de filtrage
        function filterData() {
            const idInput = document.getElementById('id').value;
            const nameInput = document.getElementById('name').value.toLowerCase();
            const typeInput = document.getElementById('type').value;

            const filteredData = pokemonData.filter(pokemon => {
                const matchId = !idInput || pokemon.id == idInput;
                const matchName = !nameInput || pokemon.name.english.toLowerCase().includes(nameInput) || pokemon.name.french.toLowerCase().includes(nameInput);
                const matchType = !typeInput || pokemon.type.includes(typeInput);

                return matchId && matchName && matchType;
            });

            displayResults(filteredData);
        }

        function displayResults(data) {
            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = '';

            if (data.length === 0) {
                resultDiv.innerHTML = 'Aucun résultat trouvé.';
            } else {
                data.forEach(pokemon => {
                    resultDiv.innerHTML += `<p>ID: ${pokemon.id}, Nom: ${pokemon.name.french}, Types: ${pokemon.type.join(', ')}</p>`;
                });
            }
        }