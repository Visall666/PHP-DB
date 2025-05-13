function preview(event){
    var img = document.getElementById("img");
    img.src = URL.createObjectURL(event.target.files[0]);
}