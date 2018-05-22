var skillset = document.getElementsByClassName("main");

function main() {
  $("#overlay").show()
  $(".gear-list").hide();
  $(".click-again").hide();
  $(".click-here").on('click', function() {
    //$(this).next().toggle();
    $(this).slideToggle(700)
    $(this).next().slideToggle(700);
    $(this).next().next().slideToggle(700);
  });
  $(".click-again").on('click', function() {
    //$(this).next().toggle();
    $(this).slideToggle(700)
    $(this).prev().slideToggle(700);
    $(this).next().slideToggle(700);
  });
  $(".projects-list").hide();
  $(".projects-button").on('click', function() {
    $(this).next().slideToggle(400);
  });
  $(".instagram").hide();
  $(".instagram-button").on("click", function() {
    $(this).next().slideToggle(700);
  })
  $(function() {
    $("#toggle").on('click', function() {
      $(".fa-caret-down").toggleClass("rotate");
    });
  });
};
main();
