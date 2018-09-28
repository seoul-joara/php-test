// header login mouseover
$('.login').hover(function(){
    $(this).find('li').show();
}, function(){
    $(this).find('li').hide();
})

// Initialize Swiper
var swiper = new Swiper('.swiper-container', {
spaceBetween: 30,
autoplay: {
    delay: 4000,
},
pagination: {
    el: '.swiper-pagination',
    clickable: true,
},

// today view slider
var count, now
jQuery(document).ready(function ($) {
count = $('.productrecent ul li').length
now 
if (count > 4) now = 4
else now = count

$(".productrecent ul li").each(function(i) {
    $(this).addClass("item-" + (i+1));
    if(i+1>4) $(this).hide();
});
})

$('.prev').click(function(){
if((count <= 4 && now ==count) || (count > 4 && now == 4)) alert('최근 본 첫번째 상품입니다.')
else {
    $('.item-'+now).hide();
    now --;
    $('.item-'+(now-3)).show();
}
})

$('.next').click(function(){
    if(now == count) alert('최근 본 마지막 상품입니다.')
    else {
        $('.item-'+(now-3)).hide();
        now ++;
        $('.item-'+now).show();
    }
})

// popup 오늘하루 열지 않기
jQuery(document).ready(function($) {
    pevent();
});

function pevent(){
    function getCookie(name){
        var nameOfCookie = name + "=";
        var x = 0;
        while (x <= document.cookie.length){
            var y = (x + nameOfCookie.length);
            if (document.cookie.substring(x, y) == nameOfCookie){
            if ((endOfCookie = document.cookie.indexOf(";", y)) == -1){
            endOfCookie = document.cookie.length;
            }
            return unescape (document.cookie.substring(y, endOfCookie));
            }
            x = document.cookie.indexOf (" ", x) + 1;
            if (x == 0) break;
        }
        return "";
    }
    if (getCookie("popname") != "done"){
        $('.mpopup').show();
    }
}

$('.closex').click(function(){
    if($('.mpopupnottoday').prop("checked")) setCookie("popname", "done", 1)
    $('.mpopup').hide();
})

function setCookie(name, value, expiredays){
    var todayDate = new Date();
    todayDate.setDate (todayDate.getDate() + expiredays);
    document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";";
    console.log(document.cookie)
}

// fixed menu
$(window).scroll(function() {
    if($(this).scrollTop() >= 464) $('#fixed_menu').show();
    else $('#fixed_menu').hide();
});
