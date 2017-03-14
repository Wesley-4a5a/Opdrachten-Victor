function createTyfusEntries() {
  $entry = document.getElementById('entryField').value;
  if ($entry === ''){
    alert('Veld is empty bruder');
  }
  else{
    displayShopList($entry);
  }

  document.getElementById('entryField').value = '';
}

function displayShopList(lijstItemke) {
  document.getElementById('lijstke').innerHTML += '<li>'+lijstItemke + '</li><br />';
}
