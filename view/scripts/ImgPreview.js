/********************
 * Lecture et affichage d'image en memoire avant publication
 */
if (window.FileReader) {
    function handleFileSelect(evt) {
        var files = evt.target.files;
        var f = files[0];
        var reader = new FileReader();
        
        reader.onload = (function(theFile) {
            return function(e) {
            document.getElementById('EditActualite-Img').src = e.target.result;
            };
        })(f);
    
        reader.readAsDataURL(f);
    }
} else {
    alert('Ce navigateur ne supporte pas la lecture de document');
}

document.getElementById('files').addEventListener('change', handleFileSelect, false);