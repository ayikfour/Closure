var list, 
    items, 
    submitButton, 
    closeButton, 
    input,
    todo, 
    day;

    submitButton = $('#submit');            
    input = $('#todo');
    submitButton.click(addList); 
    input.keypress(enter);    
    
function enter() {
    let key = event.which;
    if(key == 13) {
        addList();
        return false;
    }
}

function addList() {  
    loadList(); 
    todo = $('#todo').val();
    day = $('#days').val();
    
    if(todo.trim() === '' || todo === null){
        $('#err-msg').transition('fly in');        
    } else {
        $('#err-msg').transition('hide');
        createItem(todo, day);   
        $('#todo').val("");        
        loadList();        
    }   
}

function createItem(todo, day) {    
    var templateClose   = "<i class='delete icon'></i>";
    var templateLabel   = "<div class='ui " + dayColor(day) + " horizontal label'>" + day + " " + templateClose + "</div>";
    var templateItem    = "<div class='item' style='display: none;'>" + templateLabel + " " + todo + "</div>";
    $(list).append(templateItem);        
    $(list).children().last().transition({
        animation : 'fade up',
        duration : '1s'        
    });
    // list.
}

function dayColor(day) {    
    switch (day.toLowerCase()) {
        case 'monday' :
            return "red";
            break;
        case 'tuesday' :
            return "orange";
            break;
        case 'wednesday' :
            return "olive";
            break;
        case 'thursday' :
            return "teal";
            break;
        case 'friday' :
            return "violet";
            break;
        case 'saturday' :
            return "yellow";
            break;
        case 'sunday' :
            return "purple";
            break;        
    }
}


function loadList() {
    list = $('#list');
    items = $(list).children();   
    items.hover(getCloseButton);       
}

function getCloseButton(){
    closeButton = $(this).children().find('.delete.icon');    
    closeButton.toggle();
    closeButton.click(deleteList);    
}

function deleteList() {    
    var item = $(this).parent().parent();
    item.transition({
        animation : 'fly right',
        duration : '0.5s',
        onComplete : function() {
            item.remove();
        }
    });    
}
