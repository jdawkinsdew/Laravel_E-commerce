// https://www.logisticinfotech.com/blog/cropper-js-with-slider-example/

var newsId;

var notification = '';

var isInitialized = false;
previewCropped = '';
var cropper = '';
var file = '';
var _URL = window.URL || window.webkitURL;
$(document).ready(function () {
    $("#cropperfile").change(function (event) {

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
                if (width > 1000 && height > 1000) {
                    alert("Image Size is too small! must be big than 1000*1000")
                }
                else {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(file);
                    oFReader.onload = function () {
                        // Destroy the old cropper instance
                        $("#cropper-img").attr('src', this.result);
                        $('#cropper-img').addClass('ready');
                        if (isInitialized == true) {
                            cropper.destroy();
                        }
                        initCropper();
                    }
                }
            }
        }
    });
});

function initCropper() {
    var vEl = document.getElementById('cropper-img');
    cropper = new Cropper(vEl, {
        viewMode: 1,
        dragMode: 'move',
        aspectRatio: 85 / 50,
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
            // console.log(event.detail.x);
            // console.log(event.detail.y);
            // console.log(event.detail.width);
            // console.log(event.detail.height);
            // console.log(event.detail.rotate);
            // console.log(event.detail.scaleX);
            // console.log(event.detail.scaleY);
        }
    });
    isInitialized = true;
}


$(document).ready(function () {
    $(".btn-addnews-submit").click(function (e) {


        e.preventDefault();


        if ($("input[name='imagedd']").val() == (undefined || null) || $("input[name='imagedd']").val() == '') {

            notification += "News image is required\n"
        }

        if ($("input[name='title']").val() == (undefined || null) || $("input[name='title']").val() == '') {

            notification += "News Title is required\n"
        }

        if ($("textarea[name='description']").val() == (undefined || null) || $("textarea[name='description']").val() == '') {

            notification += "Description title is required\n"
        }

        if (notification == '') {

            var block = previewCropped.split(";");
            // Get the content type of the image
            var contentType = block[0].split(":")[1];// In this case "image/gif"
            // get the real base64 content of the file
            var realData = block[1].split(",")[1];// In this case "R0lGODlhPQBEAPeoAJosM...."
            // Convert it to a blob to upload
            var blob = b64toBlob(realData, contentType);

            var totalFormData = new FormData($("#addnews_form")[0]);

            totalFormData.append("image", blob);


            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'POST',
                url: '/admin/dashboard/addnews',
                data: totalFormData,
                processData: false,
                cache: false,
                contentType: false,
                success: function (data) {
                    console.log(data.success);
                    addNews(data.success);
                },
                error: function (error) {
                    console.log(error);
                }

            });
        } else {
            alert(notification);
            notification = '';

        }


    });

    $(document).on('click', '.fa-trash-o', function (e) {
        $("#deleteModal").modal('show');
        newsId = e.target.id;
    })

    $(document).on('shown.bs.modal', '#deleteModal', function (e) {
        newsId = e.relatedTarget.id;
        console.log(newsId)
    })
    $(document).on('click', '#delete-news', function (e) {

        e.preventDefault();

        var fromData = new FormData();
        fromData.append('newsId', newsId);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST',
            url: '/admin/dashboard/deletenews',
            data: fromData,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                $("#tr" + data.success).next().remove();
                $("#tr" + data.success).remove();
                // console.log(data.success)
                // toastr.success('Sucessfully Deleted');
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
})

function addNews(value) {
    var tbody = '<tr id="tr' + value.id + '">' +
        '<td rowspan = "2" class="text-center" > <img src="http://' + window.location.host + '/assets/images/news/' + value.image + '" width="250" height="250" alt=""></td>' +
        '<td class="text-center" style="height:30px;">' + value.title +
        '<div class="float-right" style="width:100px">' +
        '<span class="fa fa-pencil fa-fw" data-toggle="modal"  id = "' + value.id + '" data-target="#deleteModal" ></span >' +
        '&nbsp&nbsp' +
        '<span class="fa fa-trash-o"  data-toggle="modal"  id = "' + value.id + '" data - target="#deleteModal" ></span >' +
        '</div >' +
        '</td>' +
        '</tr ><tr>' +
        '<td class="text-center">' + value.content + '</td></tr>';
    $("tbody").prepend(tbody);
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
