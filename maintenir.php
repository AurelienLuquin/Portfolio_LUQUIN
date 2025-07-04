<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Concevoir – Compétence GEII</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Portfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php#competences">Retour aux compétences</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Titre de page (hors section) -->
<section class="pt-5 mt-5 bg-white">
  <div class="bg-white py-5 border-bottom shadow-sm">
    <div class="container text-center">
      <h1 class="display-5 fw-bold text-primary mb-3">Assurer le maintien en condition opérationnelles d'un système</h1>
      <hr class="w-25 mx-auto text-primary opacity-75" style="height: 3px;">
    </div>
  </div>
</section>

<!-- SECTION 1 : procédure de maintenance -->
<section id="maintenance" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-primary text-center mb-4">Produire une procédure de maintenance</h2>
    <div class="row align-items-center">

      <!-- Texte à gauche -->
      <div class="col-md-7">
        <p>Dans le cadre de mon alternance chez <strong>SCENETEC</strong>, j’ai eu l’opportunité de produire une procédure de maintenance pour le <strong>Théâtre Nouvelle Génération</strong> à Vaise, dans la phase finale du chantier.</p>

        <p>Cette procédure était indispensable puisque SCENETEC n’était pas en charge de la maintenance future du site. J’ai donc dû rédiger un document clair et structuré à destination des exploitants, leur permettant de suivre les étapes nécessaires à une maintenance efficace et sécurisée.</p>

        <p>Le document que j’ai produit comportait plusieurs volets. D’une part, une <strong>partie serrurerie</strong> avec la vérification du serrage, graissage et état des moteurs et patiences. Ensuite, une <strong>partie électrique</strong> centrée sur les armoires moteurs (analyse visuelle, serrage), mais aussi sur les baies informatiques : switchs, ports Ethernet, alimentation, etc. Enfin, une <strong>partie test de fonctionnement</strong> sur scène, incluant les montées et descentes des patiences, et des vérifications de charge sur les prises de commande.</p>

        <p>Un exemple issu de cette procédure est présenté ci-dessous. Ce document détaille les actions concrètes à réaliser sur le terrain, comme les tests de fonctionnement des perches ou le contrôle du serrage des patiences. Il sert de support visuel aux techniciens pour mener à bien les maintenances régulières sur les installations scéniques.</p>

        <p>Cette mission m’a permis de mettre en œuvre un processus rigoureux répondant aux exigences techniques et de sécurité d’un site culturel, tout en respectant les normes professionnelles de rédaction et de communication.</p>

        <p class="mt-3"><strong>Conclusion :</strong> Cette expérience a renforcé ma capacité à formaliser des procédures claires et efficaces. J’ai su structurer les informations, m’adresser à différents interlocuteurs, et produire un document utile à long terme pour les exploitants du site. C’est une compétence précieuse que je pourrai réutiliser dans tous les environnements industriels ou techniques.</p>
      </div>

      <!-- Images à droite -->
      <div class="col-md-5 text-center">
        <img src="image/theatre-scene.jpg" alt="Scène du théâtre" class="img-fluid rounded shadow mb-3" style="width: 100%; max-width: 350px; height: auto;">
        <p class="text-muted">Perches du théâtre vues du haut</p>

        <img src="image/procedure.jpg" alt="Extrait procédure de maintenance" class="img-fluid rounded shadow mt-3" style="width: 100%; max-width: 350px; height: auto;">
        <p class="text-muted">Extrait du document de maintenance utilisé au théâtre</p>
      </div>

    </div>
  </div>
</section>




<!-- SECTION 2 : Proposer une solution de maintenance -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-primary text-center mb-5">Proposer une solution de maintenance</h2>

    <div class="row align-items-center">
      <!-- Images à gauche -->
      <div class="col-md-5 text-center mb-4 mb-md-0">
        <img src="image/solaris.jpg" alt="Conception logiciel" class="img-fluid rounded shadow mb-3" style="max-width: 90%; height: auto;">
        <p class="text-muted">Extrait de l’application web en cours de développement.</p>

        <img src="image/code.png" alt="Connexion Flask à base de données" class="img-fluid rounded shadow" style="max-width: 90%; height: auto;">
        <p class="text-muted">Capture illustrant la solution mise en œuvre pour rétablir l’accès à la base de données.</p>
      </div>

      <!-- Texte à droite -->
      <div class="col-md-7">
        <p>
          Lors d’un projet d’école, nous avions pour objectif de développer une application web en <strong>Flask</strong> dédiée aux technico-commerciaux dans le secteur du photovoltaïque.
          Ce projet intégrait à la fois la gestion client, les rôles utilisateurs, et la simulation énergétique à l’aide de bibliothèques Python comme <strong>PVLIB</strong>.
        </p>

        <p>
          Durant la phase de développement, notre groupe a rencontré un <strong>blocage majeur</strong> : l’impossibilité d’accéder à la base de données distante fournie par l’école,
          ce qui limitait nos possibilités de travail en dehors du réseau local. Ce problème affectait directement notre avancement, notamment sur la gestion des utilisateurs et le suivi des simulations.
        </p>

        <p>
          J’ai alors proposé une solution de maintenance simple mais efficace : <strong>la création d’une nouvelle base de données distante</strong> hébergée en local sur un serveur externe accessible.
          Cette solution a permis d’<strong>isoler le problème</strong>, de restaurer la continuité du projet et de permettre à chacun de travailler depuis chez soi tout en gardant une base pour faire fonctionner le site.
        </p>

        <p>
          Pour concrétiser cette solution, j’ai adapté notre configuration Flask afin de rediriger la connexion vers une base MySQL accessible depuis l’extérieur.
          Le code ci-contre illustre les différentes options de connexion que j’ai proposées : celle de l’école (non fonctionnelle), celle locale sur PyCharm, et celle finale sur un serveur accessible à distance.
        </p>

        <p>
          Grâce à cette initiative, nous avons pu poursuivre le développement, tester l’application, et structurer toutes les fonctionnalités essentielles :
          authentification, gestion des droits, suivi des affaires et calculs de rentabilité solaire. Cette intervention a non seulement résolu le blocage technique,
          mais a aussi renforcé la collaboration à distance dans notre groupe.
        </p>

        <p class="text-primary fw-bold">Compétence démontrée :</p>
        <p>
          Cette expérience m’a permis de <strong>proposer une solution de maintenance pertinente</strong> face à une défaillance logicielle bloquante,
          en <strong>relocalisant temporairement une ressource essentielle</strong> (la base de données) et en permettant la continuité des développements dans un cadre sécurisé.
        </p>
      </div>
    </div>
  </div>
</section>





  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-3">
    © Luquin Aurélien – Portfolio BUT GEII
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
