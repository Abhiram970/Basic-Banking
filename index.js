function backend()
{ 
	  var x = new XMLHttpRequest();
	  x.onreadystatechange = function() {
	  	if (this.readyState == 4 && this.status == 200) {
	  		document.getElementById('demo').innerHTML = this.responseText;
	  	}
	  }
	  var xi = document.getElementById('from').value;
    var y = document.getElementById('to').value;
    var z = document.getElementById('amt').value;
    var current = new Date();
    var t = current.toLocaleString();
	  x.open("GET","maketranback.php?f1="+xi+"&f2="+y+"&f3="+z+"&f4="+t,true);
	  x.send();		
}

const btn = document.getElementById('btn2');
btn.addEventListener('click', function handleClick(event) {
  event.preventDefault();
  const inputs = document.querySelectorAll('#from, #to,#amt');
  inputs.forEach(input => {
    input.value = '';
  });
});