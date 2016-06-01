;'use strict';

(function($){

    var sectionModel = function(id){

        var url = 'ajax/section/';
        var api = {};
        var cache = {};

        api.get = function (id) {

            if (cache[id]) {

                return $.when(cache[id]);
            }

            return $.get({
                url: url + id,
                dataType: 'json'
            }).done(function(r){

                cache[id] = r;
                return r;
            });
        };

        return api;
    }();

    var testModule = function () {

        var ui = {};
        var e = {};

        function initUi () {
            ui.wrapper = $('#test-module')
            ui.buttons = ui.wrapper.find('nav button');
            ui.content = ui.wrapper.find('.content');
        }

        function initEvents () {

            ui.buttons.on('click', function() {
                e.load_content_handler(this.value);
            });
        }

        e.load_content_handler = function (id) {

            isLoading(true);

            sectionModel.get(id).then(function(result){

                ui.content.html(result.content);

            }).always(function(){

                isLoading(false);
            });
        };


        function isLoading (status) {

            ui.buttons.prop('disabled', status);
            ui.wrapper.removeClass('is-loading');

            if (status) {
                ui.wrapper.addClass('is-loading');
            }
        }

        $(document).ready(function(){
            initUi();
            initEvents();
        });

    }();


})(jQuery);