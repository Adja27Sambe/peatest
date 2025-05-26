
  <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Éducation Numérique</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Lien vers Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Lien vers Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    .hero-section {
      background-color:rgb(241, 170, 5);; /* Couleur d'arrière-plan similaire à l'image */
      color: white;
    
    }
    .hero-text {
      font-size: 50px;
      font-weight: 800;
    }
    .btn-custom {
      background-color:rgb(0, 0, 0);
      border: none;
    }
    .hero-img {
      width: 100%;
      height: auto;
    }
.carousel-item {
  position: relative;
}

.carousel-image-wrapper {
  max-height: 700px;
  overflow: hidden;
}

.carousel-image {
  width: 50%;
  height: 700px;
  object-fit: cover;
  transition: transform 5s ease;
}

.carousel-item.active .carousel-image {
  transform: scale(1.05); /* effet zoom léger sur l’image active */
}

/* Centrage plus harmonieux du texte */
.carousel-caption {
  background: rgba(0, 0, 0, 0.6);
  padding: 30px;
  border-radius: 12px;
  bottom: 15%;
  left: 50%;
  transform: translateX(-50%);
  width: 80%;
  max-width: 700px;
  text-align: center;
}

.carousel-caption h5 {
  font-size: 2.4rem;
  font-weight: 700;
  color: #fff;
}

.carousel-caption p {
  font-size: 1.2rem;
  color: #e0e0e0;
  margin-bottom: 20px;
}

.carousel-caption .btn {
  background-color: #ffffff;
  color:rgb(69, 43, 3);
  border: 2px solidrgb(69, 43, 3);
  padding: 10px 25px;
  font-size: 1.1rem;
  border-radius: 8px;
  font-weight: 500;
  transition: all 0.3s ease;
}

