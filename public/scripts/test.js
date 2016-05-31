;(function($){

    var sections = (function(){

        var url = 'ajax/sections';
        var api = {};

        api.get = function () {

            return $.get({
                url: url,
                dataType: 'json'
            });
        };

        return api;
    })();

    var testController = function(markup){

        var api = {};
        var nav = markup.find('nav');
        var content = markup.find('.content');

        function loadSections () {

            markup.addClass('loading');

            sections.get().done(function(results){

                nav.find('button').off('click');
                nav.html('');

                $.each(results, function(key, value){

                    var button = $('<button type="button">'+value.title+'</button>');

                    button.on('click', function(){
                        content.html(value.content);
                    });

                    nav.append(button);
                });


            })
            .always(function(){
                markup.removeClass('loading');
            });
        }

        loadSections();

    };


    $(document).ready(function(){

        testController($('#test'));
    });


})(jQuery)