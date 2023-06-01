// ===========================================GESTION DE L'ANIMATION SUIVANT LE SCROLL DE LA PAGE ===================
const examsBloc = document.querySelector(".exams_results");
console.log(examsBloc);

const compteurneg = 0;
const topElementTopViewPort = examsBloc.getBoundingClientRect().top;
console.log(topElementTopViewPort);

// :/ =========================================== JS des pourentages du CEP =================================

let compteurCep = document.querySelector(".cep");
let circlevalueCep = document.querySelector(".cep-value");

let startvalueCep = 0;
let endvalueCep = 100;

let ProgressCEP = setInterval(() => {
  startvalueCep++;
  compteurCep.style.background = `conic-gradient(var(--title-color) ${
    startvalueCep * 3.6
  }deg ,#ededed 0deg)`;
  circlevalueCep.textContent = ` ${startvalueCep}%`;
  if (startvalueCep == endvalueCep) {
    clearInterval(ProgressCEP);
  }
}, 10);

// =========================================== JS des pourentages du CEP =================================

// =========================================== JS des pourentages du BEPC =================================
let compteurBepc = document.querySelector(".bepc");
let circlevalueBepc = document.querySelector(".bepc-value");

let startvalueBepc = 0.4;
let endvalueBepc = 73.4;

let ProgressBEPC = setInterval(() => {
  startvalueBepc++;
  compteurBepc.style.background = `conic-gradient(var(--title-color) ${
    startvalueBepc * 3.6
  }deg ,#ededed 0deg)`;
  circlevalueBepc.textContent = ` ${startvalueBepc}%`;
  if (startvalueBepc == endvalueBepc) {
    clearInterval(ProgressBEPC);
  }
}, 10);

// =========================================== JS des pourentages du BEPC =================================

// =========================================== JS des pourentages du BAC =================================

let compteurBac = document.querySelector(".bac");
let circlevalueBac = document.querySelector(".bac-value");

let startvalueBac = 0.5;
let endvalueBac = 60.5;

let ProgressBAC = setInterval(() => {
  startvalueBac++;
  compteurBac.style.background = `conic-gradient(var(--title-color) ${
    startvalueBac * 3.6
  }deg ,#ededed 0deg)`;
  circlevalueBac.textContent = ` ${startvalueBac}%`;
  if (startvalueBac == endvalueBac) {
    clearInterval(ProgressBAC);
  }
}, 10);

// =========================================== JS des pourentages du BAC =================================

// =========================================== FIRST PART GESTION DES PETITS COMPTEURS================================

const percent = document.querySelector(".percent");
const candidateCircleValue = document.querySelector(".candidate-percent-value");

let SecondstartValue = 0;

const secondpercent = document.querySelector(".second-percent");
const secondValue = document.querySelector(".second-value");

let startValue = 0;
let endValue = 100;

let SmallSecondProgress = setInterval(() => {
  startValue++;

  secondpercent.style.background = `conic-gradient(var(--title-color)${
    startValue * 3.6
  }deg ,#ededed 0deg)`;
  secondValue.textContent = ` ${startValue}%`;
  if (startValue == endValue) {
    clearInterval(SmallSecondProgress);
  }
}, 10);

let SmallProgress = setInterval(() => {
  SecondstartValue++;

  percent.style.background = `conic-gradient(var(--title-color)${
    SecondstartValue * 3.6
  }deg ,#ededed 0deg)`;
  candidateCircleValue.textContent = ` ${SecondstartValue}%`;
  if (SecondstartValue == endValue) {
    clearInterval(SmallProgress);
  }
}, 10);
// =========================================== FIRST PART GESTION DES PETITS COMPTEURS================================

// =========================================== SECOND PART GESTION DES PETITS COMPTEURS================================
const percentbepc = document.querySelector(".percent-bepc");
const candidateCircleValuebepc = document.querySelector(".percent-value-bepc");

let startValuebepc = 0;
let endValuebepc = 100;

