/**
 * @file
 * Contains the definition of the behaviour validateReleaseDate.
 */

 (function ($, Drupal) {

    'use strict';
  
    /**
     * Attaches the validateReleaseDate behavior to Release Date Field.
     */
    Drupal.behaviors.validateReleaseDate = {
      attach: function (context, settings) {
        
        var releaseDateErrorDiv = $('<div class="release-date-error"></div>')
        .css('color', 'red').html('Movie Release date can not be in future. Please check the Release date.');

        $( ".field--name-field-release-date" ).once('validateReleaseDate').on('focusout', function() {
            var release_date = new Date($('#edit-field-release-date-0-value-date').val()).getTime();

            if (release_date > Date.now()) {
                $("#edit-field-release-date-0-value-date").focus();
                $(".field--name-field-release-date").append(releaseDateErrorDiv);
                $('#edit-submit').prop('disabled', true);
            }
            else{
                $( ".release-date-error" ).remove();
                $('#edit-submit').prop('disabled', false);
            }
        })
      }
    };
})(jQuery, Drupal);
 