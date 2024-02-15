function cleanHTML() {
    // Remove all div elements with class "footerdesc"
    var footerdescElements = document.getElementsByClassName("footerdesc");
    for (var i = 0; i < footerdescElements.length; i++) {
        footerdescElements[i].parentNode.removeChild(footerdescElements[i]);
    }

    // Remove all a elements with class "jagexlink"
    var jagexlinkElements = document.getElementsByClassName("jagexlink");
    for (var j = 0; j < jagexlinkElements.length; j++) {
        jagexlinkElements[j].parentNode.removeChild(jagexlinkElements[j]);
    }
}

// Call the cleanHTML function when the document is loaded
document.addEventListener("DOMContentLoaded", function() {
    cleanHTML();
});