let SmallProgressbepc = setInterval(() => {
  startValuebepc++;

  percentbepc.style.background = `conic-gradient(var(--title-color)${
    startValuebepc * 3.6
  }deg ,#ededed 0deg)`;
  candidateCircleValuebepc.textContent = ` ${startValuebepc}%`;
  if (startValuebepc == endValuebepc) {
    clearInterval(SmallProgressbepc);
  }
}, 10);

const secondpercentbepc = document.querySelector(".second-percent-bepc");
const secondValuebepc = document.querySelector(".second-value-bepc");

let SecondstartValuebepc = 0.7;
let secondEndValuebepc = 83.7;

let SmallSecondProgressbepc = setInterval(() => {
  SecondstartValuebepc++;

  secondpercentbepc.style.background = `conic-gradient(var(--title-color)${
    SecondstartValuebepc * 3.6
  }deg ,#ededed 0deg)`;
  secondValuebepc.textContent = ` ${SecondstartValuebepc}%`;
  if (SecondstartValuebepc == secondEndValuebepc) {
    clearInterval(SmallSecondProgressbepc);
  }
}, 10);

// ===========================================SECOND PART GESTION DES PETITS COMPTEURS================================

// =========================================== THIRD PART GESTION DES PETITS COMPTEURS================================
const percentbac = document.querySelector(".percent-bac");
const candidateCircleValuebac = document.querySelector(".percent-value-bac");

let startValuebac = 0;
let endValuebac = 70;

let SmallProgressbac = setInterval(() => {
  startValuebac++;

  percentbac.style.background = `conic-gradient(var(--title-color)${
    startValuebac * 3.6
  }deg ,#ededed 0deg)`;
  candidateCircleValuebac.textContent = ` ${startValuebac}%`;
  if (startValuebac == endValuebac) {
    clearInterval(SmallProgressbac);
  }
}, 10);

const secondpercentbac = document.querySelector(".second-percent-bac");
const secondValuebac = document.querySelector(".second-value-bac");

let SecondstartValuebac = 0;
let secondEndValuebac = 50;

let SmallSecondProgressbac = setInterval(() => {
  SecondstartValuebac++;

  secondpercentbac.style.background = `conic-gradient(var(--title-color)${
    SecondstartValuebac * 3.6
  }deg ,#ededed 0deg)`;
  secondValuebac.textContent = ` ${SecondstartValuebac}%`;
  if (SecondstartValuebac == secondEndValuebac) {
    clearInterval(SmallSecondProgressbac);
  }
}, 10);

const thridpercentbac = document.querySelector(".third-percent-bac");
const thirdValuebac = document.querySelector(".third-value-bac");

let thirdstartValuebac = 0;
let thirdEndValuebac = 100;

let SmallthirdProgressbac = setInterval(() => {
  thirdstartValuebac++;

  thridpercentbac.style.background = `conic-gradient(var(--title-color)${
    thirdstartValuebac * 3.6
  }deg ,#ededed 0deg)`;
  thirdValuebac.textContent = ` ${thirdstartValuebac}%`;
  if (thirdstartValuebac == thirdEndValuebac) {
    clearInterval(SmallthirdProgressbac);
  }
}, 10);

const fourthpercentbac = document.querySelector(".fourth-percent-bac");
const fourthValuebac = document.querySelector(".fourth-value-bac");

let fourthstartValuebac = 0;
let fourthEndValuebac = 57;

let SmallfourthProgressbac = setInterval(() => {
  fourthstartValuebac++;

  fourthpercentbac.style.background = `conic-gradient(var(--title-color)${
    fourthstartValuebac * 3.6
  }deg ,#ededed 0deg)`;
  fourthValuebac.textContent = ` ${fourthstartValuebac}%`;
  if (fourthstartValuebac == fourthEndValuebac) {
    clearInterval(SmallfourthProgressbac);
  }
}, 10);

// ===========================================THIRD PART GESTION DES PETITS COMPTEURS================================

// ===========================================GESTION DE L'ANIMATION SUIVANT LE SCROLL DE LA PAGE ===================





// =============================================================== SWIPER JS =======================================

const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});


// =============================================================== SWIPER JS =======================================
