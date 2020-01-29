$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $(".navbar").removeClass("bg-dark");
    } else {
        $(".navbar").addClass("bg-dark");
    }

});


$(window).scroll(function(){
    if($(this).scrollTop() > 100) {
        $(".back_to_top").show();
} else {
    $(".back_to_top").hide();
}

});

$(".back_to_top").click(function(){
    $("html, body").animate({scrollTop:0}, 400);
});