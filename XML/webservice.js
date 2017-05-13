
document.getElementById("inputButton").addEventListener("click", urlAdd);


function urlAdd(){
  id = '?output=xml&id='+document.getElementById('input').value;
  document.getElementById('result').innerHTML = getResponse('webservices/api-countries.php'+id);
}

  function getResponse(url){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, false);
    xhr.send();

    return xhr.responseText;
  }
