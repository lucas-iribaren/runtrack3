async function jsonValueKey(jsonFilePath, key) {
    try {
        const response = await fetch(jsonFilePath);
        
        if (!response.ok) {
            throw new Error(`Erreur HTTP: ${response.status}`);
        }
        
        const jsonObject = await response.json();
        
        return jsonObject[key] !== undefined ? jsonObject[key] : null;
    } catch (error) {
        console.error("Erreur de traitement JSON:", error);
        return null;
    }
}

jsonValueKey('data.json', 'city')
    .then(value => console.log(value))  // "Marseille"
    .catch(error => console.error(error));
