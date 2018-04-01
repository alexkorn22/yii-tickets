'use strict';

$(document).ready(function () {

    $().UItoTop({ easingType: 'easeOutQuart' });

    let blockLoad = $('#loadTickets');
    let blockListTickets =  $('#blockListTickets');
    let count = 10;
    let begin = 10;
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
        $.ajax({
            type:"POST",
            url:"/ticket/list-ajax",
            data: {
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

