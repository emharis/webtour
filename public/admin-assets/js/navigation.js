/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


(function($) {
    /**
     * mainnav clicked
     */
    $('.mainnav').on('click', 'li', function(e) {
        e.preventDefault();
        var isdropdown = $(this).hasClass('dropdown');
        if (!isdropdown) {
            loadAjaxContent($(this).children('a').attr('href'));
            //window.history.pushState("object or string", "Title", "#"+myUrl);
        }
    });
    /**
     * ajax link clickeed
     * @param {type} contentUrl
     * @returns {undefined}
     */
    $(document).on('click', '.ajax-link', function(e) {
        e.preventDefault();

        if ($(this).hasClass('delete-link')) {
            if (confirm('Anda yakin untuk menghapus data ini ?')) {
                $.get($(this).attr('href'), null, function() {
                    var n = noty({
                        text: 'Data telah dihapus',
                        layout: 'center',
                        type: 'success',
                        timeout: 1000
                    });
                });
                $(this).parent('td').parent('tr').fadeOut(1000);
            }
        } else {
            loadAjaxContent($(this).attr('href'));
        }
    });

    function loadAjaxContent(contentUrl) {
        //alert(contentUrl);
        if (contentUrl != '') {
            $('.main').html(getLoader()).load(contentUrl);
            window.location.hash = contentUrl;
        }

    }

    var ajax_url = location.hash.replace(/^#/, '');
    if (ajax_url.length < 1) {
        //ajax_url = 'ajax/dashboard.html';
        ajax_url = window.location.href + "/dashboard";
    }
    loadAjaxContent(ajax_url);

})(jQuery);