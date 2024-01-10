$(document).ready(function() {

  $('.search-icon').click(function() {
    let searchQuery = $('#search').val();
    $.ajax({
      url: 'search-dokter.php', 
      type: 'POST',
      data: { search: searchQuery },
      success: function(response) {
        $('.tabel-dokter').html(response);
      },
      error: function(error) {
        console.log(error);
      }
    });
  });


  $('.btn-refresh').click(function() {
    $('#search').val('');
    $.ajax({
      url: 'refresh.php', 
      type: 'POST',
      success: function(response) {
        $('.tabel-dokter').html(response);
      },
      error: function(error) {
        console.log(error);
      }
    });
  });


});
