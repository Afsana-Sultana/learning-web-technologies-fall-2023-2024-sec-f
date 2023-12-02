function ajax(){
    
    let name = document.getElementById('name').value;
    let xhr = new XMLHttpRequest();

    xhr.open('POST', 'authModel.php?name='+name, true);

    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById('h1').innerHTML = this.responseText;
        }
    }

    xhttp.send();
}