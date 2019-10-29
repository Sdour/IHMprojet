<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Kidzinia</title>
  <script type="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
<link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<svg version='1.1' xmlns='http://www.w3.org/2000/svg'>
  <defs>
    <filter id='squiggly-0'>
      <feturbulence basefrequency='0.06' id='turbulence' numoctaves='3' result='noise' seed='0'></feturbulence>
      <fedisplacementmap id='displacement' in2='noise' in='SourceGraphic' scale='6'></fedisplacementmap>
    </filter>
    <filter id='squiggly-1'>
      <feturbulence basefrequency='0.06' id='turbulence' numoctaves='3' result='noise' seed='1'></feturbulence>
      <fedisplacementmap in2='noise' in='SourceGraphic' scale='8'></fedisplacementmap>
    </filter>
    <filter id='squiggly-2'>
      <feturbulence basefrequency='0.06' id='turbulence' numoctaves='3' result='noise' seed='2'></feturbulence>
      <fedisplacementmap in2='noise' in='SourceGraphic' scale='6'></fedisplacementmap>
    </filter>
    <filter id='squiggly-3'>
      <feturbulence basefrequency='0.06' id='turbulence' numoctaves='3' result='noise' seed='3'></feturbulence>
      <fedisplacementmap in2='noise' in='SourceGraphic' scale='8'></fedisplacementmap>
    </filter>
    <filter id='squiggly-4'>
      <feturbulence basefrequency='0.06' id='turbulence' numoctaves='3' result='noise' seed='4'></feturbulence>
      <fedisplacementmap in2='noise' in='SourceGraphic' scale='6'></fedisplacementmap>
    </filter>
  </defs>
</svg>
<div class='overlay'></div>
<div class='options'>
  <div class='options_sf'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/sfIcon2.png'>
  </div>
  <div class='options_bg'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/bgIcon2.png'>
  </div>
</div>
<div class='main'>
  <div class='main_inner'>
    
  </div>
  <div class='main_inner__modalOverlay'></div>
    <div class='main_inner__modal'></div>
    <div class='main_inner__modalContent'>
      <h2 class='testScore'></h2>
      <p class='score'>Votre nom:</p>
      <input type="text" id="nom" class="nn">
       <div class='again'>
        <p>
            <button class='playAgain'>Démarer</button>
        </p>
       </div>
     </div>

     <div class='main_inner__modalContentt'>
      <h1 class='testScore'>Quitter ?</h1>
      <p class='score'>Vous êtes sûre ?</p>
       <div class='again'>
        <p>
          <button class='confirmer' style="background-color: red">Confirmer</button>
          <button class='cancel'>Annuler</button>
        </p>
       </div>
     </div>

    <div class='main_inner__logo'>
      
    </div>
    <div class='main_inner__title'>
      <h1 class='title_title'></h1>
      <div class='hint'></div>
      <?php 
        $usersArray=array();
        //get file content line by line
        $fileLines = file('Score.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        //separate every line in two variable name and sscore
        foreach ($fileLines as $line) {
            $lineSpilit = preg_split("/\:/", $line);
            $lineSpilit[1] = ( int )$lineSpilit[1];
            array_push($usersArray,$lineSpilit);
        } 

        echo"<table>";
        foreach ($usersArray as $key => $value) {
          echo"<tr>";
          echo"<td>".$key."</td>";
          echo"<td>".$value."</td>";
          echo"</tr>";
        }
        echo"</table>";
      ?>
    </div>
    <div class='main_inner__circle'></div>
    <div class='main_inner__feedback'></div>
    <div class='main_inner__scenes'>
      <div class='scene akuaku'>
        <div class='container'>
          <a href=''>
            <img src='./logoGame.svg' width="250px">
          </a>  
        </div>
      </div>
      <div class='scene kirby'>
        <div id='container'>
          <a href=''>
            <img src='./logoGame.svg' width="250px">
          </a>
        </div>
      </div>
      <div class='scene hexipal'>
        <div id='hexipal'>
          <a href=''>
            <img src='./logoGame.svg' width="250px">
          </a>
        </div>
      </div>
      <div class='scene mario'>
        <div class='container'>
          <a href=''>
            <img src='./logoGame.svg' width="250px">
          </a>
        </div>
      </div>

      <div class='scene perroquet'>
        <div class='container'>
          <a href=''>
            <img src='./logoGame.svg' width="250px">
          </a>
        </div>
      </div>
      <div class='scene elephant'>
        <div class='container'>
          <a href=''>
            <img src='./logoGame.svg' width="250px">
          </a>
        </div>
      </div>
      <div class='scene caméléon'>
        <div class='container'>
          <a href=''>
            <img src='./logoGame.svg' width="250px">
          </a>
        </div>
      </div>
      <div class='scene zèbre'>
        <div class='container'>
          <a href=''>
            <img src='./logoGame.svg' width="250px">
          </a>
        </div>
      </div>
      <div class='scene crocodile'>
        <div class='container'>
          <a href=''>
            <img src='./logoGame.svg' width="250px">
          </a>
        </div>
      </div>
    </div>
    
    <div class='main_inner__answers'>
      <div class='answer'></div>
      <div class='answer'></div>
      <div class='answer'></div>
    </div>
    
  </div>
</div>
<canvas class='grain'></canvas>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>