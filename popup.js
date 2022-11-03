const popupScreen = document.querySelector(".popup-screen");
const popupBox = document.querySelector(".popup-box");
const closeBtn = document.querySelector(".close-btn1");
const closeBtn2 = document.querySelector(".close-btn2");
const closeBtn3 = document.querySelector(".close-btn3");
const closeBtn4 = document.querySelector(".closefinalbtn");
const popupBox2 = document.querySelector(".popup-box2");

window.addEventListener("load", () => {
  setTimeout(() => {
    popupScreen.classList.add("active");
  }, 2000); //Popup the screen in 02 seconds after the page is loaded.
});

closeBtn.addEventListener("click", () => {
  popupScreen.classList.remove("active"); //Close the popup screen on click the close button.
  //Create a cookie for a day (to expire within a day) on click the close button.
  document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60; //1 day = 24 hours = 24*60*60
});
closeBtn2.addEventListener("click", () => {
  popupScreen.classList.remove("active"); //Close the popup screen on click the close button.
  //Create a cookie for a day (to expire within a day) on click the close button.
  document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60; //1 day = 24 hours = 24*60*60
});
closeBtn3.addEventListener("click", () => {
  popupScreen.classList.remove("active"); //Close the popup screen on click the close button.
  //Create a cookie for a day (to expire within a day) on click the close button.
  document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60; //1 day = 24 hours = 24*60*60
});
closeBtn4.addEventListener("click", () => {
  popupScreen.classList.remove("active"); //Close the popup screen on click the close button.
  //Create a cookie for a day (to expire within a day) on click the close button.
  document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60; //1 day = 24 hours = 24*60*60
});


//Use the created cookie to hide or show the popup screen.
const WebsiteCookie = document.cookie.indexOf("WebsiteName=");

if(WebsiteCookie != -1){
  popupScreen.style.display = "none"; //Hide the popup screen if the cookie is not expired.
}
else{
  popupScreen.style.display = "flex"; //Show the popup screen if the cookie is expired.
}

//popup-movements../\..

const targetDiv = document.getElementById("first");
const targetDiv2 = document.getElementById("second")
const targetDiv3 = document.getElementById("third")
const targetDiv4 = document.getElementById("fourth")

const btnnxt = document.getElementById("next");
const btnskp = document.getElementById("skip");
const btnnxt2 = document.getElementById("next2");
const btnskp2 = document.getElementById("skip2");
const btnnxt3 = document.getElementById("next3");
const btnskp3 = document.getElementById("skip3");
// const btnskp4 = document.getElementById("");


// PICHAI->MUSK next
btnnxt.onclick = function () {
  if (targetDiv.style.display !== "none") {
    targetDiv.style.display = "none";
    targetDiv2.style.display = "flex";
  } else {
    targetDiv.style.display = "flex";
  }
};

// MUSK->BACH next
btnnxt2.onclick = function () {
  if (targetDiv2.style.display !== "none") {
    targetDiv2.style.display = "none";
    targetDiv3.style.display = "flex";
  } else {
    targetDiv2.style.display = "flex";
  }
};
// BACHCH ->next
btnnxt3.onclick = function(){
  if(targetDiv3.style.display !== "none"){
    targetDiv3.style.display = "none";
    targetDiv4.style.display = "block";
  }
  else{
    targetDiv.style.display = "flex";
  }
}

//PICHAI-> Skip 
btnskp.onclick = function(){
  if(popupScreen.style.display !== "none"){
    popupScreen.style.display = "none";
  }
  else{
    popupScreen.style.display = "flex";
  }
}

// MUSK -> skip
btnskp2.onclick = function(){
  if(popupScreen.style.display !== "none"){
    popupScreen.style.display = "none";
  }
  else{
    popupScreen.style.display = "flex";
  }
}

// BACHCH skip
btnskp3.onclick = function(){
  if(popupScreen.style.display !== "none"){
    popupScreen.style.display = "none";
  }
  else{
    popupScreen.style.display = "flex";
  }
}

// PICHAI CLOSEBTN
closeBtn.onclick = function(){
  if(popupScreen.style.display !== "none"){
    popupScreen.style.display = "none";
  }
  else{
    popupScreen.style.display = "flex";
  }

}

// MUSK CLOSEBTN
closeBtn2.onclick = function(){
  if(popupScreen.style.display !== "none"){
    popupScreen.style.display = "none";
  }
  else{
    popupScreen.style.display = "flex";
  }

}

// BACHCH CLOSEBTN
closeBtn3.onclick = function(){
  if(popupScreen.style.display !== "none"){
    popupScreen.style.display = "none";
  }
  else{
    popupScreen.style.display = "flex";
  }

}

// FINALCLOSEBTN

closeBtn4.onclick = function(){
  if(popupScreen.style.display !== "none"){
    popupScreen.style.display = "none";
  }
  else{
    popupScreen.style.display = "flex";
  }

}

