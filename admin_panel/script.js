console.log("Skrypt załadowano");

function showCallback(){
    
    setTimeout(function(){
            $(".btn-showAll").each(function(){
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
        url:'./adminhandler.php',
        data:{"showalluser":"1"},
        success: function (response){
            let json = JSON.parse(response);
            $('#users').html('');
            var lenght = json.length;
            var iterator=0;
            function animation(){
                if(iterator < lenght){
                    setTimeout(function () {  
                       showall(json[iterator]);
                        iterator++;
                        animation();
                    },240);
                }    
            }
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
