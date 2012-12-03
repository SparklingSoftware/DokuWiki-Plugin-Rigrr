

jQuery(window).load(function () {
    //$(window).load(function() {
    //jQuery(document).ready(function() {

    // showPanel(jQuery.fn.jquery);
    // setTimeout(function(){runRigrr() },500);
    runRigrr();
});

function showPanel(fieldName) {
    var fieldNameElement = document.getElementById("theCanvas");
    while (fieldNameElement.childNodes.length >= 1) {
        fieldNameElement.removeChild(fieldNameElement.firstChild);
    }
    fieldNameElement.appendChild(fieldNameElement.ownerDocument.createTextNode(fieldName));
}

function runRigrr() {
    var BPMN = document.getElementById("rigrr_bpmn").value;
    try {
        var lib = new com.rapilabs.Rigrr('theCanvas');
        lib.drawDiagram("rigrr_canvas", BPMN);
    }
    catch (err) {
        txt = "There was an error on this page.\n\n";
        txt += "Error description: " + err.message + "\n\n";
        txt += "Click OK to continue.\n\n";
        alert(txt);
    }
}
