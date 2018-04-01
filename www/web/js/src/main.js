$( document ).ready(function() {

    $('.dropdown-toggle').dropdown();

/*модальное окно*/
    $('#add-ticket').on('shown.bs.modal', function () {

    });
/*tooltip*/
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })



/*кнопка показать больше записей*/
    $(function(){
        $(".content-tickets li").slice(0, 10).show(); // select the first ten
        $("#load-all, #load-open, #load-close").click(function(e){ // click event for load more
            e.preventDefault();
            $(".content-tickets li:hidden").slice(0, 10).show(); // select next 10 hidden divs and show them
            if($(".content-tickets li:hidden").length == 0){ // check if any hidden divs still exist
                alert("У вас нет обращений"); // alert if there are none left
            }
        });
    });



/*tabs to accordion*/
    // $('#pills-tab').tabCollapse({
    //     tabsClass: 'd-none d-sm-flex',
    //     accordionClass: 'd-block d-sm-none'
    // });


});
