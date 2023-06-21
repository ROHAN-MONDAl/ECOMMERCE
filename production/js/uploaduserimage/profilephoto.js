function displayPhoto() {
    var input = document.getElementById("profile-photo");
    var preview = document.getElementById("photo-preview");
    var file = input.files[0];
    var reader = new FileReader();
    reader.onloadend = function() {
        preview.src = reader.result;
    }
    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }
}

