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
      <h1 class="display-5 fw-bold text-primary mb-3">Vérifier la partie GEII d’un système industriel</h1>
      <hr class="w-25 mx-auto text-primary opacity-75" style="height: 3px;">
    </div>
  </div>
</section>

<!-- SECTION 1 : Évaluer la cause racine d’un dysfonctionnement -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-primary text-center mb-5 fs-2">Évaluer la cause racine d’un dysfonctionnement</h2>

    <div class="row align-items-start">
      
      <!-- Texte à gauche -->
      <div class="col-md-7" style="font-size: 1.1rem; line-height: 1.7;">
        <p>
          Lors de mon stage, j’ai participé à une intervention de maintenance corrective dans une entreprise spécialisée dans la fabrication de fûts en carton. 
          Le dysfonctionnement concernait une ligne automatisée chargée de fixer la partie métallique sur les fûts.
        </p>

        <p>
          Après avoir identifié la zone défectueuse à l’aide du responsable, nous avons procédé à une 
          <strong>analyse des schémas électriques</strong> ainsi qu’à l’étude du <strong>programme automate</strong>, ce qui a permis de cibler les composants liés à l’étape en défaut.
        </p>

        <p>
          Une connexion à l’automate a permis de visualiser <strong>l’étape exacte où la machine se bloquait</strong>. 
          Une première hypothèse suggérait un câble débranché ou usé par la chaleur. 
          Après des tests de continuité, nous avons identifié la véritable cause : <strong>un relais électromagnétique grillé</strong>, chargé de protéger une sortie automate.
        </p>
        <p>
          Ce type d’intervention exige non seulement des compétences techniques, mais aussi une rigueur d’analyse. 
          Il est essentiel de prendre en compte plusieurs hypothèses, de vérifier chaque élément du circuit électrique, et d’éliminer progressivement les causes possibles. 
          Cette méthode de recherche de panne m’a permis de renforcer ma logique de diagnostic et ma capacité à raisonner avec méthode, en collaboration étroite avec le personnel technique de l’entreprise.
        </p>
        <p>
          Une fois le relais remplacé, un test a confirmé le retour au fonctionnement normal de la machine.
        </p>

        <h5 class="text-primary mt-4">Compétence mise en œuvre :</h5>
        <p>
          Cette mission m’a permis de mettre en œuvre plusieurs compétences clés. 
          J’ai d’abord su identifier les conditions précises ayant conduit au dysfonctionnement, en analysant notamment le blocage de l’automate. 
          Ensuite, à partir des schémas électriques et de mesures réalisées directement sur le terrain, j’ai pu isoler le composant défectueux. 
          Enfin, j’ai identifié la nature exacte du dysfonctionnement, à savoir un relais électromagnétique hors service.
        </p>
      </div>

      <!-- Images à droite -->
      <div class="col-md-5 text-center">
        <img src="image/verifier_tonaux.png" alt="Fûts en carton" class="img-fluid rounded shadow mb-4" style="max-width: 90%; height: auto;">
        <p class="text-muted fst-italic">Exemples de fûts en carton produits par l’entreprise concernée.</p>

        <img src="image/relais.jpg" alt="Relais remplacé" class="img-fluid rounded shadow mt-4" style="max-width: 90%; height: auto;">
        <p class="text-muted fst-italic">Relais électromagnétique identifié comme défaillant et remplacé.</p>
      </div>

    </div>
  </div>
</section>



<!-- SECTION 2 : Proposer un dysfonctionnement -->
<section class="py-5">
  <div class="container">
    <h2 class="text-primary text-center mb-5">Proposer une solution corrective à un dysfonctionnement</h2>
    <div class="row">
      
      <!-- Colonne gauche : images avec disposition en grille -->
      <div class="col-md-5 mb-4 mb-md-0">
        <div class="d-flex flex-column gap-4 align-items-center">
          <div>
            <img src="image/photocarteelec.jpg" alt="Carte électronique" class="img-fluid rounded shadow" style="max-width: 100%; object-fit: cover;">
            <p class="text-muted text-center mt-2">Carte électronique vue du dessus.</p>
          </div>
          <div>
            <img src="image/photocarteelecerepare.jpg" alt="Carte réparée" class="img-fluid rounded shadow" style="max-width: 100%; object-fit: cover;">
            <p class="text-muted text-center mt-2">Carte électronique réparée après correction du défaut.</p>
          </div>
        </div>
      </div>

      <!-- Colonne droite : texte -->
      <div class="col-md-7">
        <p><strong>Mise en contexte :</strong><br>
        Dans le cadre d’un projet de première année du BUT GEII, nous avons été amenés à concevoir une carte électronique destinée au pilotage d’un robot. Ce projet pédagogique complet s’étalait sur plusieurs séances et comprenait les étapes de conception du schéma électrique sous Kicad, de génération du circuit imprimé, de soudage des composants, puis de tests fonctionnels. L’objectif était de rendre une carte entièrement opérationnelle, à partir de zéro. Une fois les composants soudés, nous avons procédé à des vérifications sous tension pour identifier d’éventuels défauts.</p>

        <p><strong>Identification du dysfonctionnement :</strong><br>
        Lors du test de ma carte, un défaut est apparu concernant un <strong>interrupteur double glissière</strong>. À l’exécution du programme de test via le logiciel RealTerm, les deux glissières déclenchaient exactement la même action alors qu’elles étaient censées commander deux fonctions distinctes. Après analyse, j’ai compris que les deux sorties de l’interrupteur étaient <strong>involontairement reliées entre elles</strong>, ce qui engendrait une confusion de signal dans le microcontrôleur.</p>

        <p><strong>Proposition de solution corrective :</strong><br>
        Pour résoudre le problème, j’ai d’abord examiné le câblage réel autour de l’interrupteur, avant de consulter mon dossier de conception. C’est à ce moment-là que j’ai identifié <strong>l’origine de l’erreur</strong> : une simple faute de frappe lors de la création du schéma électrique. J’avais donné le même nom aux deux sorties de l’interrupteur (SW-1 au lieu de SW-1 et SW-2), ce qui avait conduit à leur liaison automatique lors du routage du circuit imprimé.</p>

        <p>La solution que j’ai alors mise en œuvre a consisté à <strong>interrompre manuellement la liaison non souhaitée</strong> à l’aide d’un cutter afin de couper les pistes concernées. J’ai ensuite <strong>recréé les connexions correctes</strong> en soudant des fils de liaison entre les bons points du circuit. Cette opération a été réalisée avec rigueur, en respectant les règles de sécurité électrique et sans endommager d’autres composants. Une fois la modification terminée, la carte a été retestée avec succès et les deux glissières ont correctement réagi de manière indépendante.</p>

        <p><strong>Conclusion :</strong><br>
        Ce cas m’a permis de proposer une solution corrective adaptée à un dysfonctionnement d’origine humaine (erreur de conception), en tenant compte des contraintes techniques et des risques de court-circuit. Cette expérience m’a aussi appris qu’une simple erreur de nommage, souvent anodine, peut avoir des conséquences fonctionnelles importantes. Si c’était à refaire, je renforcerais ma vigilance lors de la phase de conception initiale, notamment en relisant systématiquement les noms de tous les composants pour éviter ce type d’incident.</p>
      </div>
    </div>
  </div>
