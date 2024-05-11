jQuery(document).ready(function($) {
    $('.notice[data-notice="get_started"]').on('click', '.notice-dismiss', function() {
        $.ajax({
            type: 'POST',
            data: {
                action: 'dismiss_expert_hotel_booking_notice',
            },
            url: ajaxurl,
        });
    });
});