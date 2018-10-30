(function() {
    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = label;

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }

    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
                $('#img-upload').css('border-color','#ccc');
            }

            reader.readAsDataURL(input.files[0]);
        }


    }

    $("#cover").change(function(){
        readURL(this);
    });

    $('#addCourseForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url:$('#addCourseForm')[0].action,
            method: "POST",
            data: new FormData(this),
            dataType: "JSON",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                alert('success');
                console.log(data);
            },
            error: function (errorr) {
                console.log(errorr);
                alert('errrorrr');
            }
        })
    });





    console.log($('.icp-auto'));
    $('.icp-auto').iconpicker();

    // Events sample:
    // This event is only triggered when the actual input value is changed
    // by user interaction
    $('.icp').on('iconpickerSelected', function (e) {
        console.log(e.target);
        $('.lead .picker-target').get(0).className = 'picker-target fa-3x ' +
            e.iconpickerInstance.options.iconBaseClass + ' ' +
            e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
    });
})();
