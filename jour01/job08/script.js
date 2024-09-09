function nombrePremier(nb) {
    if (nb <= 1) {
        return false;
    }
    for (let i = 2; i <= Math.sqrt(nb); i++) {
        if (nb % i === 0) {
            return false;
        }
    }
    return true;
}

function sommeNombresPremiers(nb1, nb2) {
    if (nombrePremier(nb1) && nombrePremier(nb2)) {
        return nb1 + nb2;
    } else {
        return false;
    }
}

console.log(sommeNombresPremiers(3, 5)); 
console.log(sommeNombresPremiers(4, 7)); 