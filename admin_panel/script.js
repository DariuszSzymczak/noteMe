console.log("Skrypt załadowano");

function showCallback(){
    
    setTimeout(function(){
            $(".btn-showAll").each(function(){
                this.addEventListener('click', function(){
                sendUsers();
            })
    });
            $(".btn-primary-groups").each(function(){
                this.addEventListener('click',function(){
                sendUsersInGroups();    
                })
            })
            $(".btn-showGroups").each(function(){
                this.addEventListener('click',function(){
                showGroups();    
                })
            })
        })
    }

function showGroups(){
    $.ajax ({
        type:'POST',
        url:'./adminhandler.php',
        data:{"showAllGroups":"1"},
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
            animation();
        }
    })
}


function sendUsersInGroups(){
    var group = document.getElementById('GroupName');
    $.ajax({
        type:'POST',
        url:'./adminhandler.php',
        data:{'showUsersIngroup':group.value},
        success: function(response){
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
            animation();
        }
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
            animation();
        }
    })
}

function showall(json){
    let outerDiv =`<div class="media" style="display:none">
        <div class="media-left"> \ 
            <a href="#"> \
                <img alt="..." src="./../avatars/avatar.png" class="media-object" style="width:100px;height:100px;"> \ 
            </a> \
        </div>
        <div class="media-body"> \
            <h4 class="media-heading">${json.login}</h4>\
            <p>E-mail: ${json.email}</p>\
            <p>Miejscowość: ${json.town}</p>\
        </div>\
        </div>`
        $('#users').append(outerDiv);
        $('.media').slideDown(500).delay(300);
    }

function showall(json){
    let outerDiv =`<div class="media" style="display:none">
        <div class="media-body"> \
            <h4 class="media-heading">${json.GroupName}</h4>\
            <p>Liczba użytkownikó: ${json.UserCount} / ${json.Max_count}</p>\
            <p>Administrator grupy: ${json.groupAdmin}</p>\
        </div>\
        </div>`
        $('#users').append(outerDiv);
        $('.media').slideDown(500).delay(300);
    }

    document.addEventListener('DOMContentLoaded', showCallback);
