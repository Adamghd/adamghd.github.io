var skillset = document.getElementsByClassName("main");

function main() {

  $(".card-content-box1").hide();
  $(".card1").on("click", function() {
    $('.card-content-box1').slideToggle();
    $('.card-content-box2').slideUp();
    $('.card-content-box3').slideUp();
    $(".video-content-box").slideUp();
  });

  $(".card-content-box2").hide();
  $(".card2").on("click", function() {
    $('.card-content-box2').slideToggle();
    $('.card-content-box1').slideUp();
    $('.card-content-box3').slideUp();
    $(".video-content-box").slideUp();
  });

  $(".card-content-box3").hide();
  $(".card3").on("click", function() {
    $('.card-content-box3').slideToggle();
    $('.card-content-box1').slideUp();
    $('.card-content-box2').slideUp();
    $(".video-content-box").slideUp();
  });

  $(".video-content-box").hide();
  $(".video-content-button").on("click", function () {
    $(".video-content-box").slideToggle(600);
  })
}
$(document).ready(main);
