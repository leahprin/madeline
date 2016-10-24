(function ($) {
    $(document).ready(function() {
        $('.show-comments').on('click', function(){
            var disqus_shortname = 'cognitives-io'; // Replace this value with *your* username.

            // ajax request to load the disqus javascript
            $.ajax({
                type: "GET",
                url: "http://" + disqus_shortname + ".disqus.com/embed.js",
                dataType: "script",
                cache: true
            });
            // hide the button once comments load
            $(this).fadeOut();
        });

        $('.article img').attr('data-action','zoom');
    });

    function draggable() {
        if ($(".banner__container").width() > $(".banner").width()) {
            console.log('working');
            $(".banner__container").draggable({
                cursor: "move",
                containment: "banner",
                axis: 'x',
                drag: function( event, ui ) {
                    ui.position.left = Math.min( 0,
                      ($(".banner").width() - $(".banner__container").width()) < ui.position.left ?
                        ui.position.left : ($(".banner").width() - $(".banner__container").width())
                    );
                }
            });
        }
    }
    draggable();




    $(window).resize(function(){
        if ($('.side-navigation').is(':visible')) {
            var currentWidth = $('.side-navigation').width();
            var windowWidth = $(window).width();
            if (currentWidth > windowWidth && windowWidth > 300) {
                var newWidth = windowWidth - 20;
                $('.side-navigation').css('width', newWidth + 'px');
            }
        }
        draggable();
    });

    $('.card--social a').on('click', function (e) {
        e.preventDefault();
        $('#socialModal').modal('show');
    })

    if ($('.dropdown-toggle')) {
        $('.dropdown-toggle').dropdown()
    }


    // $('.forceLoginModal').loginModal({
    //     onLoad: function () {
    //         $("#loginForm").validateLoginForm();
    //         $("#signupForm").validateSignupForm();
    //     }
    // });
    //
    // /*
    //  * Follow Blog on article page
    //  */
    // $('.followArticleBtn').followBlog({
    //     onSuccess: function (data, obj) {
    //        ($(obj).data('status') === 'follow') ? $(obj).html("Follow +") : $(obj).html("Following -");
    //         var message = ($(obj).data('status') === 'follow') ? 'Unfollow' : 'Follow';
    //         $.fn.General_ShowNotification({message: message + " blog successfully."});
    //     },
    //     beforeSend: function (obj) {
    //         $(obj).html('please wait...');
    //     }
    // });


    // $('.shareIcons').SocialShare({
    //     onLoad: function (obj) {
    //         var title = obj.parents('div.article').find('.card__news-category').text();
    //         var url = obj.parents('div.article').find('a').attr('href');
    //         var content = obj.parents('div.article').find('.card__news-description').text();
    //         $('.rrssb-buttons').rrssb({
    //             title: title,
    //             url: url,
    //             description: content
    //         });
    //         setTimeout(function () {
    //             rrssbInit();
    //         }, 10);
    //     }
    // });

    $("#owl-thumbnails").owlCarousel({
        items: 2,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsMobile: [600, 1],
        pagination: true,
        navigation: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1000,
        navigationText: [
            "<i class='fa fa-angle-left fa-2x'></i>",
            "<i class='fa fa-angle-right fa-2x'></i>"
        ]
    });

    //Contact form validation
    $('#contactForm').validate({
        rules: {
            name: "required",
            email: "required",
            message: "required"
        },
        // errorElement: "span",
        messages: {
            name: "Name cannot be blank.",
            email: "Email cannot be blank.",
            message: "Message cannot be blank."
        }
    });

    /************************************************************************************
     *                  USER EDIT PROFILE PAGE JS
     ************************************************************************************/

    // $('.uploadFileBtn').uploadFile({
    //        onSuccess: function(data, obj){
    //             var resultJsonStr = JSON.stringify(data);
    //            
    //             var imgClass = $(obj).data('imgcls');
    //             $('.' + imgClass).css('background-image', 'url(' + data.url + ')');
    //            
    //             var fieldId = $(obj).data('id');
    //             $('#' + fieldId).val(resultJsonStr);
    //            
    //             $().General_ShowNotification({message: 'Image added successfully' });
    //         },
    //        onError: function(obj, errorMessage) {
    //             $().General_ShowErrorMessage({message: errorMessage});
    //         }
    // });


    // /**
    //  * Update Social Post From Listing
    //  */
    // $('.editSocialPost').on('click', function (e) {
    //     e.preventDefault();
    //     var elem = $(this);
    //     var url = elem.data('url');
    //     var popup = window.open(url, '_blank', 'toolbar=no,scrollbars=yes,resizable=false,width=360,height=450');
    //     popup.focus();
    //
    //     var intervalId = setInterval(function () {
    //         if (popup.closed) {
    //             clearInterval(intervalId);
    //             var socialId = elem.parents('a').data('id');
    //             if($('#updateSocial'+socialId).data('update') == '1') {
    //                 $().General_ShowNotification({message: 'Social Post(s) updated successfully.'});
    //             }  
    //         }
    //     }, 50);
    //
    //     return;
    // });

}(jQuery));


    


