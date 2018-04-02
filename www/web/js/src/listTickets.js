'use strict';

$(document).ready(function () {

    let blockLoad = $('#loader');
    let blockListTickets =  $('.content-tickets');
    let count = 25;
    let begin = 25;
    let block = false;
    let stop = false;

    blockLoad.hide();
    function scrolling(){
        if (stop) {
            $(this).unbind("scroll");
            return;
        }
        if($(window).height() + $(window).scrollTop() + 100 >= $(document).height() && !block){
            blockLoad.show();
            loader();
        }
    }

    function loader(){
        block = true;
        console.log('loader');
        $.ajax({
            type:"POST",
            url:"/ticket/list-ajax",
            data: {
                _csrf : $('#csrfParamListTicket').val(),
                begin : begin,
                count : count
            },
            success:onAjaxSuccess
        });

        function onAjaxSuccess(data) {
            let result = JSON.parse(data);
            blockListTickets.append(result.html);
            blockLoad.hide();
            begin += count;
            block = false;
            stop = result.stop;
        }

    }

    $(document).on("scroll", scrolling);

});

