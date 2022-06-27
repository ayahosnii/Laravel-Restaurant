function previewFile() {
    var preview = document.querySelector('#img_scr');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();

    reader.addEventListener("load", function () {
        preview.src = reader.result;
    }, false);

    if (file) {
        reader.readAsDataURL(file);
    }
}

let input = document.getElementById("input_scr");
let img = document.getElementById("img_scr");
img.onclick = function () {
    input.click();
}
