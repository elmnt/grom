$(document).ready(function(){

  // populate the mobile nav
  $(".navmobile").html($(".navmain").html());

  // $("#nav-mobile").html($("#nav-main").html());
  $(".navmobile-trigger").click(function(){
    if ($(".navmobile ul").hasClass("expanded")) {
      $(".navmobile ul.expanded").removeClass("expanded").slideUp(250);
      $(this).removeClass("open");
    } else {
      $(".navmobile ul").addClass("expanded").slideDown(250);
      $(this).addClass("open");
    }
  });

  // global scroll-to-anchor (must add .scrollanchor class to the a tag)
  // possible easing methods: https://jqueryui.com/easing/
  $(".scrollanchor").click(function(event){
    // determine how far from the top we are
    // increase the scroll duration slightly, the farther down we are
    var howfar = $(this).offset().top
    if ( howfar < 1000 ){
      var scrollspeed = 500;
    } else if ( howfar > 1000 && howfar < 2000 ){
      var scrollspeed = 600;
    } else if ( howfar > 2000 && howfar < 3000 ){
      var scrollspeed = 700;
    } else if ( howfar > 3000 && howfar < 4000 ){
      var scrollspeed = 800;
    } else if ( howfar > 4000 && howfar < 5000 ){
      var scrollspeed = 900;
    } else if ( howfar > 5000 ){
      var scrollspeed = 1000;
    }
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, scrollspeed, 'easeInOutQuint');
  });
  // end:global scroll-to-anchor

});

$(window).scroll(function (event) {
  // event
});

$(window).on("load resize scroll",function(e){
  // event
});
