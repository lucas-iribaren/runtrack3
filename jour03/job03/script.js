const images = [
    'image1.png', 'image2.png', 'image3.png', 'image4.png',
    'image5.png', 'image6.png', 'image7.png', 'image8.png', ''
];

let tiles = [];
let emptyTileIndex = 8; // L'index de la case vide
const board = document.getElementById('game-board');
const message = document.getElementById('message');
const resetBtn = document.getElementById('reset-btn');

// Initialisation du jeu
function initGame() {
    tiles = [...images];
    shuffleTiles();
    renderBoard();
    message.textContent = '';
    resetBtn.style.display = 'none';
}

// Mélange des cases
function shuffleTiles() {
    for (let i = tiles.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [tiles[i], tiles[j]] = [tiles[j], tiles[i]];
    }
    emptyTileIndex = tiles.indexOf('');
}

// Rendu de la grille de jeu
function renderBoard() {
    board.innerHTML = '';
    tiles.forEach((tile, index) => {
        const tileElement = document.createElement('div');
        tileElement.className = 'tile';
        if (tile === '') {
            tileElement.classList.add('hidden');
        } else {
            tileElement.style.backgroundImage = `url(${tile})`;
        }
        tileElement.addEventListener('click', () => handleTileClick(index));
        board.appendChild(tileElement);
    });
}

// Gestion du clic sur une case
function handleTileClick(index) {
    if (canMoveTile(index)) {
        [tiles[index], tiles[emptyTileIndex]] = [tiles[emptyTileIndex], tiles[index]];
        emptyTileIndex = index;
        renderBoard();
        if (checkWin()) {
            endGame();
        }
    }
}

// Vérification si une case peut être déplacée
function canMoveTile(index) {
    const rowEmpty = Math.floor(emptyTileIndex / 3);
    const colEmpty = emptyTileIndex % 3;
    const rowTile = Math.floor(index / 3);
    const colTile = index % 3;
    
    return (Math.abs(rowTile - rowEmpty) + Math.abs(colTile - colEmpty) === 1);
}

// Vérification si le joueur a gagné
function checkWin() {
    for (let i = 0; i < tiles.length - 1; i++) {
        if (tiles[i] !== images[i]) {
            return false;
        }
    }
    return true;
}

// Fin de partie et affichage du message de victoire
function endGame() {
    message.textContent = "Vous avez gagné !";
    message.style.color = 'green';
    resetBtn.style.display = 'block';
}

// Réinitialisation du jeu
resetBtn.addEventListener('click', initGame);

// Démarrage du jeu à l'initialisation
initGame();
