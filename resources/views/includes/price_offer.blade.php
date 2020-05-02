<style >
  body {
  /*background: #f8f8f8;*/
}

a {
  text-decoration: none;
}

h1 {
  text-align: center;
  font-family: "Lato", sans-serif;
  font-size: 25px;
  line-height: 32px;
  padding-top: 70px;
}
h1 a {
  color: #66cccc;
}

.price-table-wrapper {
  font-family:"TeachableSans-Regular";
  text-align: center;
  margin-top: 30px;
}
.price-table-wrapper .featured-table {
  box-shadow: 0px 0px 19px -3px rgba(0, 0, 0, 0.36);
}
.price-table-wrapper .pricing-table {
  display: inline-table;
  border: 1px solid #c8c8c8;
  border-radius: 10px;
  background: #fff;
  margin: 10px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__header {
  padding: 20px;
  font-size: 20px;
  color: #fff;
  background: #4d90cc;
    
}
.price-table-wrapper .pricing-table__price {
  color: #4d90cc;
  padding: 10px;
  margin: auto;
  font-size: 25px;
  font-weight: 500;
}
.price-table-wrapper .pricing-table__button {
  display: block;
  background: #4d90cc;
  text-decoration: none;
  padding: 20px;
  color: white;
  position: relative;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__button:before {
  position: absolute;
  left: -20%;
  top: -10%;
  content: "";
  width: 60%;
  height: 220%;
  -webkit-transform: rotate(-30deg);
          transform: rotate(-30deg);
  background: white;
  opacity: 0.3;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__button:after {
  position: absolute;
  content: ">";
  top: 0;
  right: 0;
  font-size: 25px;
  padding: 15px;
  padding-right: 40px;
  color: white;
  opacity: 0;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.price-table-wrapper .pricing-table__button:hover {
  background: #4d90cc;
}
.price-table-wrapper .pricing-table__list {
  padding: 15px;
  color: #a0a0a0;
}
.price-table-wrapper .pricing-table__list li {
  padding: 15px 10px;
  border-bottom: 1px solid #c8c8c8;
}


.price-table-wrapper .pricing-table__list li:last-child {
  border: none;
}
.price-table-wrapper .pricing-table:hover {
  box-shadow: 0px 0px 19px -3px rgba(0, 0, 0, 0.36);
}
.price-table-wrapper .pricing-table:hover .pricing-table__button {
  padding-left: 0;
  padding-right: 35px;
}
.price-table-wrapper .pricing-table:hover .pricing-table__button:before {
  top: -80%;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  width: 100%;
}
.price-table-wrapper .pricing-table:hover .pricing-table__button:after {
  opacity: 1;
  padding-right: 15px;
}

.recomandate{
  background-color: #d08859!important;
  padding: 20px 20px 0px!important;
}

</style>
<h1>NOS OFFRES DE PRIX</h1>

<div class="price-table-wrapper">
  <div class="pricing-table">
    <h2 class="pricing-table__header">- FREE  -</h2>
    <h3 class="pricing-table__price">0 Fcfa <br></h3>
    <a target="_blank" class="pricing-table__button" href="#">
      Adhérer maintenant!
    </a>
    <ul class="pricing-table__list">
      <li> Site en marque blanche : Oui</li>
      <li> Administration du LMS : 1</li>
      <li>Nombre de formateurs : 1</li>
      <li>Nombre d'apprenants : 10</li>
      <li>URL personnalisée : Non</li>
      <li>Système de paiement: Mobile money</li>
      <li>Création de quiz et contrôles: Oui</li>
      <li>Téléprésentiel : Non</li>
      <li>Ingénierie pédagogique : Non</li>
      <li>Statistiques avancées : Non</li>
      <li>Contenus à débloquage progressif : Non</li>
      <li>Envoi de messages aux apprenants : Non</li>
      <li>Certificat de reussite : Non</li>
      <li>Coupons/Codes promotionnels : Non</li>
      <li>Création d'événements  : Non</li>

    </ul>
  </div>
  <div class="pricing-table">
    <h2 class="pricing-table__header">- BASIQUE -</h2>
    <h3 class="pricing-table__price">35k F/Mois <br> ou 420k F/An</h3>
    <a target="_blank" class="pricing-table__button" href="#">
      Adhérer maintenant!
    </a>
    <ul class="pricing-table__list">
      <li> Site en marque blanche : Oui</li>
      <li> Administration du LMS : 3</li>
      <li>Nombre de formateurs : 5</li>
      <li>Nombre d'apprenants : 50</li>
      <li>URL personnalisée : Non</li>
      <li>Système de paiement:<br> Mobile money, visa etc...</li>
      <li>Création de quiz et contrôles: Oui</li>
      <li>Téléprésentiel : Non</li>
      <li>Ingénierie pédagogique : 3 heures/Mois</li>
      <li>Statistiques avancées : Non</li>
      <li>Contenus à débloquage progressif : Non</li>
      <li>Envoi de messages aux apprenants : Oui</li>
      <li>Certificat de reussite : Oui</li>
      <li>Coupons/Codes promotionnels : Oui</li>
      <li>Création d'événements  : Oui</li>
      
    </ul>
  </div>
  <div class="pricing-table featured-table">
    <h2 class="pricing-table__header recomandate">- PREMIUM - <br><span style="font-size: 13px;"> Recommandé</span></h2>
    <h3 class="pricing-table__price">55k F HT/Mois<br> ou 660k F/An</h3>
    <a target="_blank" class="pricing-table__button" href="#">
      Adhérer maintenant!
    </a>
    <ul class="pricing-table__list">
      <li> Site en marque blanche : Oui</li>
      <li> Administration du LMS : 5</li>
      <li>Nombre de formateurs : 10</li>
      <li>Nombre d'apprenants : 100</li>
      <li>URL personnalisée : Oui</li>
      <li>Système de paiement: <br> Mobile money, visa etc...</li>
      <li>Création de quiz et contrôles: Oui</li>
      <li>Téléprésentiel : Oui</li>
      <li>Ingénierie pédagogique : 10 heures/Mois</li>
      <li>Statistiques avancées : Oui</li>
      <li>Contenus à débloquage progressif : Oui</li>
      <li>Envoi de messages aux apprenants : Oui</li>
      <li>Certificat de reussite :<br> Oui(Personnalisable)</li>
      <li>Coupons/Codes promotionnels : Oui</li>
      <li>Création d'événements  : Oui</li>
      
    </ul>
  </div>
  
  <div class="pricing-table">
    <h2 class="pricing-table__header">- VIP -</h2>
    <h3 class="pricing-table__price">100k F/Mois ou<br> 1.2M F/An
</h3>
    <a target="_blank" class="pricing-table__button" href="#">
      Adhérer maintenant!
    </a>
    <ul class="pricing-table__list">
      <li> Site en marque blanche : Oui</li>
      <li> Administration du LMS : 10</li>
      <li>Nombre de formateurs: Illimités</li>
      <li>Nombre d'apprenants : Illimités</li>
      <li>URL personnalisée : Oui</li>
      <li>Système de paiement: <br> Mobile money, visa etc...</li>
      <li>Création de quiz et contrôles: Oui</li>
      <li>Téléprésentiel : Oui</li>
      <li>Ingénierie pédagogique : 25 heures/Mois</li>
      <li>Statistiques avancées : Oui</li>
      <li>Contenus à débloquage progressif : Oui</li>
      <li>Envoi de messages aux apprenants : Oui</li>
      <li>Certificat de reussite : Oui(Personnalisable)</li>
      <li>Coupons/Codes promotionnels : Oui</li>
      <li>Création d'événements  : Oui</li>
      
    </ul>
  </div>
</div>