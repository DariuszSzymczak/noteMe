function calendarActiveDot() {
    let date = document.getElementsByClassName('pignose-calendar-unit-active')[0].dataset.date;
    
}


function calendarAddCallback(){
    setTimeout(function(){
        $(".pignose-calendar-unit-date").each(function(){
            let date = this.dataset.date;
            console.log(date);
            this.addEventListener('click',function(){ calendarSendData(date)});
            });
    },1000);
    console.log('calendarAddCallback');

}

function calendarSendData(date){
    console.log('calendarSendData: '+date);
}

document.addEventListener('DOMContentLoaded',calendarAddCallback);