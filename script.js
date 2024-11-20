document.addEventListener('DOMContentLoaded',f_main);

function f_main(){

    setTimeout(() => {
        document.getElementById("loadPage").classList.add("invisible");
    }, 1000);

    setTimeout(() => {
        document.getElementsByTagName("aside")[0].style.display = "flex";
        document.getElementsByTagName("svg")[0].classList.add("invisible");
    }, 1200);

    setTimeout(() => {
        document.getElementById("loadPage").style.display = "none";
        document.getElementById("loadPage").style.opacity = "1";
    }, 2000);
    
}


