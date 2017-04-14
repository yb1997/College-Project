var toggleIcon = document.getElementsByClassName('nav-toggle');
var sideBar = document.getElementById('side-navbar');
var sidebarLinks = document.querySelectorAll('#side-navbar li');
var navMenuIcon = document.getElementsByClassName('nav-menu-icon');
var navMenu = document.getElementsByClassName('nav-menu');
var backgroundFader = document.createElement('div');
backgroundFader.classList.add("background-fader");
document.body.appendChild(backgroundFader);


for(i=0;i<toggleIcon.length;i++) {
  toggleIcon[i].onclick = function() {
    sideBar.classList.toggle('show-side-navbar');
    backgroundFader.classList.toggle('fade-background');// use hasClass method and remove or add this class only when sideBar is closed or opened.
  };
}

navMenuIcon[0].onclick = function() {
  navMenu[0].classList.toggle('show-nav-menu');
};



// Handle clicks on li element inside navigation sidebar
for(let i = 0;i<sidebarLinks.length;i++) {
  sidebarLinks[i].addEventListener("click",function() {
    // sideBar.style.transform = "translate(-100%,0%)"; // .style is returning empty string so use getComputedStyle method
    sideBar.classList.remove('show-side-navbar');
    backgroundFader.classList.remove('fade-background');
  },false);
}
