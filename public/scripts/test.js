(function ($, Modal) {

    'use strict';

    var sectionModel = (function () {

        var url = 'ajax/section/',
            api = {},
            cache = {};

        api.get = function (id) {

            cache[id] = cache[id] || {};

            if (cache[id].data) {
                return $.when(cache[id].data);
            }

            cache[id].promise = cache[id].promise || $.get({
                url: url + id,
                dataType: 'json'
            }).then(function (r) {

                return cache[id].data = r.data;

            }, function (err) {
                console.error(err);
            });

            return cache[id].promise;
        };

        return api;
    }());


    var ui = {},
        e = {};

    function initUi() {

        ui.wrapper = $('#test-module');
        ui.buttons = ui.wrapper.find('nav button');
        ui.content = ui.wrapper.find('.content');

        ui.buttons.last().data('isLast', true);
    }

    function initEvents() {

        ui.buttons.on('click', function () {

            e.load_content_handler(this.value);

            if ($(this).data('isLast')) {
                e.open_modal_handler(this.value);
            }
        });
    }

    function isLoading(status) {

        ui.buttons.prop('disabled', status);
        ui.wrapper.removeClass('is-loading');

        if (status) {
            ui.wrapper.addClass('is-loading');
        }
    }


    e.load_content_handler = function (id) {

        isLoading(true);

        return sectionModel.get(id).then(function (result) {

            ui.content.html(result.content);
            return result;

        }).always(function () {

            isLoading(false);
        });
    };

    e.open_modal_handler = function (id) {

        return sectionModel.get(id).then(function (result) {

            Modal({
                title: result.title,
                content: result.content
            }).show();
        });
    };


    $(document).ready(function () {
        initUi();
        initEvents();
    });


}(jQuery, ModalService));