
// put your code here ....



document.body.addEventListener('keydown', function(e){down(e);});
document.body.addEventListener('keyup', function(e){up(e);});

function down(e){
    document.querySelector('div[data-key="'+e.keyCode+'"]').classList.add('playing','sound');
    document.querySelector('audio[data-key="'+e.keyCode+'"]').play();
}

function up(e){
    document.querySelector('div[data-key="'+e.keyCode+'"]').classList.remove('playing','sound');
}
