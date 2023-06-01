const body = document.querySelector("body"),
      sidebar = body.querySelector(".sidebar"),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text"),
      container = document.querySelector(".container");

    toggle.addEventListener("click", () =>{
        sidebar.classList.toggle("close");
        container.classList.toggle("active");
    });
    searchBtn.addEventListener("click", () =>{
        sidebar.classList.remove("close");
    });

      modeSwitch.addEventListener("click", () =>{
        body.classList.toggle("dark");

        if(body.classList.contains("dark")){
            modeText.innerText = "Light Mode"
        }else{
            modeText.innerText = "Dark Mode"
          }
      });