$(window).scroll(function(){
    $('.q1').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if(imagePos < topOfWindow+800){
            $(this).addClass("fadeInLeft");
        }
    });
});

$(window).scroll(function(){
    $('.q2').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if(imagePos < topOfWindow+800){
            $(this).addClass("fadeInRight");
        }
    });
});

$(window).scroll(function(){
    $('.problems-main').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if(imagePos < topOfWindow+800){
            $(this).addClass("lightSpeedIn");
        }
    });
});

$(window).scroll(function(){
    $('.service-suggest').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if(imagePos < topOfWindow+800){
            $(this).addClass("fadeInLeft");
        }
    });
});

$(window).scroll(function(){
    $('.service-item').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if(imagePos < topOfWindow+800){
            $(this).addClass("heartBeat");
        }
    });
});

$(window).scroll(function(){
    $('.arrow').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if(imagePos < topOfWindow+800){
            $(this).addClass("fadeIn");
        }
    });
});

$(window).scroll(function(){
    $('.btn-rgstr').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if(imagePos < topOfWindow+800){
            $(this).addClass("pulse");
        }
    });
});

const btn = document.querySelector(".btn");
const arrow = document.getElementById("arrow");
const btnRegistr = document.querySelector(".btn-rgstr"); 

btn.addEventListener("mouseenter", ()=>{
  btn.classList.remove("pulse");
  btn.style.opacity = 1
});

btn.addEventListener("mouseleave", ()=>{
  btn.classList.add("pulse");
});

btnRegistr.addEventListener("mouseenter", ()=>{
  btnRegistr.classList.remove("pulse");
  btnRegistr.style.opacity = 1
});

btnRegistr.addEventListener("mouseleave", ()=>{
  btnRegistr.classList.add("pulse");
});

console.log(btnRegistr)