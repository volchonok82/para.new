window.addEventListener('load', function() {


    let btnUp = $('.up-button');
    showBtnUp();

    function showBtnUp() {
        let top = $(this).scrollTop();
        if (top > 300) {
            btnUp.addClass('show');
        } else {
            btnUp.removeClass('show');
        }
    }

    $(document).on('scroll', function () {
        showBtnUp();
    });

});
