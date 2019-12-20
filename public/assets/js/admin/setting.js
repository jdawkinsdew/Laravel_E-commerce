
// ## Variables for Checking If which collaper collapesed
isCollapesed = false;

var bannerImageId = '';

// ## Variable for getting Table ID

var bannerId;

// ## Variable for Cropper

var isInitialized = false;
previewCropped = '';
var cropper = '';
var file = '';
var _URL = window.URL || window.webkitURL;

$(document).ready(function () {


    $("input[id^='demo']").change(function (event) {

        bannerImageId = $(this).attr("tag");

        var imageInput = $(this);

        if (file = this.files[0]) {

            var img = new Image();

            img.src = window.URL.createObjectURL(file);

            img.onload = function () {

                var width = img.naturalWidth;
                var height = img.naturalHeight;

                window.URL.revokeObjectURL(img.src);

                if (width < 100 || height < 100) {
                    alert("Image Size is too small! must be big than 100*100");
                }
                else if (width > 1000 && height > 1000) {
                    alert("Image Size is too small! must be big than 1000*1000")
                }
                else {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(file);
                    oFReader.onload = function () {


                        bannerImage = $("#banner-image" + imageInput.attr('tag'));
                        $("#banner-image" + imageInput.attr('tag')).attr('src', this.result);
                        $("#banner-image" + imageInput.attr('tag')).addClass('ready');

                        if (isInitialized == true) {
                            cropper.destroy();
                        }
                        initCropper("banner-image" + imageInput.attr('tag'));
                    }
                }
            }
        }
    });


    function initCropper(id) {
        var vEl = document.getElementById(id);
        cropper = new Cropper(vEl, {
            viewMode: 1,
            dragMode: 'move',
            aspectRatio: 1.9222222,
            checkOrientation: false,
            cropBoxMovable: true,
            cropBoxResizable: true,
            zoomOnTouch: false,
            zoomOnWheel: false,
            guides: false,
            highlight: true,
            crop: function (event) {
                const canvas = cropper.getCroppedCanvas()
                previewCropped = canvas.toDataURL('image/png')
            }
        });
        isInitialized = true;
    }


    $(".fa-save").hide();

    $("h3[id^='collapse-title']").click(function (e) {

        $(".fa-save").hide();

        if ($(e.target).attr("class") == undefined || $(e.target).attr("class") == "collapsed") {
            // console.log("true")
            $("#save-icon" + $(this).attr("tag")).show();
        } else {
            // console.log("false")
            $("#save-icon" + $(this).attr("tag")).hide();
        }

        $(".collapse").collapse('hide');

        if (isInitialized) {
            cropper.destroy();
            cropper = '';
            isInitialized = false;
        }
        d = new Date();
        $("#banner-image" + bannerImageId).attr('src', 'http://' + window.location.host + '/assets/images/banners/banner-' + bannerImageId + '.png?', d.getTime())

    });

    $(".fa-save").click(function () {

        bannerId = $(this).attr("tag");

        formData = new FormData();

        formData.append("bannerId", bannerId);
        formData.append("title", $("#banner-title" + bannerId).val());
        formData.append("subscription", $("#banner-subscription" + bannerId).val());
        formData.append("text", $("#banner-text" + bannerId).val());

        if (isInitialized && bannerImageId == bannerId) {

            var block = previewCropped.split(";");
            var contentType = block[0].split(":")[1];
            var realData = block[1].split(",")[1];
            var blob = b64toBlob(realData, contentType);

            formData.append("image", blob);

        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST',
            url: '/admin/dashboard/editbannersetting',
            data: formData,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {

                $("#banner-title" + bannerId).val(data.success.title);
                $("#banner-subscription" + bannerId).val(data.success.subscription);
                $("#banner-text" + bannerId).val(data.success.text);
                $("#collapse-title" + bannerId).text(data.success.title);
                if (isInitialized) {

                    d = new Date();
                    $("#banner-image" + bannerId).attr('src', 'http://' + window.location.host + '/assets/images/banners/' + data.success.image + '?', d.getTime());
                    $("#banner-image" + bannerId).addClass('ready');
                    cropper.destroy();
                }
                clearVar();
                alert('successfully updated')
            },
            error: function (error) {
                console.log(error);
            }

        });
    })
})

function clearVar() {

    bannerImageId = '';
    isInitialized = false;
    previewCropped = '';
    cropper = '';
    file = '';
    _URL = window.URL || window.webkitURL;
}
/**
 * Convert a base64 string in a Blob according to the data and contentType.
 *
 * @param b64Data {String} Pure base64 string without contentType
 * @param contentType {String} the content type of the file i.e (image/jpeg - image/png - text/plain)
 * @param sliceSize {Int} SliceSize to process the byteCharacters
 * @see http://stackoverflow.com/questions/16245767/creating-a-blob-from-a-base64-string-in-javascript
 * @return Blob
 */
function b64toBlob(b64Data, contentType, sliceSize) {
    contentType = contentType || '';
    sliceSize = sliceSize || 512;

    var byteCharacters = atob(b64Data);
    var byteArrays = [];

    for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
        var slice = byteCharacters.slice(offset, offset + sliceSize);

        var byteNumbers = new Array(slice.length);
        for (var i = 0; i < slice.length; i++) {
            byteNumbers[i] = slice.charCodeAt(i);
        }

        var byteArray = new Uint8Array(byteNumbers);

        byteArrays.push(byteArray);
    }

    var blob = new Blob(byteArrays, { type: contentType });
    return blob;
}
