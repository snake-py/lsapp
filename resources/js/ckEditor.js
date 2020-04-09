var ClassicEditor = require("@ckeditor/ckeditor5-build-classic/build/ckeditor.js");

ClassicEditor.create(document.querySelector("#article-ckeditor"))
    .then(editor => {
        window.editor = editor;
    })
    .catch(error => {
        console.error("There was a problem initializing the editor.", error);
    });
