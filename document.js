
function charger_menu(){
    var menu =document.getElementById("ul");
    if(menu.style.display=="inline")
    {
        menu.style.display="none";
        var i = document.getElementsByTagName("i");
        i.item(0).innerHTML="menu";
    }
     
    else {
        menu.style.display="inline";
        var i = document.getElementsByTagName("i");
        i.item(0).innerHTML="home";
    }
}

function gestion_contact(){
    var contact =document.getElementById("contact");
    if(contact.style.display=="inline")
    
        contact.style.display="none";
    else 
        contact.style.display="inline";
      
}