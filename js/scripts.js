let menuBar = jQuery("#menubar");
let divPosition = menuBar.offset();
let divTop = divPosition.top;

// nav fixed on Scroll
$(window).scroll(function() {
    if ($(window).scrollTop() > divTop) {
        menuBar[0].setAttribute("style","position: fixed;");
    }
    if ($(window).scrollTop() < divTop) {
        menuBar[0].setAttribute("style","position: relative;");
    }
});

// order tabs
$('.ordertab').click(function() {
    let clicked = this;
    let tabs = document.getElementsByClassName("ordertab");
    let views = document.getElementsByClassName("orderform");
    
    // remove Active
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].className = tabs[i].className.replace("active", "");
    }

    // add active
    clicked.className += " active";

    // change view
    for (let j = 0; j < views.length; j++) {
        let split = views[j].className.split(" ");
        if (!split.includes("hidden")) {
            views[j].className += " hidden";
        }
    }
    let form;
    switch (clicked.id) {
        case "1tab":
            form = document.getElementById('1form');
            form.className = form.className.replace("hidden", "");
            break;
        case "2tab":
            form = document.getElementById('2form');
            form.className = form.className.replace("hidden", "");
            break;
        case "3tab":
            form = document.getElementById('3form');
            form.className = form.className.replace("hidden", "");
            break;
        case "4tab":
            form = document.getElementById('4form');
            form.className = form.className.replace("hidden", "");
            break;
        case "5tab":
            form = document.getElementById('5form');
            form.className = form.className.replace("hidden", "");
            break;
    }


});
