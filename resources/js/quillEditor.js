var Quill = require("quill");
const ImageResize = require("quill-image-resize");
// console.log(ImageResize);

// Quill.register("modules/imageResize", ImageResize);

var quill = new Quill("#editor", {
    modules: {
        // imageResize: {},
        toolbar: [
            [{ header: [2, 3, false] }],
            ["bold", "italic", "underline", "strike"],
            [{ list: "ordered" }, { list: "bullet" }],
            [{ align: [] }],
            ["image", "link"]
        ]
    },
    theme: "snow"
});
