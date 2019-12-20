var productId

var notification = '';



// ## Variable for Cropper

var isInitialized = false;
previewCropped = '';
var cropper = '';
var file = '';
var _URL = window.URL || window.webkitURL;


$(document).ready(function () {

    // ## This part uploads Image file .value

    $("#demo1").change(function (event) {
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
                        d = new Date();
                        $("#product-image").attr('src', this.result);
                        $("#product-image").addClass('ready');

                        if (isInitialized == true) {
                            cropper.destroy();
                        }
                        initCropper();
                    }
                }
            }
        }
    });


    // ## this function creates Cropper// Cropper Setting.

    function initCropper() {
        var vEl = document.getElementById("product-image");
        cropper = new Cropper(vEl, {
            viewMode: 1,
            dragMode: 'move',
            aspectRatio: 1,
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



    // ## When Clicking on add Product button, This part pass data to addproduct funtion of AdminController, and receives added data for result.

    $(".btn-addproduct-submit").click(function (e) {

        e.preventDefault();

        var category = $("#category").val();
        // console.log(category)
        // console.log($("option:contains(" + category + ")").attr('id'));

        if ($("input[name='image']").val() == (undefined || null) || $("input[name='image']").val() == '') {

            notification += "Product image is required\n"
        }

        if ($("input[name='title']").val() == (undefined || null) || $("input[name='title']").val() == '') {

            notification += "Product Title is required\n"
        }

        if ($("input[name='price']").val() == (undefined || null) || $("input[name='price']").val() == '') {

            notification += "Product title is required\n"
        }

        if ($("input[name='title']").val() == (undefined || null) || $("input[name='source']").val() == '') {

            notification += "Product stock is required\n"
        }
        if (notification == '') {


            var tags = [];

            $.each($(".add_tag_manager .tm-tag").children("span"), function (index, value) {
                tags.push($(value).text());
            });

            var totalFormData = new FormData($("#addproduct_form")[0]);

            totalFormData.append('tags', tags.join(', '));

            var category = $("#category").val();

            totalFormData.append('category', $("option:contains(" + category + ")").attr('id'));


            var block = previewCropped.split(";");
            var contentType = block[0].split(":")[1];
            var realData = block[1].split(",")[1];
            var blob = b64toBlob(realData, contentType);

            totalFormData.append("image", blob);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'POST',
                url: '/admin/dashboard/addproduct',
                data: totalFormData,
                processData: false,
                cache: false,
                contentType: false,
                success: function (data) {
                    console.log(data.success);
                    addProducts(data.success);
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

    // ## When Clicking on Edit button in table, This part brings the data for selected column from Product Table.

    $('#editModal').on('shown.bs.modal', function (e) {

        productId = e.relatedTarget.id;

        e.preventDefault();

        var fromData = new FormData();
        fromData.append('productId', productId);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST',
            url: '/admin/dashboard/selectproduct',
            data: fromData,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                console.log('sucess');
                // console.log(data.success);
                displayEditModal(data.success);
            },
            error: function (error) {
                console.log('error');
            }
        });
    })

    $('#deleteModal').on('shown.bs.modal', function (e) {
        productId = e.relatedTarget.id;
    })

    // ## When Clickin on Delete Button in table, This part brings id of selected product;
    $('#editModal').on('hide.bs.modal', function (e) {
        $(".edit_tag_manager").empty();
    })

    // ## When Clicking on Delete Button on Delete Modal
    $("#delete-product").click(function (e) {

        e.preventDefault();

        var fromData = new FormData();
        fromData.append('productId', productId);

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST',
            url: '/admin/dashboard/deleteproduct',
            data: fromData,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                $("#tr" + data.success).remove();
                // toastr.success('Sucessfully Deleted');
            },
            error: function (error) {
                console.log(error);
            }

        });
    });
    // ## When Clicking Save Button on Edit Modal, This part pass data on it to the Admin controller.

    $("#edit-save-product").click(function (e) {

        e.preventDefault();

        var tags = [];

        $.each($(".edit_tag_manager .tm-tag").children("span"), function (index, value) {
            tags.push($(value).text());
        });


        var totalFormData = new FormData($("#editproduct_form")[0]);

        totalFormData.append('tags', tags.join(', '));

        totalFormData.append('productId', productId);

        var category = $("#edit_category").val();

        totalFormData.append('category', $("option:contains(" + category + ")").attr('id'));

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method: 'POST',
            url: '/admin/dashboard/editproduct',
            data: totalFormData,
            processData: false,
            cache: false,
            contentType: false,
            success: function (data) {
                updataProduct(data.success);
            },
            error: function (error) {
                console.log(error);
            }

        });
    });

    // ## Validating

    $("input[name='edit_price']").keypress(function (e) {
        e = e || window.event;
        var charCode = e.which ? e.which : e.keyCode;
        if ($(this).val().length > 11) {
            return false;
        }
        return /\d/.test(String.fromCharCode(charCode));
    })
    $("input[name='price']").keypress(function (e) {
        e = e || window.event;
        var charCode = e.which ? e.which : e.keyCode;
        if ($(this).val().length > 11) {
            return false;
        }
        return /\d/.test(String.fromCharCode(charCode));
    })
    $("input[name='source']").keypress(function (e) {
        e = e || window.event;
        var charCode = e.which ? e.which : e.keyCode;
        if ($(this).val().length > 11) {
            return false;
        }
        return /\d/.test(String.fromCharCode(charCode));
    })
    $("input[name='edit_source']").keypress(function (e) {
        e = e || window.event;
        var charCode = e.which ? e.which : e.keyCode;
        if ($(this).val().length > 11) {
            return false;
        }
        return /\d/.test(String.fromCharCode(charCode));
    })
    $("input[name='sku']").keypress(function (e) {
        e = e || window.event;
        var charCode = e.which ? e.which : e.keyCode;
        if ($(this).val().length > 11) {
            return false;
        }
        return /\d/.test(String.fromCharCode(charCode));
    })
    $("input[name='edit_sku']").keypress(function (e) {
        e = e || window.event;
        var charCode = e.which ? e.which : e.keyCode;
        if ($(this).val().length > 11) {
            return false;
        }
        return /\d/.test(String.fromCharCode(charCode));
    })



    // $(document).on('click', '#action-dropdown', function (e) {
    //     $('#dropdown-menu').dropdown();
    // })


});

