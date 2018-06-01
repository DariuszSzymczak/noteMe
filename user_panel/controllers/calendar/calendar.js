

console.log("chuj");
function calendarAddCallback() {


    setTimeout(function () {
        calendarGetUserDates();

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
}

function calendarSendData(date) {
    const session = document.getElementById("sessionNumber").dataset.name;
    $.ajax({
        type: 'POST',
        url: 'controllers/calendar/getArticles.php',
        data: {"date":date},
        success: function (response) {
            console.log('klikanie ajax: ');
            console.log(response);
            let json =JSON.parse(response);
            $('#calendarTable').html('')
            let length = json.length;
            let iterator=0;
            function animation(){
                if(iterator < length){
                    setTimeout(function () {  
                        calendarShowTable(json[iterator]);
                        iterator++;
                        animation();
                    },240);
                }   
                
            }
            animation();
        }
    });
}

function calendarGetUserDates(){
    const session = document.getElementById("sessionNumber").dataset.name;
    $.ajax({
        type: 'POST',
        url: 'controllers/calendar/getDates.php',
        data: {"method":"getDates"},
        success: function (response) {
            console.log('Daty AJAX: ');
            console.log(response);
            let json =JSON.parse(response);
            for(x=0;x<json.length;x++){
                let targetData = json[x].dateend;
                let targetElement = $(`.pignose-calendar-unit-date[data-date='${targetData}'] a`).css({background: "#ff99a4"});
            }
            
        }
        
    });
}

function calendarShowTable(json){

    let content = json.content + "...";
    let outerDiv = `<div class="media" style="display: none"> \
    <div class="media-left"> \ 
        <a href="#"> \
            <img alt="..." src="images/avatar/1.jpg" class="media-object"> \ 
        </a> \
    </div> \
    <div class="media-body"> \
        <h4 class="media-heading">${json.topic}</h4>\
        <p>${content}</p>\
        <p class="comment-date">Data zakończenia: ${json.dateend}</p> \
    </div> \
    </div>`
    $('#calendarTable').append(outerDiv);
    $('.media').slideDown(500).delay(300);
}


document.addEventListener('DOMContentLoaded', calendarAddCallback);