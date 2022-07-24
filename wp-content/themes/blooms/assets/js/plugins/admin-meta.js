jQuery(function($) {
  // Product Category Settings.
  if ($('#product_cat_header').length) {
    if ($('#product_cat_thumbnail_id').val() === 0) {
      $('.remove_image_button').hide();
    }
    if ($('#product_cat_header_id').val() === 0) {
      $('.thb_remove_header').hide();
    }
    // Uploading files
    var header_file_frame2;

    $(document).on('click', '.thb_upload_header', function(event) {

      event.preventDefault();

      // If the media frame already exists, reopen it.
      if (header_file_frame2) {
        header_file_frame2.open();
        return;
      }

      // Create the media frame.
      header_file_frame2 = wp.media.frames.downloadable_file = wp.media({
        title: thb_admin.i18n.mediaTitle,
        button: {
          text: thb_admin.i18n.mediaButton,
        },
        multiple: false
      });

      // When an image is selected, run a callback.
      header_file_frame2.on('select', function() {
        var attachment = header_file_frame2.state().get('selection').first().toJSON();

        $('#product_cat_header_id').val(attachment.id);
        $('#product_cat_header img').attr('src', attachment.url);
        $('.thb_remove_header').show();
      });

      // Finally, open the modal.
      header_file_frame2.open();
    });

    $(document).on('click', '.thb_remove_header', function(event) {
      $('#product_cat_header img').attr('src', thb_admin.wc_placeholder);
      $('#product_cat_header_id').val('');
      $('.thb_remove_header').hide();
      return false;
    });
  }
});