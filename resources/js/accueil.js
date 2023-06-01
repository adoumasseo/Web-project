

const menuHamburger = document.querySelector(".menu-hamburger");
const navlinks = document.querySelector(".nav-links");
const search=document.querySelector(".search-bar");

menuHamburger.addEventListener('click',()=>{
    navlinks.classList.toggle('mobile-menu');
    search.classList.toggle('mobile-search');
});


const element = document.querySelectorAll('.body--content');
const optionalCourses = document.querySelectorAll(".optional--course");
const matieres = document.querySelectorAll(".img--matiere--bloc") ;
const clubs = document.querySelectorAll(".club--item") ;

const options = {
  root : null ,
  rootMargin : '0px' ,
  threshold : .5
};

function handleIntersection(entries , observer)
{
  entries.forEach(entry => {
    if(entry.isIntersecting)
    {
      entry.target.style.animationDelay = "1s" ;
      entry.target.style.animation = "apparition .5s forwards" ;
      observer.unobserve(entry.target);
    }

  });
}

const observer = new IntersectionObserver(handleIntersection , options) ;

function observation(targts)
{
  targts.forEach(targt => {
    observer.observe(targt) ;
  });
}

observation(element) ;

observation(optionalCourses) ;

observation(matieres) ;