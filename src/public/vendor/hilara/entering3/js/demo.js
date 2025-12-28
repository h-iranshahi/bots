
var isInViewport = function (elem) {
    var rect = elem.getBoundingClientRect();
    var html = document.documentElement;

    return (
        rect.top <= ( (window.innerHeight || html.clientHeight) / 2) &&
        rect.bottom >= 0
    );


};

var docs_items = document.querySelectorAll('.docs-item'),
    doc_section,
    doc_sections_array = [],
    target_sidebar_link;


var s = document.querySelector("#sidebar");
var st = document.querySelector("#scroll-top");


var scrollStop = function (callback) {
    if (!callback || typeof callback !== 'function') return;
    var isScrolling;

    document.body.addEventListener('scroll', function (event) {
        window.clearTimeout(isScrolling);
        isScrolling = setTimeout(function() {
            callback();
        }, 66);

    }, false);
};


var imagesToPreload = ['images/palms.jpg', 'images/waves.jpg'];

function preloadImages(){
    var images = [];

    if( imagesToPreload.length ){
        for (var i = 0; i < imagesToPreload.length; i++) {
            images[i] = new Image();
            images[i].src = imagesToPreload[i];
        }
    }
}
preloadImages();

function setFormColor(colorTheme) {
    if( colorTheme ){
        var simple_forms = document.querySelectorAll(".simple-form");

        if( simple_forms ){
            for (var i=0; i<simple_forms.length; i++){
                var form = simple_forms[i];
                var form_themes = ['white', 'dark', 'purple', 'red', 'green', 'blue', 'faded-light', 'faded-dark'];

                var intro     = document.querySelector("#intro");
                var particles = document.querySelector("#particles");

                if( form.classList.contains("main-demo-form") ){
                    for (var j=0; j<form_themes.length; j++){
                        form.classList.remove(form_themes[j]);
                    }

                    form.style = "";
                    form.classList.add(colorTheme);

                    if( intro ){
                        if( colorTheme === "white" ){
                            intro.style = "background: linear-gradient(45deg, rgba(100,71,218,1) 30%, rgba(253,125,201,1) 100%)";
                            particles.style = "opacity: 1;";
                        }
                        else if( colorTheme === "dark" ){
                            intro.style = "background: #333333;";
                            particles.style = "opacity: 1;";
                        }
                        else if( colorTheme === "faded-light" ){
                            intro.style = "background: #333333 url(images/palms.jpg);";
                            particles.style = "opacity: 0;";
                        }
                        else if( colorTheme === "faded-dark" ){
                            intro.style = "background: #333333 url(images/waves.jpg);";
                            particles.style = "opacity: 0;";
                        }
                        else if( colorTheme === "purple" ){
                            intro.style = "background: #754ACA;";
                            particles.style = "opacity: 1;";
                        }
                        else if( colorTheme === "red" ){
                            intro.style = "background: #650308;";
                            particles.style = "opacity: 1;";
                        }
                        else if( colorTheme === "green" ){
                            intro.style = "background: #519134;";
                            particles.style = "opacity: 1;";
                        }
                        else if( colorTheme === "blue" ){
                            intro.style = "background: #4A489A;";
                            particles.style = "opacity: 1;";
                        }

                    }
                }
            }
        }
    }
}

function setFormStyle(style) {
    if( style ){
        var simple_forms = document.querySelectorAll(".simple-form");

        if( simple_forms ){
            for (var i=0; i<simple_forms.length; i++){
                var form = simple_forms[i];
                var form_styles = ['underline-style', 'classic-style', 'classic-rounded-style', 'modern-style', 'modern-rounded-style', 'none-style', 'custom-style'];

                if( form.classList.contains("main-demo-form") ){
                    for (var j=0; j<form_styles.length; j++){
                        form.classList.remove(form_styles[j]);
                    }

                    form.classList.add(style);
                }
            }
        }
    }
}

