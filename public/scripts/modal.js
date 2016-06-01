function ModalService (options) {

    options = options || {};

    var api = {},
        $window = $(window),
        $body = $('body'),
        ui = {
            overlay: $('<div class="modal-overlay"/>'),
            window: $('<div class="modal-window"/>')
        };

    ui.window.append([
        '<button class="modal-close" type="button">X</button>',
        '<div class="modal-header"></div>',
        '<div class="modal-content"></div>',
        '<div class="modal-footer"></div>'
    ].join(''));

    ui.window.find('.modal-header').html(options.title);
    ui.window.find('.modal-content').html(options.content);
    ui.window.find(".modal-close").on('click', function () {
        api.hide();
    });

    $body.append(ui.overlay);
    $body.append(ui.window);


    function align() {

        ui.window.show();
        ui.window.css('left', ($window.width() - ui.window.width()) / 2);
        ui.window.css('top', ($window.height() - ui.window.height()) / 2);
        ui.window.hide();
    }

    api.show = function () {

        align();

        ui.overlay.fadeIn('fast');
        ui.window.fadeIn('fast');
    };

    api.hide = function () {
        ui.overlay.fadeOut('fast');
        ui.window.fadeOut('fast', function () {
            api.destroy();
        });
    };

    api.destroy = function () {

        ui.window.find(".modal-close").off('click');
        ui.window.detach();
        ui.overlay.detach();
    };

    return api;
};