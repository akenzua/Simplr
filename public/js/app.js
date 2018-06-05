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

 $("#job").change(function() {
        var val = $(this).val();
        if (val == "busplan") {
            $("#category").html("<option value=''>Select category</option><option value='120000'>Basic</option><option value='210000'>Standard</option><option value='300000'>Premuim</option>");
        } else if (val == "busplanR") {
            $("#category").html("<option value=''>Select category</option><option value='60000'>Basic</option><option value='90000'>Standard</option><option value='120000'>Premuim</option>");

        } else if (val == "pitch") {
            $("#category").html("<option value=''>Select category</option><option value='3000'>Basic</option><option value='4200'>Standard</option><option value='6000'>Premuim</option>");

        }
    });



  
  // $("#location").change(function(){
  //   //var all = $(this).val();
  //   var location = $('#location :selected').text();
  //   if(location === 'Lagos'){
  //   var all = 0;
  // }else{
  //   var all = 30000;
  // }
  // });
  

 $("#category").change(function(){
  var charge = parseInt($(this).val());
  locate = $('#location :selected').text();
  if(locate === 'Lagos'){
    var all = 0;
  }else{
    var all = 30000;
  }

  var total = all + charge;
   if(charge){
      $("#amount").html("Pay &#x20A6;" + total);
      
   }else if(!val){
      $("#amount").html("Pay &#x20A6;xxx");
   }
 });

 // Active

  $(function(){
        var current_page_URL = location.href;

        $( "a" ).each(function() {

            if ($(this).attr("href") !== "#") {

                var target_URL = $(this).prop("href");

                    if (target_URL == current_page_URL) {
                        $('nav a').parents('li, ul').removeClass('active');
                        $(this).parent('li').addClass('active');

                        return false;
                    }
            }
        }); });


});