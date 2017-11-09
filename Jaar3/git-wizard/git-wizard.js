
    document.getElementById('previousStep').addEventListener("click", PageDown);
    document.getElementById('previousStep').addEventListener("click", getContent);
    document.getElementById('nextStep').addEventListener("click", PageUp);
    document.getElementById('nextStep').addEventListener("click", getContent);


    window.addEventListener("load", getContent);
    var xhr = new XMLHttpRequest();

    xhr.addEventListener("load", ajaxLoad);
    xhr.addEventListener("error", ajaxError);

    var currentpage = 0;

    function PageUp()
    {
        currentpage++;
        buttonCheck();
    }

    function PageDown()
    {
        currentpage--;
        buttonCheck();
    }

    function buttonCheck(){
      var prev = document.querySelector('#previousStep');
      var next = document.querySelector('#nextStep');
      if(currentpage == 0){
        prev.disabled = true;
      }
      else if(currentpage == 4){
        next.disabled = true;
      }
      else{
        prev.disabled = false;
        next.disabled = false;
      }
      pageInput();
    }

    function getContent()
    {
        xhr.open("GET", 'views/Stap' + currentpage + '.html' );
        xhr.send();
    }


    function ajaxLoad(event) {
        if (this.status === 200) {
            document.querySelector('.steps').innerHTML = this.responseText;
        } else {
            console.log("unsuccessful request");
        }
    }

    function ajaxError(event) {
        console.log('error');
    }

function pageInput(){
  switch (currentpage) {
    case 0:
      console.log('0');
      break;
    case 1:
      document.querySelector('#folder').addEventListener("click", folderSearch);
      break;
    case 2:
      console.log('2');
      break;
    case 3:
      console.log('3');
      break;
    case 4:
      console.log('4');
      break;
    default:

  }
}

// var search = document.querySelector('#folder').value;
function folderSearch(){
  console.log('input searh werkt');
  // document.querySelector('#zoekFolderCommando').innerHTML = search;
}
// console.log(search)
