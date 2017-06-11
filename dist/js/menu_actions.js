function showBlocks(title, img) {
    document.getElementById("blocks_menu").style.visibility = "visible";
    $("#menu_header_img").attr("src",img);
    $("#menu_header_title").text(title);

    $("#menu_content").load("pages/palette/rhythm_block.html");
}

function hideBlocks() {
    document.getElementById("blocks_menu").style.visibility = "hidden";
}

$( function() {

    $('#expand-one').click(function(){
        $("#mb-palette-music-ul").collapse("show");
        $($("#mb-palette-music-ul").parents('ul[id^=mb]').get().reverse()).each(function (index) {
            $(this).collapse("show");
        })

    });

    $(document).click(function () {
        hideBlocks();
    })

} );