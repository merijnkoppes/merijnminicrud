var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-200px";
    }
    prevScrollpos = currentScrollPos;
}

$("#slideshow > div:gt(0)").hide();

setInterval(function() {
    $('#slideshow > div:first')
        .fadeOut(0)

    .next()
        .fadeIn(100)
        .end()
        .appendTo('#slideshow');
}, 5000);

function zoekFunctie() {

    var input, filter, ul, li, h6, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("menulist");
    li = ul.getElementsByTagName("li");

    for (i = 0; i < li.length; i++) {
        h6 = li[i].getElementsByTagName("h6")[0];
        if (h6.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}



function validateForm() {
    if (document.forms["contactform"]["naam"].value == "") {
        alert("naam moet ingevuld zijn");
        return false;
    } else if (document.forms["contactform"]["email"].value == "") {
        alert("email moet ingevuld zijn");
        return false;
    } else if (document.forms["contactform"]["bericht"].value == "") {
        alert("bericht moet ingevuld zijn");
        return false;
    } else {
        alert("je bericht is verstuurd!")
        return true;
    }
}