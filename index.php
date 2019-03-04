<?php
include "header.php";
?>

<body>
  <div id="main" class="m-scene">

    <?php
    include "nav.php";
     ?>

    <main>
      <div class="scene-element scene_element--slideUp">
        <div class="text">
          <h1><span class='letter'>H</span><span class='letter'>i</span><span class='letter'>,</span>
        <br />
        <span class='letter'>I</span><span class='letter'>'</span><span class='letter'>m&nbsp;</span>
        <span class="letter"><img src="_images/images/img_1.png" class="logo-letter" /></span><span class='letter'>d</span><span class='letter'>a</span><span class='letter'>m</span><span class='letter'>,</span>
        <br /><span class='letter'>d</span><span class='letter'>i</span><span class='letter'>g</span><span class='letter'>i</span><span class='letter'>t</span><span class='letter'>a</span><span class='letter'>l</span>
        <span class='letter'> p</span><span class='letter'>r</span><span class='letter'>o</span><span class='letter'>d</span><span class='letter'>u</span><span class='letter'>c</span><span class='letter'>t </span>
        <span class='letter'>d</span><span class='letter'>e</span><span class='letter'>v</span><span class='letter'>e</span><span class='letter'>l</span><span class='letter'>o</span><span class='letter'>p</span><span class='letter'>e</span><span class='letter'>r</span></h1>

          <h3 class="text-child">Web designer / Graphics / Filmmaker / <a href="work.html">More</a> /</h3>
          <a class="contact-btn" href="contact.php"><h3>CONTACT ME</h3></a>
        </div>

        <div id=bm>
        </div>

      </div>
    </main>

    <script src="_js/lottie.js" type="text/javascript"></script>
    <script type="text/javascript">
      lottie.loadAnimation({
        container: document.getElementById("bm"), // the dom element that will contain the animation
        renderer: 'svg',
        loop: false,
        autoplay: true,
        path: '_images/data.json' // the path to the animation json
      });
    </script>

    <script type="text/javascript">
      $(".letter").bind("webkitAnimationEnd mozAnimationEnd animationEnd", function() {
        $(this).removeClass("letter-animate")
      })

      $(".letter").hover(function() {
        $(this).addClass("letter-animate");
      })
    </script>
    <script type="text/javascript" src="_js/ss.js"></script>

<?php
  include "navscript.php";
 ?>

  </div>
</body>
