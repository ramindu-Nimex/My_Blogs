//slider
// create variable

var slide = document.querySelectorAll('.slide');
var radiobtn = document.querySelectorAll('.radbtn');
var leftArrow = document.querySelector('.left');
var rightArrow = document.querySelector('.right');
var slideInt;
var intTime = 5000; // 5s(5000ms)

//iterate all radio btn
radiobtn.forEach(function(item, index) {
    item.addEventListener('click', function() {
        manButtonNav(index);
    });
});

rightArrow.addEventListener('click', function(e) {
    e.preventDefault();
    nextSlide();
    clrInterval();
});

leftArrow.addEventListener('click', function(e) {
    e.preventDefault();
    prevSlide();
    clrInterval();
});

function manButtonNav(index) {
    for(var i = 0; i < slide.length; i++) {
        if(i !== index) {
            slide[i].classList.remove('sli');
            radiobtn[i].classList.remove('active');
        }
        else {
            slide[index].classList.add('sli');
            radiobtn[index].classList.add('active');
        }
    }
    clrInterval();
}

//next slide function
function nextSlide() {
    var sli = document.querySelector('.sli');
    var active = document.querySelector('.active');

    //unset current slide and radio btn
    sli.classList.remove('sli');
    active.classList.remove('active');

    //set next slide and radio btn
    if(sli.nextElementSibling) {
        sli.nextElementSibling.classList.add('sli');
        active.nextElementSibling.classList.add('active');
    }
    else {
        slide[0].classList.add('sli');
        radiobtn[0].classList.add('active');
    }
}

//previous slide function
function prevSlide() {
    var sli = document.querySelector('.sli');
    var active = document.querySelector('.active');

    //unset current slide and radio btn
    sli.classList.remove('sli');
    active.classList.remove('active');

    //set next slide and radio btn
    if(sli.previousElementSibling) {
        sli.previousElementSibling.classList.add('sli');
        active.previousElementSibling.classList.add('active');
    }
    else {
        jeepslide[slide.length - 1].classList.add('sli');
        radiobtn[radiobtn.length - 1].classList.add('active');
    }
}

function clrInterval() {
    clearInterval(slideInt);
    slideInt = setInterval(nextSlide, intTime);
}

slideInt = setInterval(nextSlide, intTime);



