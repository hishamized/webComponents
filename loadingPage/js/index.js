var timeUnit = 0;
function triggerProgress(){
    var setInterval_ID = setInterval(progress, 40);
    function progress(){
        let loading = document.getElementById("loading-progress");
        loading.innerText = "Loading "+timeUnit+" %";
        timeUnit = timeUnit + 1;
        if(timeUnit === 100){
            let loadingJuice = document.getElementById("loading-juice");
            loadingJuice.style.width = "15vw";
            loadingJuice.style.borderRadius = "2vw";
            loadingJuice.style.backgroundColor = "lawngreen";
            let logo = document.getElementById("logo");
            logo.style.animation = "inflate 1s";
            logo.style.animationFillMode = "forwards";
        }
        if(timeUnit === 101){
            clearInterval(setInterval_ID);
        }
    }
}
