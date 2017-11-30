let menuBar = jQuery("#menubar");
let divPosition = menuBar.offset();
let divTop = divPosition.top;

// nav fixed on Scroll
if (document.documentElement.clientWidth < 600) {
    $(window).scroll(function() {
        if ($(window).scrollTop() > divTop) {
            menuBar[0].setAttribute("style","position: fixed;");
        }
        if ($(window).scrollTop() < divTop) {
            menuBar[0].setAttribute("style","position: relative;");
        }
    });
}

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


document.getElementById('skype').addEventListener('mouseover', function fitb() {
    document.getElementById('socialoutput').innerText = "freggiedelivery@outlook.com";
})

document.getElementById('email').addEventListener('mouseover', function fitb() {
    document.getElementById('socialoutput').innerText = "ironchef@freggie.ca";
})

document.getElementById('facebook').addEventListener('mouseover', function fitb() {
    document.getElementById('socialoutput').innerText = "http://www.facebook.com/freshfreggie";
})

// order tabs
$('.faqquestion').click(function() {
    switch (this.id) {
        case "1":
            $('#1a').toggle();
            $('#1plus').toggleClass("rotate");
    }
    switch (this.id) {
        case "2":
            $('#2a').toggle();
            $('#2plus').toggleClass("rotate");
    }
    switch (this.id) {
        case "3":
            $('#3a').toggle();
            $('#3plus').toggleClass("rotate");
    }
    switch (this.id) {
        case "4":
            $('#4a').toggle();
            $('#4plus').toggleClass("rotate");
    }
    switch (this.id) {
        case "5":
            $('#5a').toggle();
            $('#5plus').toggleClass("rotate");
    }
    switch (this.id) {
        case "6":
            $('#6a').toggle();
            $('#6plus').toggleClass("rotate");
    }
    switch (this.id) {
        case "7":
            $('#7a').toggle();
            $('#7plus').toggleClass("rotate");
    }
    switch (this.id) {
        case "8":
            $('#8a').toggle();
            $('#8plus').toggleClass("rotate");
    }
});