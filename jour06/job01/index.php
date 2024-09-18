<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>La Plateforme_</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://laplateforme.io/">LPTF</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
            <a class="nav-link" href="#">Units</a>
            <a class="nav-link" href="#">Jobs</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Skills</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="container-fluid">

    <h1 class="text-center display-5">LaPlateforme_</h1>
    <section class="d-flex flex-column flex-md-row">
      <div class="card col-md-2">
        <img class="card-img-top img-fluid" src="image/papillon.jpg" alt="papillon">
        <div class="card-body">
          <h5 class="card-title">Un Papillon</h5>
          <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailes. Ne pas ingérer.</p>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#papillonModal">Commander votre propre papillon</a>
        </div>
      </div>


      <!-- Modale Bootstrap -->
      <div class="modal fade" id="papillonModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirmation d'achat</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Voulez-vous vraiment acheter un papillon ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
              <button type="button" class="btn btn-primary">Confirmer l'achat</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="recapModal" tabindex="-1" aria-labelledby="recapModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="recapModalLabel">Récapitulatif du formulaire</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p id="recap-email"></p>
              <p id="recap-password"></p>
            </div>
          </div>
        </div>
      </div>
      <!-- /Modale Bootstrap -->


      <div class="container col-md-7">
        <div class="jumbotron">
          <h1 class="display-4">Bonjour, monde!</h1>
          <p class="lead" id="jumbotron-text-1">Il existe plusieurs visions du terme:</p>
          <p class="lead" id="jumbotron-text-2">Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</p>
          <p class="lead" id="jumbotron-text-3">Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</p>
          <hr class="my-4">
          <p id="jumbotron-text-4">Le sens étendu désigne l'univers dans son ensemble.</p>
          <button type="button" id="reboot-button" class="btn btn-danger">Rebooter le monde</button>
          <div class="spinner-border text-danger" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>



          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#" data-page="1">1</a></li>
              <li class="page-item"><a class="page-link" href="#" data-page="2">2</a></li>
              <li class="page-item"><a class="page-link" href="#" data-page="3">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      </div>

      <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
        <label class="btn btn-outline-primary" for="vbtn-radio1">Limbes</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
        <label class="btn btn-outline-secondary" for="vbtn-radio2">Luxure</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
        <label class="btn btn-outline-secondary" for="vbtn-radio3">Gourmandise</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio4" autocomplete="off">
        <label class="btn btn-outline-secondary" for="vbtn-radio4">Avarice</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio5" autocomplete="off">
        <label class="btn btn-outline-secondary" for="vbtn-radio5">Colere</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio6" autocomplete="off">
        <label class="btn btn-outline-secondary" for="vbtn-radio6">Heresie</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio7" autocomplete="off">
        <label class="btn btn-outline-secondary" for="vbtn-radio7">Violence</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio8" autocomplete="off">
        <label class="btn btn-outline-secondary" for="vbtn-radio8">Ruse et Tromperie</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio9" autocomplete="off">
        <label class="btn btn-outline-secondary" for="vbtn-radio9">Trahison</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio10" autocomplete="off">
        <label class="btn btn-outline-secondary" for="vbtn-radio10">Internet Explorer</label>
      </div>
    </section>

    <div class="container" style="margin-top: 30px;">
      <div class="row">
        <div class="col-md-3 offset-md-9 text-md-right">
          <p>Installation de AI 9000</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="d-flex justify-content-between align-items-center" style="max-width: 800px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5" />
            </svg>
            <div class="progress w-100" style="height: 20px;">
              <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8m-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="mt-5">
    <section class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Recevez votre copie gratuite d'internet 2!</p>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Login" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Mot de passe" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">@example.com</span>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Doge Coin</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-text">.00</span>
          </div>
          <div class="input-group">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
          </div>
        </div>

        <div class="col-md-6">
          <div class="row justify-content-end">
            <div class="col-md-6">
              <p>Email address</p>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <p>We'll never share your email with anyone else</p>
              <p>Password</p>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Check me out
                </label>
              </div>
              <button type="button" id="form-submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </section>

  </footer>

  <!-- CSS Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- JS Bootstrap et dépendances -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    const citations = [
      "J'ai vu tant de choses que vous, humains, ne pourriez pas croire.",
      "Les larmes se perdront dans la pluie.",
      "Tous ces moments se perdront dans le temps, comme des larmes dans la pluie.",
      "C'est dommage qu'elle doive vivre, mais tout le monde doit mourir un jour.",
      "La lumière qui brûle deux fois plus fort brûle deux fois moins longtemps.",
      "Je ne savais pas combien de temps nous avions ensemble. Qui le sait jamais ?"
    ];

    function getRandomCitation() {
      const randomIndex = Math.floor(Math.random() * citations.length);
      return citations[randomIndex];
    }

    document.getElementById('reboot-button').addEventListener('click', function() {
      document.getElementById('jumbotron-text-1').textContent = getRandomCitation();
      document.getElementById('jumbotron-text-2').textContent = getRandomCitation();
      document.getElementById('jumbotron-text-3').textContent = getRandomCitation();
      document.getElementById('jumbotron-text-4').textContent = getRandomCitation();
    });
    // Tableau contenant le contenu pour chaque page
    const jumbotronContent = {
      1: {
        title: "Bienvenue sur la page 1",
        text1: "Voici le contenu initial du jumbotron pour la première page.",
        text2: "Ce texte changera en fonction de la page sélectionnée."
      },
      2: {
        title: "Bienvenue sur la page 2",
        text1: "Ceci est le contenu pour la deuxième page du jumbotron.",
        text2: "Chaque page affiche un texte différent pour montrer la pagination."
      },
      3: {
        title: "Bienvenue sur la page 3",
        text1: "Voici le contenu de la troisième page du jumbotron.",
        text2: "Utilisez les boutons de pagination pour explorer chaque page."
      }
    };

    function updateJumbotron(page) {
      const content = jumbotronContent[page];
      document.querySelector('.jumbotron h1').textContent = content.title;
      document.querySelectorAll('.lead')[0].textContent = content.text1;
      document.querySelectorAll('.lead')[1].textContent = content.text2;
      document.querySelectorAll('.lead')[2].textContent = content.text2; // Ajoute cette ligne pour le 3ème texte
    }


    // Ajouter un événement au clic sur les liens de pagination
    document.querySelectorAll('.page-link').forEach(function(link) {
      link.addEventListener('click', function(event) {
        event.preventDefault();
        const page = this.getAttribute('data-page');
        updateJumbotron(page); // Mise à jour du jumbotron selon la page sélectionnée
      });
    });

    let progress = 75; // Pourcentage initial
    const $progressBar = $('.progress-bar');

    $('.bi-arrow-bar-left').click(function() {
      if (progress > 0) {
        progress -= 5;
        $progressBar.css('width', `${progress}%`).attr('aria-valuenow', progress);
      }
    });

    $('.bi-arrow-bar-right').click(function() {
      if (progress < 100) {
        progress += 5;
        $progressBar.css('width', `${progress}%`).attr('aria-valuenow', progress);
      }
    });

    let keySequence = [];
    const validSequence = ['d', 'g', 'c'];

    $(document).on('keydown', function(e) {
      keySequence.push(e.key.toLowerCase());
      if (keySequence.slice(-3).join('') === validSequence.join('')) {
        $('#recapModal').modal('show'); // Afficher la modale lorsque l'ordre est correct
        keySequence = []; // Réinitialiser après l'ouverture de la modale
      }
    });

    $('#form-submit').click(function(e) {
      e.preventDefault();
      const email = $('input[placeholder="Login"]').val();
      const password = $('input[placeholder="Mot de passe"]').val();

      if (!email && !password) {
        const colors = ['text-primary', 'text-success', 'text-danger', 'text-warning', 'text-info'];
        const randomColor = colors[Math.floor(Math.random() * colors.length)];

        $('.spinner-border').removeClass('text-primary text-success text-danger text-warning text-info').addClass(randomColor);
      }
    });
  </script>


</body>

</html>