// ## add one column for added product to the table.
function addProducts(value) {
    var status;
    if (value.status == 'Active') {
        status = '<button class="btn btn-success btn-sm"><span>Active</span></button >'
    } else if (value.status == 'Deactive') {
        status = '<button class="btn btn-warning btn-sm"><span>Deactive</span></button >'
    } else {
        status = '<button class="btn btn-danger btn-sm"><span>Sold Out</span></button >'
    }
    if (value.image == undefined) {
        value.image = 'product_default.jpg';
    }
    var tbody = '<tr id="tr' + value.id + '">' +
        '<td class="text-center" style="max-width: 60px;"><img src="http://' + window.location.host + '/assets/images/products/' + value.image + '" width="50" height="50" alt=""></td>' +
        '<td class="text-center">' + value.title + '</td>' +
        '<td class="text-center">' + value.category_id + '</td>' +
        '<td class="text-center">' + value.description + '</td>' +
        '<td class="text-center">' + value.price + '</td>' +
        '<td class="text-center">' + value.stock + '</td>' +
        '<td class="text-center">' + value.tags + '</td>' +
        '<td class="text-center" style="max-width: 70px;">' + status + '</td>' +
        '<td class="text-center" style="max-width: 70px;">' +
        '<div id="action-dropdown"  class="dropdown">' +
        '<button class="btn dropdown-toggle btn-success btn-sm action-button" data-toggle="dropdown"><span>Show</span></button>' +
        '<div class="dropdown-menu" role="menu">' +
        '<a class="dropdown-item" data-toggle="modal" id="' + value.id + '" data-target="#editModal">Edit</a>' +
        '<a class="dropdown-item" data-toggle="modal" id="' + value.id + '" data-target="#deleteModal">Delete</a>' +
        '</div>' +
        '</div>' +
        '</td>' +
        '</tr>';
    $("tbody").prepend(tbody);

    $(".dropdown-toggle").dropdown();
    //  ## When Click DropDown Button.checked


    // $(".action-button").click(function () {
    //     $(this).next().addClass('show');
    // })
}

