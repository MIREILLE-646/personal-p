var nav = document.querySelector('#nav');
window.addEventListener('scroll', function(){
  if(window.pageYOffset > 100){
    nav.classList.add('bg-dark', 'shadow')
  }else{
    nav.classList.remove('bg-dark', 'shadow')
  }
  $('.dropdown').click(function(){
    $('.dropdown-menu').toggle();
  });
  // $('#btn-menu').click(function(){
  //   // $('#nav ').toggle();
  //   $('#nav ').css('display','block');
  // });
  // $(".collapse").collapse();
});

// $('#button').click(function(){
//   $(".nav-button").slideToggle(800);
//   $(".nav-button").css('display','block');
// });
$(function(){
  var imgslider = ['img/wilfried.png','img/salim.png','img/ruby.jpg','img/valery.jpg','img/esther.png'];
 var imgNames=['Djitche Wilfried ','Ngoupayou Salim','Chinda Ruby','Valery Atem','Nkengalem Esther'];
 var imgtext=[];
 imgtext[0]='Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error mollitia, aliquam quia enim voluptas.'
 imgtext[1]='Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error mollitia, aliquam quia enim voluptas.'
 imgtext[2]='Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error mollitia, aliquam quia enim voluptas.'
 imgtext[3]='Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error mollitia, aliquam quia enim voluptas.'
 imgtext[4]='Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam error mollitia, aliquam quia enim voluptas.'
  var i = 0;
  function slide(){
    i+=1;
    if ( i > imgslider.length-1){
      i=0;
    }
      $('.slider').attr('src',imgslider[i]);
      $('#head').text(imgNames[i]);
      $('#text').text(imgtext[i]);
  }
  setInterval(slide, 3000);

    // ============================================================================
// Choose picture code
  $('#picture1').submit(function(e){
    e.preventDefault()
    $(this).remove();
    alert('First picture successfully submited')
    $('#picture2').css('display','block')
  })

  // second picture
  $('#picture2').submit(function(e){
    e.preventDefault()
    $(this).remove();
    alert('Second picture successfully submited')
    $('#picture3').css('display','block')
  })

   // Thirt picture
   $('#picture3').submit(function(e){
    e.preventDefault()
    alert('Third picture successfully submited')
    $(this).remove();
    $('#cv').css('display','block')
  })
  $('#cv').submit(function(e){
    e.preventDefault()
    alert('CV successfully submited')
    $(this).remove();
    $('#about').css('display','block') 
  })

  $('#about').submit(function(e){
    e.preventDefault()
    alert('Document submitted')
    $(this).remove();
    $('#audio').css('display','block') 
  })

  $('#audio').submit(function(e){
    e.preventDefault()
    alert('audio successfully submited')
  })

























});
// ================================
// phone number country codes
const phoneInputField = document.querySelector(".input");
const phoneInput = window.intlTelInput(phoneInputField, {
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",


});
 