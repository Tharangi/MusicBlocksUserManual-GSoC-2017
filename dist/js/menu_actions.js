function showBlocks(title, img) {
    document.getElementById("blocks_menu").style.visibility = "visible";
    document.getElementById("menu_header_img").src = img;
    document.getElementById("menu_header_title").textContent = title;
}

function hideBlocks() {
    document.getElementById("blocks_menu").style.visibility = "hidden"
}