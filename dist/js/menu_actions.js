function showBlocks(title, img) {
    document.getElementById("blocks_menu").style.visibility = "visible";
    $("#menu_header_img").attr("src",img);
    $("#menu_header_title").text(title);
    $("#blocks_menu").height($(window).height()-50);
}

function hideBlocks() {
    document.getElementById("blocks_menu").style.visibility = "hidden";
}

$( function() {

    $( window ).resize(function() {
        $("#blocks_menu").height($(window).height()-50);
    });

    $('#expand-one').click(function(){
        $("#mb-palette-music-ul").collapse("show");
        $($("#mb-palette-music-ul").parents('ul[id^=mb]').get().reverse()).each(function (index) {
            $(this).collapse("show");
        })

    });

    $("#page-wrapper").click(function () {
        hideBlocks();
    })

    $("#menu_content li:visible").click(function(){
        $clickedIndex = $(this).index();
        $('html, body').animate({
            scrollTop: $(".content_table tr").eq($clickedIndex).offset().top - 50
        }, 'slow');
    })

} );