var set_color = document.querySelectorAll(".set-form-theme");
if( set_color ){
    for (var i=0; i<set_color.length; i++){
        var el = set_color[i];

        el.addEventListener('click', function(e) {
            e.preventDefault();
            var el_color = e.target.getAttribute("data-color-theme");
            if( el_color ) setFormColor(el_color);
        });
    }
}

var custom_form_color = document.querySelector("#custom-form-color");

if( custom_form_color ){
    custom_form_color.addEventListener('input', function(e) {

        var simple_forms = document.querySelectorAll(".simple-form");

        if( simple_forms ){
            for (var i=0; i<simple_forms.length; i++){
                var form = simple_forms[i];

                form.style = "background-color: " + custom_form_color.value + "; background-image: none;";
            }
        }

    });
}


var set_style = document.querySelectorAll(".set-form-style");
if( set_style ){
    for (var g=0; g<set_style.length; g++){
        var li = set_style[g];

        li.addEventListener('click', function(e) {
            e.preventDefault();
            var el_style = e.target.getAttribute("data-style");
            if( el_style ) setFormStyle(el_style);
        });
    }
}


var li_hover = document.querySelectorAll(".sidebar-section ul li");
if( li_hover ){
    for (var l=0; l<li_hover.length; l++){
        var list_items = li_hover[l];

        list_items.addEventListener('click', function(e) {
            var parent_ul = e.target.closest("ul");

            if( parent_ul ) {
                var all_li = parent_ul.querySelectorAll("li");

                for(var m=0; m<all_li.length; m++){
                    var li_item = all_li[m];
                    li_item.classList.remove("active");
                }
            }

            if( e.target.tagName === "LI" ) e.target.classList.add("active");
            else e.target.closest("li").classList.add("active");

            if( window.innerWidth <= 575 ){
                hideSidebar();
            }
        });
    }
}

// sidebar toogle
 var main_sidebar   = document.querySelector("#main-sidebar");
var hello_tip      = document.querySelector(".hello-tip");
 

if( window.innerWidth > 1300 ){
   // main_sidebar.classList.add("active");
    //docs_sidebar.classList.add("active");

   // sidebar_toggle.classList.add("active");
}

function hideSidebar() {
    main_sidebar.classList.remove("active");

}


// sticky header
var stuck = false;
var stickPoint = getDistance();

function getDistance() {
    return 0;
}

window.onscroll = function(e) {
    var distance = getDistance() - window.pageYOffset;
    var offset = window.pageYOffset;
    if ( (distance <= 0) && !stuck) {
        stuck = true;
    }
    else if (stuck && (offset <= stickPoint)){
        h.style.position = 'static';
        stuck = false;
    }
}

const copyToClipboard = str => {
    const el = document.createElement('textarea');
    el.value = str;
    el.setAttribute('readonly', '');
    //el.style.position = 'absolute';
    //el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
   // document.body.removeChild(el);
};


var copy_btn = document.querySelectorAll(".copy-btn");

if(copy_btn){
    for (var j=0; j<copy_btn.length; j++){
        copy_btn[j].onclick = function(e){
            e.preventDefault();
        }
    }
}

var pre = document.querySelectorAll("pre");

if(pre){
    for (var p=0; p<pre.length; p++){
        var cb = document.createElement("span");
        cb.classList.add("copy-btn");
        cb.innerHTML = "Copy";

        pre[p].appendChild(cb);
    }
}


var click_target, parent_pre, parent_code;
document.body.onclick = function (e) {
    click_target = e.target;
    if( click_target.classList.contains("copy-btn") ){
        parent_pre  = click_target.closest("pre");
        parent_code = parent_pre.querySelector("code");

        copyToClipboard(parent_code.textContent);
    }
}

if( typeof particlesJS !== typeof undefined ){
    particlesJS("particles", {
        "particles": {
            "number": {
                "value": 70,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.2,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 3,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
}