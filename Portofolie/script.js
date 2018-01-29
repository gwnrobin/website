var timer = 0;
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("sliderImages");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

function animationLoop()
{
  requestAnimationFrame(animationLoop);

  timer++;

  if (timer > 1000)
  {
    plusDivs(+1);
    timer = 0;
  }



}

animationLoop();
