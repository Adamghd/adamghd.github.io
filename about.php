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

        <div class="about-box">
          <h1 class="title">About <span style="color:#09d9ff">Me</span></h1>
          <p class=blurb>
            It all started with a love for technology. Growing up, I'd spend hours and hours each day on a computer, but high school is where the love for web and graphic work started to bloom. I took my first web design and Photoshop class at the same time and excelled
            in both, using that knowledge in college.<br />
            <br /> It wasn't until spring of 2018 where I got my first client job, redesigning my old teacher's website. That sparked an inititive to reach out to more businesses to make logos, and other sites alike. <br />
            <br /> Most of my experience is successful thanks to those who let me work for them, and you, reading this. So thanks, person (or robot...) reading this.<br />
            <br /> What did I do spending those hours on the computer? Well I got big into video games (Counter Strike, to be exact), to the point where I joined a team and played in tournaments. After a while, I started to follow the editing community
            and began making my own little game edits. This sparked the ever existing enjoymet of filmmaking and made me want to do more.<br />
            <br /> In college I joined some film classes and made my own projects and little movies (using real people this time). It was so much fun.<br />
            <br /> Right now I'm working at the University of Wisconsin Milwaukee Planetarium as a show producer and an IT worker, along with doing freelance client work for those who want 'things', so feel free to <a href="contact">contact me</a> about
            any work you might want.
          </p>
        </div>

        <div class="content-box">
          <h1 class="instagram-title">Instagram Preview</h1>
          <!-- SnapWidget -->
          <script src="https://snapwidget.com/js/snapwidget.js"></script>
          <iframe src="https://snapwidget.com/embed/541277" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
        </div>


        <script type='text/javascript'>
          setInterval(function iframe() {
            var width = $('#iframe').width();
            $('#iframe').css('width', width + "px");
            var height = width * .5625;
            $('#iframe').css('height', height + "px");
          }, 10);
          iframe();
        </script>


      </div>
      <script type="text/javascript" src="_js/ss.js"></script>
      <?php
        include "navscript.php";
       ?>

    </main>
  </div>
</body>

</html>
