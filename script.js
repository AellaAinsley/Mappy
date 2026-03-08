function extend(id){
    var div = document.getElementById(id);
    div.classList.toggle('hid');
}

function open(id){
    var div = document.getElementById(id);
    div.setAttribute("display", "block");
}