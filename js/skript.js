function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

(function () {
    // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
    if (!String.prototype.trim) {
        (function () {
            // Make sure we trim BOM and NBSP
            var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
            String.prototype.trim = function () {
                return this.replace(rtrim, '');
            };
        })();
    }

    [].slice.call(document.querySelectorAll('input.input__field, textarea.input__field')).forEach(function (inputEl) {
        // in case the input is already filled..
        if (inputEl.value.trim() !== '') {
            classie.add(inputEl.parentNode, 'input--filled');
        }

        // events:
        inputEl.addEventListener('focus', onInputFocus);
        inputEl.addEventListener('blur', onInputBlur);
    });

    function onInputFocus(ev) {
        classie.add(ev.target.parentNode, 'input--filled');
    }

    function onInputBlur(ev) {
        if (ev.target.value.trim() === '') {
            classie.remove(ev.target.parentNode, 'input--filled');
        }
    }
})();

$('a[href*=\\#]').on('click', function (event) {
    event.preventDefault();
    $('html,body').animate({
        scrollTop: $(this.hash).offset().top
    }, 500);
});

$('.overlay-content a').on("click", function () {
    $("#myNav").css("width", "0%");
});

var da = 0;
var ne = 0;
var output = new Array();
function writeText(form) {
    if (document.getElementById('da').checked || document.getElementById('ne').checked) {
        if (document.getElementById('da').checked) {
            da = da + 1;
            document.getElementById('da1').innerHTML = da;
        } else {

            document.getElementById('da1').innerHTML = da;

        }

        if (document.getElementById('ne').checked) {
            ne = ne + 1;
            document.getElementById('ne1').innerHTML = ne;
        } else {
            document.getElementById('da1').innerHTML = da;
        }
    }
}

if (window.location.href.indexOf('about') !== -1) {
    $.getJSON("https://dog.ceo/api/breeds/image/random", function (result) {
        $("#dog").append("<img style='max-width: 100%' src=" + result.message + "></img>");
    });
}

$(document).on('click', '#yes', function (e) {
    $.ajax({
        data: {
            answer: 'yes',
            username: window.localStorage.getItem("user")
        },
        type: "post",
        url: "../php/anketa.php",
        success: function (data) {
            $("#form").replaceWith( "<h2>Your vote has been recorder, thank you!</h2>" );
        }
    });
});

$(document).on('click', '#no', function (e) {
    $.ajax({
        data: { 
            answer: 'no',
            username: window.localStorage.getItem("user")
        },
        type: "post",
        url: "../php/anketa.php",
        success: function () {
            $("#form").replaceWith( "<h2>Your vote has been recorder, thank you!</h2>" );
        }
    });
});