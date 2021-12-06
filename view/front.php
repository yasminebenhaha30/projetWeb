<?php 
  include_once "../core/CommentC.php"; 

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['submit'] == "comment") {
      include_once "../entity/Comment.php";
      $comment = new Comment(NULL, $_POST['publisher'], $_POST['content'], date("Y-m-d"));
      $commentC = new CommentC();
      $myCommentId = $commentC->insertComment($comment);
    }
  }

?>
<!DOCTYPE html>
<html>
<title>Brains bloom</title>
<link rel="icon" type="image/png" sizes="16x16" src="image0.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Acceuil</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Equipe</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Notre But</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Gains</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Appliquer</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Autres <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="cover2.png" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">VOIR PLUS</button>
  </div>
</div>
<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>Notre équipe</h2>
<p>découvrez notre équipe:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="karim.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Karim Akkari</h3>
  <p>Ingénierie et Marketing Digitale</p>
</div>

<div class="w3-quarter">
  <img src="ahmed.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ahmed Laifia</h3>
  <p>Stratégie et Développement</p>
</div>

<div class="w3-quarter">
  <img src="yasmine.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Yasmine Benhaha</h3>
  <p>Recherches et Exploitations</p>
</div>

<div class="w3-quarter">
  <img src="mohamed2.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Mohamed Sayari</h3>
  <p>Supérvisation sur terrains</p>
</div>
<div class="w3-quarter">
    
    <h3></h3>
    <p></p>
  </div>
<div class="w3-quarter">
    <img src="nour.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Nour Thraya</h3>
    <p>Solution recyclage</p>
  </div>

  <div class="w3-quarter">
    <img src="farouk.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Farouk Dridi</h3>
    <p>Chargé d'études</p>
  </div>
</div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Notre But</h2>
<p>Le centre d’incinération avec valorisation énergétique « Brains Bloom » à Tunis réceptionne les ordures ménagères résiduelles de 17 communes adhérentes en Tunisie. La chaleur générée par la combustion des déchets permet de produire de la vapeur, pour alimenter le réseau de chaleur de la STEG, et de l’électricité, utilisée pour le fonctionnement du centre.</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="collecte.png" alt="Snow" style="width:100%">
  <div class="w3-container">
  <h3>1-La collecte des déchets</h3>
  
  <p>La gestion des déchets regroupe l'ensemble du processus de traitement d'un déchet. Elle répond à la stratégie dite des 3 R :
    Réduire ;
    Réutiliser ;
    Recycler.
    Le taux de réussite du principe des 3R est encore insuffisant en Tunisie, faute de bonne volonté, de moyens et de nouvelles technologies.
    L'objectif reste de réduire de façon significative les déchets :
    stockés ou enfouis : stagnation ;
    incinérés : méthode polluante.</p>
 
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="IMG_3411-gigapixel.jpg" alt="Lights" style="width:100%">
  <div class="w3-container">
  <h3>2-La valorisation des déchets</h3>
  
  <p>c’est le réemploi, le recyclage ou toute autre action visant à obtenir, à partir des déchets, des matériaux réutilisables ou de l’énergie
    En Tunisie, chaque citoyen produit en moyenne 0,815 kg de déchets par jour en milieu urbain, selon le rapport de la GIZ sur la Gestion des Déchets Solides en Tunisie publié en 2014. Tandis qu’au niveau national, le pays produit annuellement 6.943.000 tonnes de déchets, parmi lesquels 157.000 tonnes sont classés dangereux (7.000 provenant d’activité de soins et 150.000 provenant de l’activité Industrielle), le reliquat pourrait donc être valorisable.

    La valorisation énergétique permet, dans le respect de la hiérarchie des modes de gestion des déchets, d’utiliser les déchets qui n’ont pu être ni recyclés ni valorisés sous forme de matière, comme source d’énergie renouvelable. 
    
    </p>
 
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="recyclage.jpeg" alt="Mountains" style="width:100%">
  <div class="w3-container">
  <h3>3-Le recyclage</h3>
  
  <p>Ménagers, végétaux, industriels, toxiques, on distingue 4 grandes catégories de déchets, soit des objets abandonnés, qui peuvent être réutilisés ou pas en l'état ou après modification. Pour comprendre ce qu’est le recyclage, il faut connaître tout le processus de gestion de ces déchets : collecte, traitement, valorisation, incinération</p>
  
  </div>
  </div>
</div>


<div class="w3-quarter">
    <div class="w3-card w3-white">
      <img src="02_incineration-gigapixel.jpg" alt="Mountains" style="width:100%">
      <div class="w3-container">
      <h3>4-L'incinération de déchets</h3>
      
      <p>L’incinération avec récupération d’énergie consiste à transformer en vapeur sous pression la chaleur dégagée par la combustion des déchets, vapeur qui est ensuite détendue dans un turbo alternateur produisant de l’électricité et, lorsque cela est possible, utilisée pour alimenter un réseau de chaleur urbain ou des industriels avoisinants.</p>
      </div>
      </div>
    </div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2>Gains</h2>
    <p>Choisissez votre offre</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Basique</p>
        </li>
        <li class="w3-padding-16"><b>10</b> m²</li>
        <li class="w3-padding-16"><b>750</b> Watts</li>
      
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-tnd"></i> 10 <b>DT</b></h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Pro</p>
        </li>
        <li class="w3-padding-16"><b>50</b> m²</li>
        <li class="w3-padding-16"><b>1000</b> Watts</li>
       
        <li class="w3-padding-16">
            <h2 class="w3-wide"><i class="fa fa-tnd"></i> 45 <b>DT</b></h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Premium</p>
        </li>
        <li class="w3-padding-16"><b>200</b>m²</li>
        <li class="w3-padding-16"><b>1500</b> Watts</li>
      
        <li class="w3-padding-16">
            <h2 class="w3-wide"><i class="fa fa-tnd"></i> 180 <b>DT</b></h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Appliquez maintenant</span></div>
      <h3>Address</h3>
      <p>Nous localiser.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  TUNISIE, TN</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +216 27 041 704</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  brainsbloom@gmail.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Nom et Prénom</label>
        <input class="w3-input" type="text" name="Nom" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>J'aime le concept!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Envoyer</button>
      </form>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="tunisie.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m7">
          <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Commentez-nous</span></div>

      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="" method="POST">
      <div class="w3-section">      
        <label>Votre Nom</label>
        <input name="publisher" class="w3-input" type="text" name="Nom" required>
      </div>
      <div class="w3-section">      
        <label>Commentaire</label>
        <input name="content" class="w3-input" type="text" name="Message" required>
      </div> 
      <input type="hidden" name="submit" value="comment">
      <button type="submit" value="comment" class="w3-button w3-right w3-theme">Envoyer</button>
      </form>
    </div>
  </div>
  <?php 
    $commentC = new CommentC();
    $comments = $commentC->getComments();
    foreach ($comments as $comment) {
  ?>
  <div class="w3-row">
  <div class="w3-col m5">
      <h3><?php echo $comment['publisher']; ?></h3>
      <p><?php echo $comment['content'] ?>.</p>
      <p>  <?php if (isset($myCommentId) && $myCommentId == $comment['idComment']) { ?>
    <a href="deleteComment.php?comment=<?php echo $comment['idComment']; ?>">delete</a>
  <?php } ?>
    </div>
</div>
    <?php
    }
   ?>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Nous suivre </h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p><a></a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Revenir en haut</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>