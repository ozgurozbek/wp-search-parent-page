jQuery(document).ready(function($) {
    // Add search input box before the parent page dropdown
    $('#parent_id').before('<input type="text" id="pps-search" placeholder="Search Parent Pages" style="width:100%; margin-bottom: 10px;"/>');

    // Search logic: Filter the parent page options based on the search input
    $('#pps-search').on('keyup', function() {
        var searchText = $(this).val().toLowerCase();

        $('#parent_id option').each(function() {
            var currentOptionText = $(this).text().toLowerCase();
            
            if (currentOptionText.indexOf(searchText) === -1) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });
});
