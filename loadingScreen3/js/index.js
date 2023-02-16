timeUnit = 0;
function trigger(){
    var setInterval_Id = setInterval(progress, 40);
    function progress(){
        let progress = document.getElementById("loading");
        progress.innerHTML = timeUnit+" %";
        timeUnit = timeUnit + 1;
        if(timeUnit === 101){
            clearInterval(setInterval_Id);
        }
    }
}
