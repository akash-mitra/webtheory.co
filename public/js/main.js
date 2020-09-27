// Burger button

let burger = document.querySelectorAll('.burger-btn');
let hidden_menu = document.querySelector('.hidden-menu');
let showed = false;

burger.forEach(function(item, i, burger) {
    item.onclick = function() {
        if (!showed) {
            hidden_menu.style['top']='0px';
            hidden_menu.style['opacity']='1';
            showed = true;
        }
        else {
            hidden_menu.style['top']='-300px';
            hidden_menu.style['opacity']='0';
            showed = false;
        }
    }
});

// Scroll
let hidden_header = document.querySelector('.hidden-header');

window.onscroll = function(e) {
    if (pageYOffset >= 100) {
        hidden_header.style['opacity']='1';
        hidden_header.style['top']='0px';
    }
    else {
        hidden_header.style['opacity']='0';
        hidden_header.style['top']='-100px';
    }
}