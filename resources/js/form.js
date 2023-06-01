const signinBtn = document.querySelector('.signinBtn');
const signupBtn = document.querySelector('.signupBtn');
const formBx = document.querySelector('.formBx');
const body = document.querySelector('body')
const next = document.querySelector("#next")
const formrecod = document.querySelector(".formrecord")
const recordone = document.querySelector(".recordone")
const recordtwo = document.querySelector(".recordtwo")
const prev = document.querySelector("#prev")


    signupBtn.onclick = function(){
        formBx.classList.add('active')
        body.classList.add('active')
    }

    signinBtn.onclick = function(){
        formBx.classList.remove('active')
        body.classList.remove('active')
    }
    next.addEventListener("click",(e)=>{
        e.preventDefault()
        recordtwo.classList.remove("hidden")
        recordtwo.classList.add("visible")
        recordone.classList.remove("visible")
        recordone.classList.add("hidden")
    })
    prev.addEventListener("click",(e)=>{
        e.preventDefault()
        recordone.classList.remove("hidden")
        recordone.classList.add("visible")
        recordtwo.classList.remove("visible")
        recordtwo.classList.add("hidden")
    })
