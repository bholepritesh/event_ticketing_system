        toastr.options = {
            "closeButton": true,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "0",
            "hideDuration": "0",
            "timeOut": "0",
            "showMethod": "fadeIn"
        };
        $('#toastr-success').click(function () {
            toastr.success('This is a success notification from toastr.')
        });

        $('#toastr-info').click(function () {
            toastr.info('This is an information notification provided by toastr.')
        });

        $('#toastr-warning').click(function () {
            toastr.warning('This is a warning notification provided by toastr.')
        });

        $('#toastr-error').click(function () {
            toastr.error('This is an error notification provided by toastr.')
        });