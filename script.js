function previewImage(event, previewId) {
    var reader = new FileReader();
    var imageElement = document.getElementById(previewId);
  
    reader.onload = function() {
      if (reader.readyState == 2) {
        imageElement.src = reader.result;
        imageElement.classList.remove("hidden");
      }
    }
  
    reader.readAsDataURL(event.target.files[0]);
  }
  