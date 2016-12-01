$(document).ready(function() {

  function bindNavbar() {
    if ($(window).width() >= 767) {
      $('.navbar-default .dropdown').on('mouseover', function(){
                $(this).addClass('open');
        $('.dropdown-toggle', this).next('.dropdown-menu').show();
      }).on('mouseout', function(){
                $(this).removeClass('open');
        $('.dropdown-toggle', this).next('.dropdown-menu').hide();
      });
      
      $('.dropdown-toggle').click(function() {
        if ($(this).next('.dropdown-menu').is(':visible')) {
          window.location = $(this).attr('href');
        }
      });
    }
    else {
      $('.navbar-default .dropdown').off('mouseover').off('mouseout');
            $('.navbar-default .dropdown-toggle').off('click');
    }
  }
  
  $(window).resize(function() {
    bindNavbar();
  });
  
  bindNavbar();

$('.off:first-child').addClass('col-md-offset-3');
$('.off:nth-child(4)').addClass('col-md-offset-3');
$('.on:first-child').addClass('active');

//Right Pop Hover Toggle
$('.rightChevy').hover(function(){
        $('.rightPop').removeClass('switch');
        },function(){
        $('.rightPop').addClass('switch');
    });
$('.rightPop').hover(function(){
        $('.rightPop').removeClass('switch');
        },function(){
        $('.rightPop').addClass('switch');
    });


//Left Pop Hover Toggle
$('.lefttChevy').hover(function(){
        $('.leftPop').removeClass('switch');
        },function(){
        $('.leftPop').addClass('switch');
    });
$('.leftPop').hover(function(){
        $('.leftPop').removeClass('switch');
        },function(){
        $('.leftPop').addClass('switch');
    });
// $('div.alldivs').children(2).addClass('col-md-offset-3');
//   $(".item:first-child").addClass("anyclass");

});