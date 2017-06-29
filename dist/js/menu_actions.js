// function showBlocks(title, img) {
//     document.getElementById("blocks_menu").style.visibility = "visible";
//     $("#menu_header_img").attr("src",img);
//     $("#menu_header_title").text(title);
//     $("#blocks_menu").height($(window).height()-50);
// }
//
// function hideBlocks() {
//     document.getElementById("blocks_menu").style.visibility = "hidden";
// }

function showBlocks(title, img) {
    $("#navigation_bar").animate({"width": "0px"});
    $("#blocks_menu").show();
    $("#blocks_menu").animate({"margin-left": "0px", "width": "260px"});
    $("#menu_header_img").attr("src",img);
    $("#menu_header_title").text(title);
    $("#blocks_menu").height($(window).height()-50);
}

function hideBlocks() {

    $("#blocks_menu").animate({"margin-left": "260px", "width": "220px"});
    $("#blocks_menu").hide();
    $("#navigation_bar").animate({"width": "260px"});
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