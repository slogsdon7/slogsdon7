var main =  document.getElementById("root")
var hours = [];
function calculatePay(hours){
    overtime = 0;
    if (hours > 40){
        overtime = hours - 40;
        hours = hours - overtime;
    }
    pay = (hours * 15) + (overtime * 15 * 1.5);
    return pay;
}
function modal(){
    return document.getElementById("modal");
}

function form(){
    return document.getElementById("hoursForm");
}
function submit(){
    return document.getElementById("submit");
}

function showModal(){
   modal().style.display = "block";
}
function hideModal(){
    modal().style.display = "none";
}

function processHours(hoursList){
    if (hoursList.length == 0)
        return null;
    for (var hours of hoursList ){
        console.log(calculatePay(hours));
    }
}
function handleSubmit(e){
    e.preventDefault();
    data =  new FormData(e.target);
    if (data.get("hours") < 0){
        hideModal()
        processHours(hours);
    }
    else
        hours.push(data.get("hours"));
    console.log(hours)
}
function initForm(){
    addFormListener();
}
function addFormListener(){
    form().addEventListener("submit", handleSubmit)
}

initForm();
showModal();