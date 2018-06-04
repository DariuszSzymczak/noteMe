$(document).ready(function(){
    let input = $('#groupName');
    let box = $('#userlist');
    let outerbox = $('#userlistbox');
    outerbox.hide();
    $( document ).on( 'focus', ':input', function(){
        input.attr("autocomplete", "off");
    });
    
    input.keyup(function(){
        let word = input.val();
        if(word != "") outerbox.show();
        else outerbox.hide();
        $.ajax({
            type: 'POST',
            url: './controllers/getUsersByLetter/handler.php',
            data: {"word":word},
            success: function (response) {
                let json =JSON.parse(response);
                console.log(json);
                box.html("");
                for(x=0;x<json.length;x++){  
                    let login = json[x].login;   
                    let button= `<button type="button" class="btn-success" data-login="${login}"  style="padding: 5px 5%;">+</button>`;              
                    box.append(`<div class="innerBox"data-login="${login}" ><span style="width: 85% !important" >${login}</span>${button}</div>`);
                    LetterGetAvatar(login);
                
                }
                
            }
            
        });
    });



});

function LetterGetAvatar(name){
    $.ajax({
        type: 'POST',
        url: './controllers/getUsersByLetter/handlerAvatar.php',
        data: {"login":name},
        success: function (response) {
           $(`.innerBox[data-login="${name}"]`).prepend(response);
           
            
            
        }
    });
}