</section>



<!-- SECTION 3 : Procedure d'essaie -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-primary text-center mb-5">Produire une procédure d’essai pour valider la conformité d’un système</h2>

    <!-- Contexte -->
    <div class="mb-5">
      <h4 class="text-primary">Contexte de réalisation</h4>
      <p>
        Dans le cadre d’un TP de SAÉ CAPA (projet de première année), nous devions concevoir quatre cartes électroniques
        destinées à piloter un sas d’entrée de voiture, similaire à celui situé à l’arrière de l’IUT.
      </p>
      <ul>
        <li>Carte d’éclairage automatique</li>
        <li>Carte de détection de véhicule</li>
        <li>Carte de lecture de badge</li>
        <li><strong>Carte interface</strong> (ma carte), pour relier l’ensemble à un automate</li>
      </ul>
      <p>
        Après conception et câblage, une procédure d’essais devait être établie et appliquée. J’ai mobilisé mes acquis en électronique
        (voltmmètre, oscilloscope, pont diviseur, comparateur…) pour mener à bien ces vérifications.
      </p>
    </div>

    <!-- Schéma du montage : image bien intégrée -->
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center">
        <img src="image/verifier_montage.png" alt="Schéma du montage testé" class="img-fluid rounded shadow border">
        <p class="text-muted mt-2 fst-italic">Schéma de la carte Interface comportant deux AOP : un comparateur à collecteur ouvert et un suiveur.</p>
      </div>
    </div>

    <!-- Mise en œuvre -->
    <div class="mb-5">
      <h4 class="text-primary">Mise en œuvre de la procédure</h4>
      <ul>
        <li><strong>Comparateur à collecteur ouvert</strong> avec AOP</li>
        <li><strong>Montage suiveur</strong> avec AOP</li>
      </ul>

      <h5 class="mt-4">1. Vérification des alimentations</h5>
      <p>
        Vérification des tensions nécessaires (+24 V, +5 V et masse) à l’aide d’un voltmètre en mode DC, avec des pointes de test précises.
      </p>

      <h5 class="mt-4">2. Test du comparateur</h5>
      <p>
        En injectant 5 V en entrée, on attendait une sortie &gt; 15 V : j’ai mesuré 21.3 V.  
        En entrée 0 V, la sortie devait tomber sous 5 V : c’était bien le cas.
      </p>

      <h5 class="mt-4">3. Test du suiveur</h5>
      <p>
        Avec une entrée de 0 à 5 V (variation manuelle via un générateur), la sortie devait monter jusqu’à 12 V maximum.
        La variation mesurée correspondait bien à l’attendu.
      </p>
    </div>

    <!-- Tableau des résultats mesurés -->
    <div class="row justify-content-center mb-5">
      <div class="col-md-10">
        <img src="image/verifier_resultats.png" alt="Résultats des mesures" class="img-fluid rounded shadow border">
        <p class="text-muted mt-2 fst-italic text-center">Tableaux de résultats mesurés pour le comparateur et le suiveur.</p>
      </div>
    </div>

    <!-- Résultats et amélioration -->
    <div>
      <h4 class="text-primary">Résultats et axes d’amélioration</h4>
      <p>
        Tous les tests ont été validés. La carte fonctionnait parfaitement, et les explications ont été comprises et validées par les enseignants.
      </p>
      <p>
        Pour améliorer encore cette procédure, j’aurais pu :
      </p>
      <ul>
        <li>Utiliser un <strong>GBF</strong> pour générer un signal d’entrée réaliste</li>
        <li>Observer le signal via un <strong>oscilloscope</strong> (entrée/sortie en simultané), pour comparer les courbes</li>
      </ul>
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
