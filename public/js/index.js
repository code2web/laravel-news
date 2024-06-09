/*sideScroll*//*sideScroll*//*sideScroll*//*sideScroll*/
const btnSide1 = document.querySelector('.btnSide1');
const btnSide2 = document.querySelector('.btnSide2');
const sideScroll1 = document.querySelector('.sideScroll1');
const sideScroll2 = document.querySelector('.sideScroll2');
btnSide1.addEventListener('click', ()=>{
	sideScroll1.style.display = 'grid';
	sideScroll2.style.display = 'none';
	btnSide1.classList.add('btnSideActive');
	btnSide2.classList.remove('btnSideActive');
});
btnSide2.addEventListener('click', ()=>{
	sideScroll2.style.display = 'grid';
	sideScroll1.style.display = 'none';
	btnSide2.classList.add('btnSideActive');
	btnSide1.classList.remove('btnSideActive');
});
/*sideScroll*//*sideScroll*//*sideScroll*//*sideScroll*/
/*ecommerc*//*ecommerc*//*ecommerc*//*ecommerc*/
const btnDiffrentEcom1 = document.querySelector('.btnDiffrentEcom1');
const btnDiffrentEcom2 = document.querySelector('.btnDiffrentEcom2');
const businessEcom = document.querySelector('.businessEcom');
const shareEcom = document.querySelector('.shareEcom');
btnDiffrentEcom1.addEventListener('click', ()=>{
	businessEcom.style.display = 'grid';
	shareEcom.style.display = 'none';
	btnDiffrentEcom1.classList.add('btnDiffrentEcomActive');
	btnDiffrentEcom2.classList.remove('btnDiffrentEcomActive');
});
btnDiffrentEcom2.addEventListener('click', ()=>{
	shareEcom.style.display = 'grid';
	businessEcom.style.display = 'none';
	btnDiffrentEcom2.classList.add('btnDiffrentEcomActive');
	btnDiffrentEcom1.classList.remove('btnDiffrentEcomActive');
});
/*ecommerc*//*ecommerc*//*ecommerc*//*ecommerc*/
/* Sports Functionality */
const sBtns = document.querySelector(".sBtns");
const sBtn = document.querySelectorAll('.sBtn');
const sIndivitualAll = document.querySelectorAll(".play");

const sBtn1 = document.querySelector(".btnDiffrentPlayFirst").classList.add('btnDiffrentPlayActive');

const sIndivitual2 = document.querySelector(".play-cric").classList.add('sBtn-not-active');
const sIndivitual3 = document.querySelector(".play-foot").classList.add('sBtn-not-active');

sBtns.addEventListener('click', (e)=>{
	const sBtnClicked = e.target;
	// console.log(sBtnClicked);
	if(!sBtnClicked.classList.contains("btnDiffrentPlay")) return; //for outside click not work
	sBtn.forEach((curElem)=>curElem.classList.remove('btnDiffrentPlayActive'));
	sBtnClicked.classList.add('btnDiffrentPlayActive');

	sBtnNum = sBtnClicked.dataset.sbtnNum;
	// console.log(sBtnNum);
	const sActive = document.querySelectorAll(`.sBtn--${sBtnNum}`);
	sIndivitualAll.forEach((curElem)=>curElem.classList.add('sBtn-not-active'));
	sActive.forEach((curElem)=>curElem.classList.remove('sBtn-not-active'));
})
/* Sports Functionality */
/*Slide Functionality*//*Slide Functionality*//*Slide Functionality*/
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" activeSlide", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " activeSlide";
}
/*Slide Functionality*//*Slide Functionality*//*Slide Functionality*/

/*	for mobile menu EACH PAGE IN LARAVEL ETC like this querySelectorAll And forEach*/
// const mobileNav = document.querySelectorAll(".mobileNavberBtn");
// const headerElem = document.querySelectorAll(".mobileNavbarDisplay");
// mobileNav.forEach((curElem)=>{
// 	curElem.addEventListener("click", () => {
// 		headerElem.forEach((curElem)=>{
// 				curElem.classList.toggle("active");
// 		});
// });
// });
/*	for mobile menu EACH PAGE IN LARAVEL ETC like this querySelectorAll And forEach*/


// const headerElem = document.querySelector(".header");
/*	for mobile menu*/
// const mobileNav = document.querySelector(".mobileNavberBtn");
// const headerElem = document.querySelector(".mobileNavbarDisplay");
// mobileNav.addEventListener("click", () => {
// 	headerElem.classList.toggle("active");
// });

