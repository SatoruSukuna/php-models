
AOS.init();
// loader

setInterval(load=()=>{
    let loader =document.querySelector(".load");
    loader.style.display="none";
},2000);

const profile=()=>{
    let profile =document.querySelector(".profile_bar");
    profile.classList.toggle("profile_bars")
    // profile.style.transform="translateX(0rem)";
}