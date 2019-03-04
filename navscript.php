<!-- nav menu -->
<script type="text/javascript">
  $(document).ready(function() {
    $(".menu").click(function() {
      $(".nav-expand").toggle("slide", {
        direction: 'up',
        duration: 600
      });
    });
    $(".here").click(function() {
      $(".nav-expand").toggle("slide", {
        direction: 'up',
        duration: 600
      });
    });
    $(".nav-link").click(function() {
      $(".nav-expand").slideUp(600);
    })
  });
</script>

<script type="text/javascript">
  var menu = document.querySelector('.menu');

  function toggleMenu() {
    menu.classList.toggle('open');
  }
  menu.addEventListener('click', toggleMenu);
</script>
