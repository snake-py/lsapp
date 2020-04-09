const Quill = require("quill");
const ImageResize = require("quill-image-resize");

Quill.register("modules/imageResize", ImageResize);

const quill = new Quill("#editor", {
    modules: {
        imageResize: {},
        toolbar: [
            [{ header: [2, 3, false] }],
            ["bold", "italic", "underline", "strike"],
            [{ list: "ordered" }, { list: "bullet" }],
            [{ align: [] }],
            ["image", "link"],
        ],
    },
    theme: "snow",
});
