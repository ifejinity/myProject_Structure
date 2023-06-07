$.ajax({
    url: '',
    method: 'GET',
    dataType: 'json',
    success: function(response) {
      // Code to be executed when the request succeeds
      console.log('Data:', response);
    },
    error: function(xhr, status, error) {
      // Code to be executed when the request fails
      console.log('Error:', error);
    }
  });
  