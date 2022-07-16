
    var InputElement    =   document.getElementById('password');
    InputElement.onblur =   function (){
        var xmlHttp     =   new XMLHttpRequest();
        var data    =   document.getElementById('password').value;
        var serverPage  =   "admin.register.register?a="+data;
        xmlHttp.open('GET', serverPage);
        xmlHttp.onreadystatechange  =   function (){
            alert(xmlHttp.status);
         if (xmlHttp.readyState == 4 && xmlHttp.status  ==  200){
             document.getElementById('res').innerHTML   =   xmlHttp.responseText;
         }
        }
        xmlHttp.send(null);
    }
