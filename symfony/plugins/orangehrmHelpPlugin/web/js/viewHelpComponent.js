$(document).ready(function () {

    $("#helpIcon").click(function () {
        const notificationIconPosition = $("#helpIcon").position();
        const iconSize = 30;
        const modalTop = notificationIconPosition.top + iconSize;
        const modalRight = $(document).width() - notificationIconPosition.left - iconSize;

        $('#helpModal').css('position', 'absolute');
        $('#helpModal').css('top', modalTop);
        $('#helpModal').css('left', 'auto');
        $('#helpModal').css('right', modalRight);
        $('#helpModal').css('margin', 0);

        $('#helpModal').modal('toggle');

    });

    $("div.help-row").hover(function (e) {
        const target = e.target;
        var shareId = null;
        if ($(target).is('div.help-row')) {
            shareId = $(target).data('shareid');
        } else {
            shareId = $($(target).closest('div.help-row')).data('shareid');
        }
        $('#deleteOrEditShareForm_shareId').val(shareId);
        $('.help-row').removeClass('selected-article');
        $(this).addClass('selected-article');
        $(this).css('cursor', 'pointer');

    });

    $(document).click(function (e) {
        if (!$(e.target).closest('#helpIcon').length && !$(e.target).is('#helpIcon') && !$(e.target).closest('#helpModal').length) {
            // Close notification modal when click outside
            $('#helpModal').modal('hide');
        }
    });

    $(document).hover(function (e) {
        if (!$(e.target).closest('#helpIcon').length && !$(e.target).is('#helpIcon') && !$(e.target).closest('#helpModal').length) {            // Close notification modal when click outside
            $('.help-row').removeClass('selected-article');
        }
    });

    $('#clearNotificationsLink').click(function (e) {
        $.post(ClearNotificationURL)
            .done(function (data) {
                $('#clearNotificationsLink').slideUp();
                $('div.notification-container').slideUp(function () {
                    $('#notificationsMessages').text(lang_NoNewNotifications);
                    $('#notificationsMessages').addClass('empty-notifications-message');
                    $('#notificationsMessages').slideDown();
                });
            })
            .fail(function (data) {
                $('#notificationsMessages').text(lang_NotificationClearFailed);
                $('#notificationsMessages').slideDown();
                setTimeout(function () {
                    $('#notificationsMessages').slideUp();
                }, 2000);
            });
    });

    $('#notificationShareViewMoreModal').on("click", ".notification-hide-modal-popup", function (e) {
        $("#notificationShareViewMoreModal").modal('hide');
    });
});
