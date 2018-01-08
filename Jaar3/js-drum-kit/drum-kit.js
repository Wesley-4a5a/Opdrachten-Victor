
// put your code here ....



document.body.addEventListener('keydown', function(e){aap(e)});


function aap(e){
    document.querySelector('audio[data-key="'+e.keyCode+'"]').play();
}
