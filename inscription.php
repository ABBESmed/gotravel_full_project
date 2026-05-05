<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription - GoTravel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- HEADER -->
  <header class="site-header">
    <div class="site-header__container">
      <a href="Accueil.html" class="site-header__logo">GoTravel</a>

      <input type="checkbox" id="menu-toggle" class="site-header__toggle">

      <label for="menu-toggle" class="site-header__burger">
        <span class="site-header__burger-line"></span>
        <span class="site-header__burger-line"></span>
        <span class="site-header__burger-line"></span>
      </label>

      <div class="site-header__actions">
        <nav class="site-header__nav">
          <ul class="site-header__menu">
            <li class="site-header__item">
              <a href="Accueil.html" class="site-header__link">Accueil</a>
            </li>
            <li class="site-header__item">
              <a href="voyages.html" class="site-header__link">Voyages</a>
            </li>
            <li class="site-header__item">
              <a href="activites.html" class="site-header__link">Activités</a>
            </li>
            <li class="site-header__item">
              <a href="contact.html" class="site-header__link">Contact</a>
            </li>
          </ul>
        </nav>

        <a href="connexion.html" class="site-header__login">Connexion</a>
        <a href="inscription.html" class="site-header__signup">Inscription</a>
      </div>
    </div>
  </header>

  <main>
    <!-- PAGE HERO -->
    <section class="page-hero">
      <div class="page-hero__container">
        <h1 class="page-hero__title">Inscription</h1>
        <p class="page-hero__text">Créez votre compte pour commencer votre prochaine aventure.</p>
      </div>
    </section>

    <section class="auth">
      <div class="auth__container">
        <form class="auth__form">
          <h2 class="auth__title">Créer un compte</h2>

          <div class="auth__group">
            <label for="signup-name" class="auth__label">Nom complet</label>
            <input type="text" id="signup-name" class="auth__input" placeholder="Votre nom complet">
          </div>

          <div class="auth__group">
            <label for="signup-email" class="auth__label">Email</label>
            <input type="email" id="signup-email" class="auth__input" placeholder="Votre email">
          </div>

          <div class="auth__group">
            <label for="signup-password" class="auth__label">Mot de passe</label>
            <input type="password" id="signup-password" class="auth__input" placeholder="Votre mot de passe">
          </div>

          <div class="auth__group">
            <label for="signup-confirm" class="auth__label">Confirmer le mot de passe</label>
            <input type="password" id="signup-confirm" class="auth__input" placeholder="Confirmez le mot de passe">
          </div>

          <button type="submit" class="auth__button">S’inscrire</button>

          <p class="auth__text">Vous avez déjà un compte ? <a href="connexion.html" class="auth__link">Connectez-vous</a></p>
        </form>
      </div>
    </section>

  </main>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="site-footer__container">
      <h2 class="site-footer__logo">GoTravel</h2>

      <nav class="site-footer__nav">
        <a href="Accueil.html" class="site-footer__link">Accueil</a>
        <a href="voyages.html" class="site-footer__link">Voyages</a>
        <a href="activites.html" class="site-footer__link">Activités</a>
        <a href="contact.html" class="site-footer__link">Contact</a>
      </nav>

      <div class="site-footer__contact">
        <p>Email : contact@gotravel.com</p>
        <p>Téléphone : +33 6 12 34 56 78</p>
      </div>

      <p class="site-footer__copyright">
        © 2026 GoTravel. Tous droits réservés.
      </p>
    </div>
  </footer>
<script src="script.js"></script>
</body>
</html>
