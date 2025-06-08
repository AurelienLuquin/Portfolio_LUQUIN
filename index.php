<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - BUT GEII Luquin Aurélien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#GEII">BUT GEII</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projets">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#competences">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experiences">Expériences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Coordonnées</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header>
        <div class="headerCont">
        <h1>Luquin Aurélien</h1>
        <p>Bienvenue sur mon Portfolio</p>
        <div class="mt-3">
            <a href="#contact" class="btn btn-light">Contactez-moi</a>
            <a href="https://www.linkedin.com/in/aur%C3%A9lien-luquin-333326326/" class="btn btn-primary ms-3" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>
    </div>
    </header>

    <!-- À propos de moi -->
<section id="about" class="py-5 bg-light">
    <br>
  <div class="container">
    <div class="row align-items-center">
      <!-- Photo -->
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <img src="image/photo.jpg" alt="Photo" class="img-fluid rounded-circle shadow" style="max-width: 250px;">
      </div>

      <!-- Texte de présentation -->
      <div class="col-md-8">
        <h2 class="text-primary mb-3">À propos de moi</h2>
        <p>Bonjour, je suis <strong>Luquin Aurélien</strong>, étudiant en 3e année du BUT Génie Électrique et Informatique Industrielle (GEII) à l’IUT Lyon 1, option <strong>Automatisme et Informatique Industrielle (AII)</strong>.</p>
        <p>Je suis actuellement à la recherche d’une <strong>alternance</strong> dans le domaine du <strong>Système Numérique Industriel</strong> pour intégrer l’école ECAM à la rentrée 2025.</p>
        <p>Ce portfolio présente mon parcours académique, mes projets réalisés, ainsi que les compétences développées au sein du BUT GEII. Vous pouvez consulter mon CV ci-dessous.</p>
        <a href="Candidature_Alternance_2025.pdf" target="_blank" class="btn btn-primary btn-lg mt-3 shadow">Mon CV</a>
      </div>
    </div>
  </div>
</section>

<!-- Mon Parcours -->
<section id="parcours" class="py-5" style="margin-bottom: 120px;">
  <div class="container">
    <h2 class="text-center text-primary mb-4">Mon Parcours</h2>
    <div class="row justify-content-center g-4">
      <!-- Collège -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card p-3 text-center shadow-sm h-100">
          <h5 class="text-primary">Collège</h5>
          <p>Collège Roger Vailland, Poncin<br><strong>Brevet des Collèges</strong><br>2015 - 2019</p>
        </div>
      </div>

      <!-- Lycée -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card p-3 text-center shadow-sm h-100">
          <h5 class="text-primary">Lycée</h5>
          <p>Lycée de la Plaine de l'Ain, Ambérieu-en-Bugey<br><strong>Bac Général<br>(Maths & Physique-Chimie)</strong><br>2019 - 2022</p>
        </div>
      </div>

      <!-- IUT -->
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card p-3 text-center shadow-sm h-100">
          <h5 class="text-primary">IUT</h5>
          <p>IUT Lyon 1, Villeurbanne<br><strong>BUT GEII (Option AII)</strong><br>2022 - 2025</p>
        </div>
      </div>

      <!-- Ecole D'ingenieur -->
            <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card p-3 text-center shadow-sm h-100">
          <h5 class="text-primary">Ecole d'Ingénieur</h5>
          <p>ECAM LaSalle, Campus de lyon<br><strong>Ingénieur Systèmes Numériques Industriels</strong><br>2025 - 2028</p>
        </div>
      </div>

    </div>
  </div>
</section>

    
            
            <!-- Présentation BUT GEII -->
    <section id="GEII" class="py-5 bg-light" style="background: url('images/bg-competences.jpg') no-repeat center/cover;">
        <div class="container">

                <br>
                <h2 class="text-center text-primary">Présentation du BUT GEII</h2>
                <br>
                <div class="row g-4">
                    <h5 class="text-primary">Qu'est-ce que le BUT GEII ?</h5>
                    <p>Le BUT GEII (Bachelor Universitaire de Technologie en Génie Électrique et Informatique Industrielle) est une formation de trois ans qui forme des techniciens supérieurs dans les domaines de l’électricité, de l’électronique, de l’automatique et de l’informatique industrielle. Cette formation polyvalente permet aux étudiants d’acquérir des compétences solides pour concevoir, développer et maintenir des systèmes automatisés, des réseaux électriques intelligents et des équipements électroniques.</p>
                    <p>Le BUT GEII est particulièrement apprécié pour son équilibre entre théorie et pratique, avec des projets concrets, des travaux en laboratoire et des périodes de stage en entreprise. Cela permet aux étudiants de se préparer efficacement à une insertion professionnelle rapide ou à la poursuite d’études.</p>
                </div>
    
    
                <!-- Options AII  -->
                <div class="row mt-5">
                    <div class="col-md-6">
                        <h5 class="text-primary">Option AII : Automatisme et Informatique Industrielle</h5>
                        <p>L'option AII du BUT GEII est idéale pour les étudiants souhaitant se spécialiser dans la conception, la programmation et la supervision de systèmes automatisés. Elle prépare aux métiers liés à l’automatisation des procédés industriels, à l’informatique embarquée et aux systèmes de contrôle/commande. Cette option permet de maîtriser les technologies utilisées dans les usines intelligentes et les équipements industriels modernes.</p>
                        <p><strong>Compétences développées :</strong></p>
                        <ul>
                            <li>Conception et programmation d’automatismes industriels (API, supervision).</li>
                            <li>Mise en œuvre de systèmes de contrôle/commande.</li>
                            <li>Intégration et maintenance de systèmes embarqués et communicants.</li>
                        </ul>
                        <p><strong>Exemples de métiers :</strong></p>
                        <ul>
                            <li>Automaticien</li>
                            <li>Technicien systèmes et réseaux</li>
                            <li>Technicien en informatique industrielle</li>
                        </ul>
                    </div>
    

                </div>
                
        </div>
    </section>
   

    <!-- Projets Section -->
    <section id="projets" class="section" style="margin-bottom: 120px;"><br>
        <div class="container">
            <h2 class="text-center text-primary">Projets</h2><br>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card mb-3 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Projet École : Programmer un site web dynamique en python Flask</h5>
                            <p class="card-text">Réalisation d'un site web d'installation de panneaux solaire. Le but est de pouvoir faire une simulation d'ensoleillement pour des entreprise qui souhaite installer des panneaux solaires.</p>
                            <ul>
                                <li>Programmation de l'interface du site</li>
                                <li>Gestion de la base de donnée</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Projet École : Automatisation d'un restaurant de hamburgers</h5>
                            <p class="card-text">Programmation d'un automate Schneider Eletric ainsi que d'un IHM pour simuler l'automatisation de hamburger. </p>
                            <ul>
                                <li>Programmation automate (UnityPro XL)</li>
                                <li>Programmation IHM</li>
                                <li>Mise en fonctionnement (tests et modifications)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Compétence du GEII -->
