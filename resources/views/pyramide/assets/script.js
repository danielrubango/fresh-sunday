jQuery(document).ready(function($) {
 
    $(".scroll").click(function(event){   
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800,'swing');
    });
    });





// uniform
    $(function () {
    $('input[type="checkbox"], input[type="radio"], select').uniform();
    });

// social icon
$(document).ready(function($) {
  $('.social i').tooltip('hide')
});

// 

var wow = new WOW(
  {
    boxClass:     'wowload',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true        // act on asynchronously loaded content (default is true)
  }
);
wow.init();




$('.carousel').swipe( {
     swipeLeft: function() {
         $(this).carousel('next');
     },
     swipeRight: function() {
         $(this).carousel('prev');
     },
     allowPageScroll: 'vertical'
 });

/*Moving for banner

var slidershow = (function(){
    var self={},
    config={
        duration : 4
   
};
setOptions= function(){
    if(typeof options=='objet'&&
        objet.keys(options).length>0){
        for(var property in options){
            if(config[property]!== undefined){
                config[property] = options[property];
            }
        }
    }
}
self.init= function(opts){
    options=opts||{};
    setOptions();
    execute();
}
execute=function(){
    slidershow=document.querySelector("#slidershow");
    images= Array.from(document.querySelectorAll('.slidershow-image'));

    i=-1;
    play();

} 
play = function(){
    setTimeout(function(){
        slidershow.style.background = 'url('+ images[i].src + ' ) center ';

    },100 );

    i++;
    setTimeout(play,config.duration * 1000);
}
return self; 
 } )();*/