// const headerElemEach = document.querySelectorAll(".linkNavDiv");
// headerElemEach.forEach((elem) => {
// 	elem.addEventListener("click", () => {
// 		document.querySelector(".active")?.classList.remove("active");		
// 	});
// });
/*	for mobile menu*/
/*searchHover mobile*//*searchHover mobile*/
// const searchIcon = document.querySelector('.searchIcon');
// const searchHover = document.querySelector('.searchHover');
// const mobileNavbarDisplay = document.querySelector('.mobileNavbarDisplay');
// const searchHoverClose = document.querySelector('.searchHoverClose');
// searchIcon.addEventListener('click', () => {
// 	searchHover.style.display= 'block';
// 	mobileNavbarDisplay.style.display= 'none';
// });
// searchHoverClose.addEventListener('click', () => {
// 	searchHover.style.display= 'none';
// 	mobileNavbarDisplay.style.display= 'block';
// });
/*searchHover mobile*//*searchHover mobile*/


/*Sports Functionality mobile*//*Sports Functionality mobile*/
const sBtnsMobile = document.querySelector(".sBtnsMobile");
const sIndivitualAllMobile = document.querySelectorAll(".playMobile");

const sIndivitual2Mobile = document.querySelector(".play-cricMobile").classList.add('sBtn-not-activeMobile');
const sIndivitual3Mobile = document.querySelector(".play-footMobile").classList.add('sBtn-not-activeMobile');

sBtnsMobile.addEventListener('click', (e)=>{
	const sBtnClickedMobile = e.target;
	if(!sBtnClickedMobile.classList.contains("btnNot")) return; //for outside click not work

	sBtnmNum = sBtnClickedMobile.dataset.sbtnmNum;
	const sActiveMobile = document.querySelectorAll(`.sBtnMobile--${sBtnmNum}`);
	sIndivitualAllMobile.forEach((curElem)=>curElem.classList.add('sBtn-not-activeMobile'));
	sActiveMobile.forEach((curElem)=>curElem.classList.remove('sBtn-not-activeMobile'));
})
/*Sports Functionality mobile*//*Sports Functionality mobile*/


/*defaultImg*//*defaultImg*//*defaultImg*/
// const img = document.getElementsByTagName('img')
// for (var i = 0; i < img.length; i++){
// 	img[i].addEventListener('error', function(event) {
// 		event.target.src = 'img/default.jpg'
// 		event.onerror = null
// 	})
// }

// const img = document.getElementsByTagName('img')
// for (var i = 0; i < img.length; i++) {
// 	img[i].onerror = function(event) {
// 		event.target.src = 'img/default.jpg'
// 		img.onerror = null
// 	}
// }
/*defaultImg*//*defaultImg*//*defaultImg*/

/*video Functionality*//*video Functionality*//*video Functionality*/
var modal = document.querySelectorAll(".modal"); // Get the modal
var vOpen = document.querySelectorAll(".vOpen"); // Get the button that opens the modal
var vClose = document.querySelectorAll(".vClose"); // Get the <span> element that closes the modal
// var video = document.querySelector('video'); // Get video element FOR video stoping in background
// When the user clicks the button, open the modal 
vOpen.forEach((curElem)=>{
	curElem.addEventListener('click', () => {
	  modal.forEach((curElem, index)=>{
	  	curElem.style.display = "block";
	  	// const modalData = index.dataset.vNum;
	  	// console.log(modalData);
	  	// console.log(index.dataset.vNum[0]);
	  })	  	  
	})
})
// When the user clicks on <span> (x), close the modal
vClose.forEach((curElem)=>{
	curElem.addEventListener('click', () => {
	  modal.forEach((curElem)=>{
	  	curElem.style.display = "none";
	  	stopVideos();
	  })	  	  
	})
})
// When the user clicks anywhere outside of the modal, close it
window.addEventListener('click', function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    // video.pause();
    stopVideos();
  }
}) 
// stop background play video
var stopVideos = function () {
	var videos = document.querySelectorAll('iframe, video');
	Array.prototype.forEach.call(videos, function (video) {
		if (video.tagName.toLowerCase() === 'video') {
			video.pause();
		} else {
			var src = video.src;
			video.src = src;
		}
	});
};
/*video Functionality*//*video Functionality*//*video Functionality*/


