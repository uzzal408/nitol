$(document).ready(function() {
    $("form[name='newIngredient']").validate({
        errorClass: 'error is-invalid',
        validClass: 'success',
        rules: {
            name: "required"
        },
        messages: {
            name: "Please enter Ingredien name"
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    $("form[name='newAddon']").validate({
        errorClass: 'error is-invalid',
        validClass: 'success',
        rules: {
            name: "required"
        },
        messages: {
            name: "Please enter Addons name"
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    $("form[name='newCategory']").validate({
        errorClass: 'error is-invalid',
        validClass: 'success',
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            name: "required",
            categoryImage : {
                required: false,
                accept: "image/*"
            }
        },
        // Specify validation error messages
        messages: {
            name: "Please enter Category name",
            categoryImage:{
                required: 'Please Upload your Category Image',
                accept: 'Supported Format - JPEG | GIF | PNG | TIFF | Raw image files.'
            }
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });

    $("form[name='newProduct']").validate({
        errorClass: 'error is-invalid',
        validClass: 'success',
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            name: "required"
        },
        // Specify validation error messages
        messages: {
            name: "Please enter Category name",
            categoryImage:{
                required: 'Please Upload your Category Image',
                accept: 'Supported Format - JPEG | GIF | PNG | TIFF | Raw image files.'
            }
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });


});