// ## Dispalay selected data on Edit Modal

function displayEditModal(product) {

    $("#edit-product-image").attr('src', 'http://' + window.location.host + '/assets/images/products/' + product.image);
    $("input[name='edit_title']").val(product.title);
    $("textarea[name='edit_description']").val(product.description);
    $("select[name='edit_category']").val(product.category_id);
    $("select[name='edit_status']").val(product.status);
    $("input[name='edit_special']").val(product.special);
    $("input[name='edit_price']").val(product.price);
    $("input[name='edit_source']").val(product.stock);
    $("input[name='edit_sku']").val(product.SKU);
    $("input[name='edit_product_source']").val(product.source);
    if (product.special) {
        $("input[name='edit_special']").attr('checked', true);
    }

    try {
        if (product.tags != null && product.tags.indexOf(", ") != null) {
            let tags = product.tags.split(", ");
            $.each(tags, function (index, value) {
                $(".edit_tag_manager").append('<span class="tm-tag badge badge-primary" id="tag' + index + '"><span>' + value + '</span><a href="#" class="tm-tag-remove" id="tag_Remover_' + index + '" tagidtoremove="1">x</a></span>');
            });
        } else {
            $(".edit_tag_manager").append('<span class="tm-tag badge badge-primary" id="tag' + index + '"><span>' + product.tags + '</span><a href="#" class="tm-tag-remove" id="tag_Remover_' + index + '" tagidtoremove="1">x</a></span>');
        }
    }
    catch (err) {
        console.log('Error :=' + err.message);
    }

    $("[id^='tag_Remover_']").click(function () {
        $(this).parent().remove();
    })
}

function updataProduct(product) {
    $("#tr" + product.id).empty();
    var status;
    if (product.status == 'Active') {
        status = '<button class="btn btn-success btn-sm"><span>Active</span></button >'
    } else if (product.status == 'Deactive') {
        status = '<button class="btn btn-warning btn-sm"><span>Deactive</span></button >'
    } else {
        status = '<button class="btn btn-danger btn-sm"><span>Sold Out</span></button >'
    }
    var tr = '<td class="text-center" style="max-width: 60px;"><img src="http://' + window.location.host + '/assets/images/products/' + product.image + '" width="50" height="50" alt=""></td>' +
        '<td class="text-center">' + product.title + '</td>' +
        '<td class="text-center">' + product.category_id + '</td>' +
        '<td class="text-center">' + product.description + '</td>' +
        '<td class="text-center">' + product.price + '</td>' +
        '<td class="text-center">' + product.stock + '</td>' +
        '<td class="text-center">' + product.tags + '</td>' +
        '<td class="text-center" style="max-width: 70px;">' + status + '</td>' +
        '<td class="text-center" style="max-width: 70px;">' +
        '<div class="dropdown">' +
        '<button class="btn dropdown-toggle btn-success btn-sm action-button" data-toggle="dropdown"><span>Show</span></button>' +
        '<div class="dropdown-menu">' +
        '<a class="dropdown-item" data-toggle="modal" id="' + product.id + '" data-target="#editModal">Edit</a>' +
        '<a class="dropdown-item" data-toggle="modal" id="' + product.id + '" data-target="#deleteModal">Delete</a>' +
        '</div>' +
        '</div>' +
        '</td>';
    $("#tr" + product.id).append(tr);

    $(".dropdown-toggle").dropdown();
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