.carousel-caption .btn:hover {
  background-color: rgb(69, 43, 3);
  color: #fff;
  border-color: rgb(69, 43, 3);
}



    .cycle-card, .langue-card, .matiere-card {
      text-align: center;
      padding: 1rem;
      border-radius: 10px;
      width:80%;
    }
    .cycle-icon {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }
    .testimonial {
      background-color:rgb(69, 43, 3);
      color: white;
      padding: 2rem;
      text-align: center;
    }
    .footer-section {
      padding: 1rem 0;
      text-align: center;
      background-color:rgba(82, 50, 3, 1);
    }
    .nav-color {
      background-color:rgba(82, 50, 3, 0.73);
    }
    .nav-text {
      color:#ffffff;
      font-weight: 500;
      font: size 10px;
    }
    .nav-item {
      font-weight: 500;
     margin: right 400px;
    }
    .nav-link{
      color:white;
    }
    .jaune{
      color:rgb(251, 214, 5);
    }
    .btn-haut{
      background-color: #ffffff;
      color:rgb(69, 43, 3);
    }
    .btn-fleche{
      background-color: #ffffff;
      color:rgb(69, 43, 3);
    }
    .card {
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 30px;
      border: none;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    
    .card:hover {
      transform: translateY(-5px);
    }
    
    .image-container {
      height: 400px;
      overflow: hidden;
      position: relative;
    }
    
    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .level-tag {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: rgb(69, 43, 3);
      color: white;
      padding: 8px 15px;
      font-weight: 600;
      display: flex;
      align-items: center;
    }
    .level-tagm {
      color: white;
      background-color: rgb(69, 43, 3);
     
    }
    
    .level-tag i {
      margin-right: 8px;
    }
    
    .card-body {
      padding: 20px;
      text-align: center;
    }
    
    .btn-outline-success {
      border: 2px solid #4a5240;
      color: #4a5240;
      font-weight: 600;
      padding: 8px 16px;
      border-radius: 30px;
      transition: all 0.3s;
      text-transform: uppercase;
      font-size: 14px;
    }
    
    .btn-outline-success:hover {
      background-color: #4a5240;
      color: white;
    }
    
    .grades {
      font-size: 18px;
      color: #555;
      margin-bottom: 20px;
    }
    
    .main-title {
      margin-bottom: 50px;
      color: #333;
      font-weight: 700;
    }
    .logo{
      width: 5%;
    }
    .hero-img {
      width: 400px;
      height: 400px;
    }
    h3 {
      color: #ffffff;
    }
    .whatsapp-float {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #25D366;
  color: white;
  border-radius: 50%;
  padding: 15px;
  font-size: 3  4px;
  z-index: 1000;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  transition: background-color 0.3s ease;
}
.whatsapp-float:hover {
  background-color:rgb(62, 202, 27);
  color: white;
  text-decoration: none;
}
.size{
  size: 5px;
}

h9{
  font-size: 14px;
  color:#ffffff;
  text-align:justify;

}
p1{
  color:rgb(245, 225, 3);
  text-align:right;
}
address{
  color:rgb(251, 251, 251);
  font-size:14px;
}

  </style>
</head>
<!-- Bouton WhatsApp flottant -->
<a href="https://wa.me/221775516941" 
   class="whatsapp-float" 
   target="_blank" 
   title="Contactez-nous sur WhatsApp">
  <i class="bi bi-whatsapp"></i>
</a>

<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg nav-color fixed-top">
  <div class="container"><img src="images/logo.jpeg" class="img rounded-circle logo">
  &nbsp; &nbsp;
    <a class="navbar-brand nav-text" href="#">ÉTOILES D'AFRIQUE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
     
    <a href="#" class="btn btn-outline-primary">
      <i class="bi bi-facebook size"></i>
    </a>&nbsp;
    <a href="#" class="btn btn-outline-info">
      <i class="bi bi-twitter size"></i>
    </a>&nbsp;
    <a href="#" class="btn btn-outline-danger">
      <i class="bi bi-instagram size"></i>
    </a>&nbsp;
    <a href="#" class="btn btn-outline-primary">
      <i class="bi bi-linkedin size"></i>
    </a>
</li> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        <li class="nav-item">
          <a class="nav-link  jaune" aria-current="page" href="#">ACCUEIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Á PROPOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">NOS SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">BLOG</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACTS</a>
        </li>
        &nbsp;&nbsp;&nbsp;
    <li class="nav-item">
    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#authModal">
  <i class="bi bi-person-fill"></i>&nbsp;Se Connecter
</button>
        </li>
       
       
      </ul>
    </div>
  </div>
</nav>


  <!-- Carousel Slider -->
   
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img3.jpeg" class="d-block w-100" height="700" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bienvenue sur notre plateforme</h5>
        <p> Découvrez un monde d'opportunités et d'innovation.</p>
        
        <a href="inscription.html" class=" btn btn-haut">
        <i class=""></i>&nbsp;CREER UN COMPTE
        </a>
      
        </div>
        </div>
   
    <div class="carousel-item">
      <img src="images/etudiant.jpg" class="w-100" height="700" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Rejoignez notre communauté</h5>
        <p>Partagez, apprenez et grandissez avec nous.</p>   
        <a href="inscription.html" class=" btn btn-haut">
  <i class=""></i>CREER UN COMPTE
</a>
        </li>
       
 </div>
 
    </div>
   
   
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Précédent</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Suivant</span>
  </button>
</div>
 
<!-- Section avec Carousel et Texte côte à côte -->
<div class="container-fluid">
  <div class="row">
   
    <!-- Nouvelle Colonne à côté -->
    <div class="col-md-6 d-flex align-items-center justify-content-center bg-light p-4">
      <div>
        <h2 class="text-dark fw-bold">Pourquoi choisir Étoiles d’Afrique ?</h2>
        <p class="text-muted">
          Notre plateforme allie pédagogie innovante et outils numériques pour offrir une expérience éducative enrichissante.
        </p>
        <ul class="list-unstyled text-dark">
          <li><i class="bi bi-check-circle-fill text-success"></i> Cours interactifs et adaptés</li>
          <li><i class="bi bi-check-circle-fill text-success"></i> Accès en ligne 24h/24</li>
          <li><i class="bi bi-check-circle-fill text-success"></i> Suivi personnalisé des élèves</li>
        </ul>
        <a href="inscription.html" class="btn btn-dark mt-3">CREER UN COMPTE</a>
      </div>
    </div>
     <!-- Colonne du Carousel -->
     <div class="col-md-6">
     <iframe width="700" height="400" src="https://www.youtube.com/embed/n5sAIbmhMjM?si=wEmP_AID2xRo04gF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

  </div>
</div>

<!-- Hero Section 
  <div class="container-fluid hero-section">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
        <p class="hero-text">
          Faites briller l’étoile 
          de votre enfant grâce<br>
          à l’éducation numérique
        </p>
        <a href="#" class="btn btn-custom text-white mt-3">CREER UN COMPTE</a>
      </div>
      -->
      <!-- Image 
      <div class="col-md-6 text-center">
        <img src="images/img2.png" alt="Fille avec ordinateur" class="hero-img rounded">
      </div>
    </div>
  </div>
</div>
-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Modal Connexion / Inscription -->
  <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="authModalLabel">Connexion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="email" class="form-label">Nom d'utilisateur ou Adresse e-mail</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-warning w-30"> <i class="bi bi-person-fill"></i>Se connecter</button>
          &nbsp; <a href="#">Créer un compte</a>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Cycles Scolaires -->
  <div class="container py-5">
    <h1 class="main-title">Nos programmes</h1>
    
    <div class="row">
      <!-- Le Primaire -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="image-container">
            <img src="images/img5.jpeg" alt="Élèves du primaire travaillant ensemble sur un ordinateur portable">
            <div class="level-tag text-center">
              <i class="fas fa-school"></i> <H5>CYCLES SCOLAIRES</H5>
            </div>
          </div>
          <div class="card-body">
            <p class="grades">PRIMAIRE-MOYEN-LYCÉE</p>
            <a href="#" class="btn btn-warning">DÉCOUVRIR</a>
          </div>
        </div>
      </div>
      
      <!-- Le Moyen -->
      <div class="col-lg-4 col-md-6 mb-4">
  <div class="card">
    <div class="image-container position-relative">
      <img src="images/EACOURSSPORTS.JPG" class="img-fluid">
      
    
      <div class="level-tag text-center">
        <i class="fas fa-book"></i> <h5>SPORT</h5>
      </div>
    </div>
    <div class="card-body">
      <p class="grades">SUIVI & CONSEILS NUTRITIONNELS</p>
      <a href="#" class="btn btn-warning">DÉCOUVRIR</a>
    </div>
  </div>
</div>

      
      <!-- Le Lycée -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="image-container">
            <img src="images/coup-moyen.jpg">
            <div class="level-tag text-center">
              <i class="fas fa-graduation-cap"></i>
              <H5>LANGUES</H5>
            </div>
          </div>
          <div class="card-body">
            <p class="grades">NATIONALES & INTERNATIONALES</p>
            <a href="#" class="btn btn-warning">DÉCOUVRIR</a>
          </div>
        </div>
      </div>
      <!-- Hero Section -->
  <div class="container-fluid hero-section">
  <div class="container">
    
    <div class="row align-items-center">

      <!-- Image -->
      <div class="col-md-6 text-center text-md-start mb-4 mb-md-0 rounded">
        <br>
      <iframe width="600" height="400" src="https://www.youtube.com/embed/n5sAIbmhMjM?si=wEmP_AID2xRo04gF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
      <!-- Texte -->
      <div class="col-md-6 text-center text-md-start mb-4 mb-md-0">
        <p class="hero-text">
          Comment s'inscrire et commencer les cours en ligne
          
        </p>
        <a href="#" class="btn btn-custom text-white mt-3">CREER COMPTE</a>
      </div>

    </div>
  </div>
</div>

  <!--matieres-->

  <h1 class="main-title py-3">Matières enseignées</h1>
  <div class="row"></div>
  <div class="card" style="width: 16rem;">
  <div class="card-header level-tagm">
   <h5>CYCLE MOYEN</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Français/Anglais</li>
    
    <li class="list-group-item">Mathématiques</li>
    <li class="list-group-item">Physique & Chimie</li>
  </ul>
</div>
<div class="card" style="width: 17rem;">
  <div class="card-header level-tagm">
  <h5>SÉRIE LITTÉRAIRE</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Français/Anglais/LV2</li>
   <li class="list-group-item">Economie/Philosophie</li>
    <li class="list-group-item">Histoire/Géographie</li>
    </ul>
</div>

<div class="card" style="width: 17rem;">
  <div class="card-header level-tagm">
  <h5>SERIE SCIENTIFIQUE</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Mathématiques</li>
    <li class="list-group-item">Physique & Chimie</li>
    <li class="list-group-item">SVT</li>
  </ul>
</div>
<div class="card" style="width: 16rem;">
  <div class="card-header level-tagm">
  <H5>STEG</H5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Comptabilité</li>
    <li class="list-group-item">Economie</li>
    <li class="list-group-item">Mathématiques</li>
  </ul>
</div>
<div class="card" style="width: 16rem;">
  <div class="card-header level-tagm">
 <H5>CYCLE ELÉMENTAIRE</H5>  
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Mathématiques</li>
    <li class="list-group-item">Langue et Communication</li>
  </ul>
</div>
 </div>
  </div>
  </div>

   <!-- Matières enseignées -->
  <!--  <div id="matieres" class="container my-5">
    <h1 class="main-title">Matières enseignées</h1>
    <div class="row text-center">
      <div class="col-md-3">
        <div class="matiere-card bg-light">
          <h6>Mathématiques</h6>
        </div>
      </div>
      <div class="col-md-3">
        <div class="matiere-card bg-light">
          <h6>Français</h6>
        </div>
      </div>
      <div class="col-md-3">
        <div class="matiere-card bg-light">
          <h6>Sciences</h6>
        </div>
      </div>
      <div class="col-md-3">
        <div class="matiere-card bg-light">
          <h6>Histoire-Géo</h6>
        </div>
      </div>
    </div>
  </div>-->
  <!-- Langues Nationales -->
  <section class="team-section py-5 bg-light">
  <div class="container">
    <h1 class="text-center mb-5">Nos Professeurs</h1>
    <div class="row">
      
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <img src="images/visuel1.jpg" class="card-img-top" alt="Claire Dubois">
          <div class="card-body">
            <h5 class="card-title">Claire Dubois</h5>
            <p class="card-text">Coach Nutritionniste</p>
            <p class="text-muted">Spécialisée en suivi alimentaire personnalisé et bien-être.</p>
            <div class="star-rating text-warning mb-2">
              ★★★★★
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <img src="images/visuel1.jpg" class="card-img-top" alt="Yann Lefèvre">
          <div class="card-body">
            <h5 class="card-title">Yann Lefèvre</h5>
            <p class="card-text">Préparateur Physique</p>
            <p class="text-muted">Expert en entraînement sportif et performance.</p>
            <div class="star-rating text-warning mb-2">
              ★★★★☆
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <img src="images/visuel1.jpg" class="card-img-top" alt="Sophie Martin">
          <div class="card-body">
            <h5 class="card-title">Sophie Martin</h5>
            <p class="card-text">Conseillère Bien-être</p>
            <p class="text-muted">Passionnée par l’accompagnement holistique et la motivation.</p>
            <div class="star-rating text-warning mb-2">
              ★★★★★
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card text-center">
          <img src="images/visuel1.jpg" class="card-img-top" alt="Sophie Martin">
          <div class="card-body">
            <h5 class="card-title">Sophie Martin</h5>
            <p class="card-text">Conseillère Bien-être</p>
            <p class="text-muted">Passionnée par l’accompagnement holistique et la motivation.</p>
            <div class="star-rating text-warning mb-2">
              ★★★★★
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



 

  <!-- Témoignage -->
  <div id="temoignage" class="testimonial">
  <h3>Témoignages</h3>
    <div class="container">
      <img src="images/logo.jpeg" class="rounded-circle mb-3" width="80" alt="Awa">
      <blockquote>
        <p>« Les cours en ligne m’ont beaucoup aidée à améliorer mes résultats scolaires. »</p>
        <footer class="blockquote-footer text-white">Awa</footer>
      </blockquote>
    </div>
  </div>
      <!--blog -->
      <!-- Section Blog -->
<div class="container py-5">
<h1 class="main-title">Derniers articles du blog</h1>
  <div class="row">
    
    <!-- Article 1 -->
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="images/img4.jpeg" class="card-img-top" alt="Article 1">
        <div class="card-body">
          <h5 class="card-title">L’éducation numérique : un levier pour l’Afrique</h5>
          <p class="card-text">Découvrez comment les nouvelles technologies transforment les méthodes d’apprentissage en Afrique.</p>
          <a href="blog1.html" class="btn btn-outline-success">Lire plus</a>
        </div>
      </div>
    </div>

    <!-- Article 2 -->
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="images/img1.jpeg" class="card-img-top" alt="Article 2">
        <div class="card-body">
          <h5 class="card-title">5 astuces pour réussir ses cours en ligne</h5>
          <p class="card-text">Motivation, organisation, outils numériques... Nos conseils pour tirer le meilleur de l’apprentissage à distance.</p>
          <a href="blog2.html" class="btn btn-outline-success">Lire plus</a>
        </div>
      </div>
    </div>

    <!-- Article 3 -->
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="images/img2.jpeg" class="card-img-top" alt="Article 3">
        <div class="card-body">
          <h5 class="card-title">L’importance de l’enseignant dans l’e-learning</h5>
          <p class="card-text">Même avec la technologie, le rôle du professeur reste crucial. On vous explique pourquoi.</p>
          <a href="blog3.html" class="btn btn-outline-success">Lire plus</a>
        </div>
      </div>
    </div>
    <div class="text-center mt-4">
    <a href="blog.html" class="btn btn-warning px-4 py-2">
      <i class="bi bi-plus-circle"></i> Plus d’articles
    </a>
  </div>
</div>
  </div>
</div>

  <!-- Footer Sections -->
  <div id="contact" class="container-fluid footer-section py-4">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 mb-3 mb-lg-0">
          <h3>Nos Contacts</h3>
          <address>
            <i class="bi bi-phone me-2"></i> +221 77 551 69 41<br>
            <i class="bi bi-telephone me-2"></i> +221 33 854 29 99<br>
            <i class="bi bi-envelope me-2"></i> infos@etoilesdafrique.com<br>
            <i class="bi bi-house-fill me-2"></i> Villa N° 133, Cité Aliou Sow, Mbao Face LGI
          </address>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <h3>Suivez-nous</h3>
          <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-outline-light me-2" title="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="btn btn-outline-light me-2" title="Twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="btn btn-outline-light me-2" title="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="btn btn-outline-light" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-4">
          <h3>Newsletter</h3>
          <p>Restez informé de nos dernières actualités et offres !</p>
          <form class="row g-2">
            <div class="col-md-8">
              <input type="email" class="form-control" placeholder="Votre adresse e-mail" required>
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-warning w-100">S'inscrire</button>
            </div>
          </form>
        </div>

      </div>
      <hr class="mt-3 mb-2 border-light">
      <p class="text-center text-white mb-0">© 2025 Étoiles d'Afrique. Tous droits réservés.</p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
