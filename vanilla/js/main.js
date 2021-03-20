function showHideDiv(){
    var hospitalRadio = document.getElementById("hospitalRadio");
    var hospitalDiv = document.getElementById("hospitalDiv");
    hospitalDiv.style.display = hospitalRadio.checked ? "block" : "none";
}