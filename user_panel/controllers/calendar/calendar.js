function calendarActiveDot() {
    let date = document.getElementsByClassName('pignose-calendar-unit-active')[0].dataset.date;

}

console.log("chuj");
function calendarAddCallback() {


    setTimeout(function () {
        $(".pignose-calendar-unit-date").each(function () {

            let date = this.dataset.date;
            this.addEventListener('click', function () {
                calendarSendData(date);
            });
        });
        let arrows = $('.pignose-calendar-top-icon');
        $(arrows).each(function () {
            $(this).click(function () {
                calendarAddCallback();        
            });
        });


    }, 100);
    console.log('calendarAddCallback');
}

function calendarSendData(date) {
    const session = document.getElementById("sessionNumber").dataset.name;
    console.log(session);
    $.ajax({
        type: 'POST',
        url: 'controllers/calendar/getArticles.php',
        data: {"date":date},
        success: function (response) {
            let json =JSON.parse(response);
            console.log(json);
            
        }
    });
}



document.addEventListener('DOMContentLoaded', calendarAddCallback);