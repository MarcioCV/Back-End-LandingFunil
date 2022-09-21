const btnMobile = document.getElementById('btn-mobile');
const card = document.getElementsByClassName('card_content');
const videos_div = document.querySelectorAll('.div_review_video');
const videos = document.querySelectorAll('.video_review');
const button_open = document.querySelectorAll('.button_story')
const button_close = document.querySelectorAll('.close_video')

function toggleMenu(event) {
  if (event.type === 'touchstart') event.preventDefault();
  const nav = document.getElementById('nav');
  nav.classList.toggle('active');
  const active = nav.classList.contains('active');
  event.currentTarget.setAttribute('aria-expanded', active);
  if (active) {
    event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
  } else {
    event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
  }
}

function toggleVideo(i) {
  if (videos_div[i].style.display != "flex") {
    videos_div[i].style.display = "flex";
    
    videos_div[i].classList.toggle('fade')
    setTimeout(() => {
      videos[i].play();
    }, 100);

  }
  else {
    videos_div[i].classList.toggle('fade')
    
    setTimeout(() => {
      videos_div[i].style.display = "none";
      
    }, 300);
    videos[i].pause();
  }
}


button_open[0].addEventListener('click', function () { toggleVideo(0) }, false)
button_open[1].addEventListener('click', function () { toggleVideo(1) }, false)
button_open[2].addEventListener('click', function () { toggleVideo(2) }, false)
button_open[3].addEventListener('click', function () { toggleVideo(3) }, false)
button_open[4].addEventListener('click', function () { toggleVideo(4) }, false)
button_open[5].addEventListener('click', function () { toggleVideo(5) }, false)
button_open[6].addEventListener('click', function () { toggleVideo(6) }, false)
button_open[7].addEventListener('click', function () { toggleVideo(7) }, false)
button_open[8].addEventListener('click', function () { toggleVideo(0) }, false)
button_open[9].addEventListener('click', function () { toggleVideo(1) }, false)
button_open[10].addEventListener('click', function () { toggleVideo(2) }, false)
button_open[11].addEventListener('click', function () { toggleVideo(3) }, false)
button_open[12].addEventListener('click', function () { toggleVideo(4) }, false)
button_open[13].addEventListener('click', function () { toggleVideo(5) }, false)
button_open[14].addEventListener('click', function () { toggleVideo(6) }, false)
button_open[15].addEventListener('click', function () { toggleVideo(7) }, false)

button_close[0].addEventListener('click', function () { toggleVideo(0) }, false)
button_close[1].addEventListener('click', function () { toggleVideo(1) }, false)
button_close[2].addEventListener('click', function () { toggleVideo(2) }, false)
button_close[3].addEventListener('click', function () { toggleVideo(3) }, false)
button_close[4].addEventListener('click', function () { toggleVideo(4) }, false)
button_close[5].addEventListener('click', function () { toggleVideo(5) }, false)
button_close[6].addEventListener('click', function () { toggleVideo(6) }, false)
button_close[7].addEventListener('click', function () { toggleVideo(7) }, false)


btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);


function myFunction() {
  console.log(document.documentElement.clientWidth)
  var element = document.getElementsByClassName("carousel-desktop");
  var element2 = document.getElementsByClassName("carousel-mobile");

  if (document.documentElement.clientWidth < 887) {
    console.log("Removeu desktop add mobile")
    element[0].classList.remove("carousel-item");
    element[1].classList.remove("carousel-item");
    element[0].classList.remove("active");
    element[1].classList.remove("active");

    element2[0].classList.add("carousel-item")
    element2[0].classList.add("active")
    element2[1].classList.add("carousel-item")
    element2[2].classList.add("carousel-item")
    element2[3].classList.add("carousel-item")
  }
  else {
    if (element[0].classList.contains("carousel-item") == false){
      
      element[0].classList.add("carousel-item")
      element[1].classList.add("carousel-item")
      element[0].classList.add("active")

      element2[0].classList.remove("active")
      element2[1].classList.remove("active")
      element2[2].classList.remove("active")
      element2[3].classList.remove("active")

      element2[0].classList.remove("carousel-item")
      element2[1].classList.remove("carousel-item")
      element2[2].classList.remove("carousel-item")
      element2[3].classList.remove("carousel-item")
    }
  }
}


window.addEventListener("resize", myFunction);

window.onload(myFunction())
