var Script = function () {

    $.validator.setDefaults({
        submitHandler: function() { alert("submitted!"); }
    });

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#feedback_form").validate();

        // validate signup form on keyup and submit
        $("#register_form").validate({
            rules: {
                name: {
                    required: true,
                    maxlength:50
                },
                sku:{
                    required:true         
                },
                price: {
                    number: true
                }
            },
            messages: {                
                name: {
                    required: "Please enter a Product Name.",
                    minlength: "Product name, cannot be longer than 50 characters."
                },
                sku:{
                    required: "Please enter a SKU"   
                },
                price: {
                    number: "Please enter numberic character"
                }
            }
        });
    });
}();