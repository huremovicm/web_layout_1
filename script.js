$("a").click(function(){
    var pageId = $(this).attr("data-page");
    $("html, body").animate({ scrollTop: $("#"+pageId).offset().top }, 1000);
  });


  $('body').scrollspy({
    target: '#myNavbar',
    offset: 50
  }); 