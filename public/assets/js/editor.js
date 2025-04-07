// Editor Js Start
const quill = new Quill("#editor", {
    modules: {
        syntax: true,
        toolbar: "#toolbar-container",
    },
    placeholder: "Compose an epic...",
    theme: "snow",
});

const quill1 = new Quill("#editor1", {
    modules: {
        syntax: true,
        toolbar: "#toolbar1-container",
    },
    placeholder: "Compose an epic...",
    theme: "snow",
});
// Editor Js End