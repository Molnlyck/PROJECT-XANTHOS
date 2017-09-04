$(document).ready(function(){
    $.notify({
        // options
        icon: 'glyphicon glyphicon-warning-sign',
        title: '<strong>Update notifikation</strong><br>',
        message: 'Update v.1.0.3 er lige om hjørnet, husk at holde øje!'
    },{
        // settings
        type: "info",
        placement: {
            from: "bottom",
            align: "left"
        },
        spacing: 10,
        z_index: 1031,
        delay: 1000000000,
        timer: 1000,
        animate: {
            enter: 'animated fadeInLeft',
            exit: 'animated fadeOutRight'
        },
        template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
        '<span data-notify="icon"></span> ' +
        '<span data-notify="title">{1}</span> ' +
        '<span data-notify="message">{2}</span>' +
        '<div class="progress" data-notify="progressbar">' +
        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
        '</div>' +
        '<a href="{3}" target="{4}" data-notify="url"></a>' +
        '</div>'
    });
    setTimeout(function() {
        $.notify({
            message: 'Siden er officelt i den allerførste release state'
        },{
            type: 'info',
            spacing: -20,
            placement: {
                from: 'bottom',
                align: 'left'
            },
            delay: 10000,
            animate: {
                enter: 'animated fadeInLeft',
                exit: 'animated fadeOutRight'
            },
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
    }, 1500);

});

function formSubmit(form) {
    var notify = $.notify('<strong>Uploader</strong> Luk venligst ikke denne side...', {
        allow_dismiss: false,
        showProgressbar: true
    });

    setTimeout(function() {
        notify.update({'type': 'success', 'message': '<strong>Success</strong> Din opgave er blevet uploadet!', 'progress': 25});
    }, 4500);
    setTimeout(function() {
        form.submit();
    }, 6500);

    return false;
}
function ErrorTitle() {
    $.notify({
        message: 'Der var en fejl i titlen!'
    }, {
        type: 'danger'
    })
}