<section id="competences" class="py-5 bg-light" style="background: url('images/bg-competences.jpg') no-repeat center/cover;">
  <div class="container">
    <br>
    <h2 class="text-center text-primary">Compétences</h2><br>
    <br>
    <div class="row g-4">

      <!-- Concevoir -->
      <div class="col-6 col-md-3">
        <a href="concevoir.php" class="card skill-card text-decoration-none text-white">
          <img src="image/concevoir.jpg" class="card-img" alt="Concevoir">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <h5 class="card-title">Concevoir</h5>
          </div>
        </a>
      </div>

      <!-- Vérifier -->
      <div class="col-6 col-md-3">
        <a href="verifier.php" class="card skill-card text-decoration-none text-white">
          <img src="image/verifier.jpg" class="card-img" alt="Vérifier">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <h5 class="card-title">Vérifier</h5>
          </div>
        </a>
      </div>

      <!-- Maintenir -->
      <div class="col-6 col-md-3">
        <a href="maintenir.php" class="card skill-card text-decoration-none text-white">
          <img src="image/maintenir.png" class="card-img" alt="Maintenir">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <h5 class="card-title">Maintenir</h5>
          </div>
        </a>
      </div>

      <!-- Intégrer -->
      <div class="col-6 col-md-3">
        <a href="integrer.php" class="card skill-card text-decoration-none text-white">
          <img src="image/integrer.png" class="card-img" alt="Intégrer">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <h5 class="card-title">Intégrer</h5>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>
    <!-- Expériences Section -->
    <section id="experiences" class="section"><br>
        <div class="container">
            <h2 class="text-center text-primary">Expériences</h2><br>
            <div class="timeline mt-4">
               
                <div class="timeline-item shadow mb-4 p-4 card">
                    <h5 class="text-primary">Stage IS Maintenance</h5>
                    <p><strong>Technicien de maintenance</strong> (2024)</p>
                    <p>Retrofit d'une ligne multicouche pour l'entreprise ATI Isolation. Cahier des charges, schéma électrique, programmation Variateur de vitesse, programmation automate et IHM</p>
                </div>
                <div class="timeline-item shadow mb-4 p-4 card">
                    <h5 class="text-primary">Alternance SCENETEC</h5>
                    <p><strong>Technicien Reseaux</strong> (2024 - 2025)</p>
                    <p>Différent projet dans le monde scénique : gestion du circuit réseau Lumière/son, étude de différents projets, câblage d'armoires électrique, schéma électrique ...</p>
                </div>
                <div class="timeline-item shadow mb-4 p-4 card">
                    <h5 class="text-primary">Alternance EKIUM</h5>
                    <p><strong>Ingénieur Automatisme</strong> (2025 - 2028)</p>
                    <p>Différent projet d'automatisme : Réaliser l’analyse, la conception, le développement, les tests et la mise en service d’automatismes et de systèmes de supervision selon un cahier des charges...</p>
                </div>
              
            </div>
        </div>
    </section>


<!-- Section de contact -->

<section id="contact" class="section py-5 bg-light">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Contact</h2>
        <div class="row justify-content-center">
            <!-- Bloc centré pour les informations de contact -->
            <div class="col-md-6">
                <div class="bg-white shadow p-4 rounded text-center">
                    <h4 class="text-primary mb-3">Mes coordonnées</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <strong>Adresse :</strong> Lyon (69006)
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <strong>Téléphone :</strong> +33 7 83 75 88 09
                        </li>
                        <li>
                            <i class="bi bi-envelope text-primary me-2"></i>
                            <strong>Email :</strong> aurelien.luquin@etu.univ-lyon1.fr
                        </li>
                    </ul>
                    <a href="mailto:aurelien.luquin@etu.univ-lyon1.fr" class="btn btn-primary mt-3">M'écrire par mail</a>
                </div>
            </div>
        </div>
    </div>
</section>
    

    
    <footer>
        <p>&copy; Luquin Aurélien - Portfolio BUT GEII</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>