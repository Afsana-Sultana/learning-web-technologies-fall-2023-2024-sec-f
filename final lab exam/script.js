
function search(){
    let term = document.getElementById('term').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', 'home.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            document.getElementById('res').innerHTML = this.responseText;
        }
    }

    xhttp.send('term='+term);
}