jQuery(document).ready(function ($) {
    $('.add-user').magnificPopup();
    function addDataToUserTable() {
        $.ajax({
            url: 'templateShowUSerData.php',
            success: function (data) {
                $('#show-user-data').html(data);
            }
        });
    }
    function resetForm(formID) {
        $form = $('#' + formID);
        $form.find('input').val('');
    }
    //ajax form submit
    $('#add-user-form').on('submit', function (e) {
        e.preventDefault();
        $form = $(this);
//ajax add data to database
        $.ajax({
            type: 'post',
            url: $form.attr('action'),
            data: $form.serialize(),
            success: function (data) {
                $("#add-user-form .mfp-close").on('click', function () {
                    $('#show_message').removeClass().empty();
                });
                var print_data = JSON.parse(data);
                if (print_data.error_code == 0) {
                    resetForm('add-user-form');
                    $('#show_message').removeClass().addClass('alert alert-success').show();
                    addDataToUserTable();
                    setTimeout(function () {
                        $('#show_message').slideUp();
                    }, 1500);

                } else {
                    $('#show_message').removeClass().addClass('alert alert-danger').show();
                }
                $('#show_message').html(print_data.msg);
            }
        })
    });

});