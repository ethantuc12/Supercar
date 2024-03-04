$(document).ready(function() {
    $('#search-btn').click(function() {
      var query = $('#search-box').val();
      $.ajax({
        type: 'POST',
        url: 'search.php',
        data: {query: query},
        success: function(data) {
          $('#results').html(data);
        }
      });
    });
  });
  