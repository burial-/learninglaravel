$(document).ready(function () {
    $('#summernote').summernote({
        toolbar: [
            //[groupname, [button list]]

            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['picture', 'link', 'hr']],
            ['misc', ['codeview', 'undo', 'redo']]
        ],
        onImageUpload: function (files, editor, welEditable) {
            sendFile(files[0], editor, welEditable);
        },
        height: 300,                 // set editor height

        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor

        focus: true

    });
});
function sendFile(file, editor, welEditable) {
    data = new FormData();
    data.append("file", file);
    $.ajax({
        data: data,
        type: "POST",
        url: "../posts/imageupload",
        cache: false,
        contentType: false,
        processData: false,
        success: function (url) {
            editor.insertImage(welEditable, url);
        }
    });
}