jQuery(document).ready(function($){
    AOS.init();

    const swiper = new Swiper('.swiper-container', {
        loop: true,
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      
        // And if we need scrollbar
        scrollbar: {
          hide: true,
        },
        
        spaceBetween: 50,

      });


$("#bingo").addClass('active-win')

$('#tapnplay').on('click', function(){
    $("#bingo-display").hide("slide", function(){
        $("#tapnplay-display").show( "slide", { direction: "right" }, 500 );
    });
    $("#bingo").removeClass('active-win')
    $("#tapnplay").addClass('active-win')
})

$('#bingo').on('click', function(){
    $("#tapnplay-display").hide("slide", { direction: "right" }, function(){
        $("#bingo-display").show( "slide", 500 );
    });
    $("#tapnplay").removeClass('active-win')
    $("#bingo").addClass('active-win')
})

$(".bingo-card").first().show()

let cards = $(".bingo-card")

$(".dropdown-item").on("click", function(e){
    e.preventDefault()
    let pattern = $(this).attr('href')
    $(".bingo-card").hide()
    cards.map((index, val)=>{
        let selection = $(val).attr('id')
        if(selection == pattern) {
            $(val).show()
            // $(".pattern-info").hide()
            $(".pattern-info").css("visibility", "hidden")
        }
        if (selection == pattern && (pattern === '1-line-hard' || pattern === '2-line-hard' )) {
            // $(".pattern-info").show()
            $(".pattern-info").css("visibility", "visible")
        }
    })
})

});