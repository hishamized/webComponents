var timeUnit = 0;
function triggerProgress(){
    var setInterval_ID = setInterval(progress, 40);
    function progress(){
        let loading = document.getElementById("loading-progress");
        loading.innerText = "LOADING "+timeUnit+" %";
        timeUnit = timeUnit + 1;
        if(timeUnit === 101){
            clearInterval(setInterval_ID);
        }
    }
}
