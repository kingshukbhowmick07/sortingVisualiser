function addStudent(){
    var project = document.sample.project.value;

    var tr = document.createElement('tr');

    var td = tr.appendChild(document.createElement('td'));

    td.innerHTML = project;

    document.getElementById("tbl").appendChild(tr);
}

function togglePopup(){
    document.getElementById("popup-1").classList.toggle("active");   
}
function togglePopup2(){
    document.getElementById("popup-1").classList.toggle("active");   
}


