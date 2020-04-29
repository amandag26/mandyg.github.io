function openSlideMenu() {
    document.getElementById('side-menu').style.width = '250px';
}
function closeSlideMenu() {
    document.getElementById('side-menu').style.width = '0';
}

var acc = document.getElementsByClassName("accordion");

var i;

for(i = 0; i < acc.length; i++) {
    acc[i].onclick = function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if(panel.style.maxHeight) {
            panel.style.maxHeight = null;
        }
        else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    }
}