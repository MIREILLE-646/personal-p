
var nav = document.querySelector('#nav');
window.addEventListener('scroll', function(){
  if(window.pageYOffset > 100){
    nav.classList.add('bg-dark', 'shadow')
  }else{
    nav.classList.remove('bg-dark', 'shadow')
  }
  // Navbar dropdown menu starts
  $('.dropdown').click(function(){
    $('.dropdown-menu').toggle();
  });
  // Navbar dropdown menu Ends

});
// Dropdown button on small screen starts
$(function(){
  $(".navbar-toggler").click(function(){
$("#navbarNav").toggle("slow");
  });
  // Dropdown button on small screen Ends

});

// $('#button').click(function(){
//   $(".nav-button").slideToggle(800);
//   $(".nav-button").css('display','block');
// });
// $(function(){
//   var imgslider = ['img/wilfried.png','img/salim.png','img/ruby.jpg','img/valery.jpg','img/esther.png'];
//  var imgNames=['Djitche Wilfried ','Ngoupayou Salim','Chinda Ruby','Valery Atem','Nkengalem Esther'];
//  var imgtext=[];
//  imgtext[0]='Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error mollitia, aliquam quia enim voluptas.'
//  imgtext[1]='Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error mollitia, aliquam quia enim voluptas.'
//  imgtext[2]='Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error mollitia, aliquam quia enim voluptas.'
//  imgtext[3]='Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error mollitia, aliquam quia enim voluptas.'
//  imgtext[4]='Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error mollitia, aliquam quia enim voluptas.'
//   var i = 0;
//   function slide(){
//     i+=1;
//     if ( i > imgslider.length-1){
//       i=0;
//     }
//       $('.slider').attr('src',imgslider[i]);
//       $('#head').text(imgNames[i]);
//       $('#text').text(imgtext[i]);
//   }
//   setInterval(slide, 3000);

    // ============================================================================
// Choose picture code
   // <!-- ====================Script starts===================== -->
// follow steps
$("#steps").click(function () {
  $("#choice").slideUp();
  $('#picture1').slideDown();
});
// follow steps ends


// steps 1
   $("#picture1").submit(function (e) {
    e.preventDefault();
    $(this).slideUp();
    $('#picture2').slideDown();
});

           
  // <!-- ====================================================== -->
  // second picture
  $('#picture2').submit(function(e){
    e.preventDefault()
    $(this).slideUp();
    alert('Second picture successfully submited');
    $('#picture3').slideDown();
  });

   // Thirt picture
   $('#picture3').submit(function(e){
    e.preventDefault()
    alert('Third picture successfully submited');
    $(this).slideUp();
    $('#cv').slideDown();
  })
  $('#cv').submit(function(e){
    e.preventDefault()
    alert('CV successfully submited');
    $(this).slideUp();
    $('#about').slideDown();
  })

  $('#about').submit(function(e){
    e.preventDefault()
    alert('Document submitted');
    $(this).slideUp();
    $('#audio').slideDown();
  });
  $('#audio').submit(function(e){
    e.preventDefault()
    alert('audio successfully submited')
    location="pricing.php";
  });
  // skipng pic2 & pic3
  $(".skip-pic2").click(function(){
    $('#picture2').slideUp();
    $('#picture3').slideDown();
  });
  $(".skip-pic3").click(function(){
    $('#picture3').slideUp();
    $('#cv').slideDown();
  });
   // skipng cv 
   $(".skip-cv").click(function(){
    $('#cv').slideUp();
    $('#about').slideDown();
  });
     // skipng about 
     $(".skip-abt").click(function(){
      $('#about').slideUp();
      $('#audio').slideDown();
    });
        // skipng audio 
        $(".skip-aud").click(function(){
          $('#audio').slideUp();
         location="pricing.php";
        });




        // ChatBot
        $(".chat_icon").click(function(){
          $(".chat_box").toggle("slow");
        })
        $('.conv-form-wrapper').convform({selectInputStyle: 'disable'});


// });

// ================================
// phone number country codes
const phoneInputField = document.querySelector(".input");
const phoneInput = window.intlTelInput(phoneInputField, {
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",






});
 