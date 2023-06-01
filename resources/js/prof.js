const notif_btn = document.querySelector("#notifs-btn");
const marks_btn = document.querySelector("#marks-btn");
const backHome_btn = document.querySelector("#back-home");
const container = document.querySelector(".container");
const notifs_previews = document.querySelector(".notifs-previews");
const notifs_views = document.querySelector(".notifs-views");
const notifs = document.querySelectorAll(".notif");
const close_notifs_views = document.querySelector('#close-notifs-views');

//-------------------------------------------------------------------------------------------------

const menuHamburger = document.querySelector(".menu-hamburger");
const navlinks = document.querySelector(".nav-links");
const search = document.querySelector(".search-bar");

//-------------------------------------------------------------------------------------------------

const modalContainer = document.querySelector('.modal-container');
const modalTriggers = document.querySelectorAll('.modal-trigger');

//-------------------------------------------------------------------------------------------------

modalTriggers.forEach(trigger => trigger.addEventListener('click', toggleModal));

function toggleModal(){
   modalContainer.classList.toggle("active")
}

//-------------------------------------------------------------------------------------------------

menuHamburger.addEventListener('click',()=>{
    navlinks.classList.toggle('mobile-menu')
    search.classList.toggle('mobile-search')
})

//-------------------------------------------------------------------------------------------------

notif_btn.addEventListener('click', () => {
    container.classList.add("notifs-mode");
    notifs_previews.style.zIndex = 100;
});

backHome_btn.addEventListener('click', () => {
    container.classList.remove("notifs-mode");
    notifs_views.classList.remove("notifs-views-active");
    notifs_previews.style.zIndex = 0;
});

notifs.forEach( notif => notif.addEventListener('click', () => {
    notifs_views.classList.toggle("notifs-views-active");
}))

close_notifs_views.addEventListener('click', () => {
    notifs_views.classList.remove("notifs-views-active");
})
