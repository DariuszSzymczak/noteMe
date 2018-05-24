console.log("Skrypt załadowano");

function showCallback(){
    
    setTimeout(function(){
        show_all();
            $("#showall").each(function(){
                this.addEventListener('click', function(){
                sendUsers();
                alert("Wywolano metode!");
            })
    })
})
}

function sendUsers(){
    $.ajax ({
        type:'POST',
        url:'./getUsers.php',
        success: function (response){
            let json = JSON.parse(response);
            $('#users').html('');
            let lenght = json.lenght;
            let iterator=0;
            console.log("wywolalo sie drugie chujstwo");
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
    })
}

function showall(json){
    let content =json.content;
    let outerDiv =`<div class="media" style="display:none">
        <div class="media-left"> \ 
            <a href="#"> \
                <img alt="..." src="images/avatar/1.jpg" class="media-object"> \ 
            </a> \
        </div>
        <div class="media-body"> \
            <h4 class="media-heading">${json.login}</h4>\
            <p>${content}</p>\
        </div>\
        </div>`
        $('#users').append(outerDiv);
        $('.media').slideDown(500).delay(300); 
        console.log("wywolalo sie trzecie chujstwo");
    }
    document.addEventListener('DOMContentLoaded', showCallback);
