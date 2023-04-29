function m(){
  var  jsobject = { 
  id: '1',
}
var p=document.getElementById("p");
var userJSONText = JSON.stringify(jsobject);
// alert(jsobject.id);
var formData = new FormData();

formData.append("userJSONText",userJSONText);

var request = new XMLHttpRequest();
request.onreadystatechange=function(){
    if(request.readyState==4&&request.status==200){
        var response = JSON.parse(request.responseText);
        p.innerHTML=response["count"];
    }
};
request.open("POST","http://localhost//react_chat/load_users.php",false);
request.send(formData);

}