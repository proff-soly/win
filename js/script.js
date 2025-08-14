var countDownDate = new Date("Apr 30, 2026  18:30:00").getTime();
var x = setInterval(function() {
    var counter = document.getElementById("countdown") ;
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    counter.innerHTML = days + " يوم " + hours + " ساعه " + minutes + " دقيقة " + seconds + " ثانية " ;
    if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "لقد وصلت متاخرا";
    }
    }, 1000);


const win = document.querySelector("#winner");

win.addEventListener('click', function() {
    setTimeout(function() {
        myModal.show();
    }, 1000);
    
});

var myModal = new bootstrap.Modal(document.getElementById('modal'), {
    keyboard: false
})