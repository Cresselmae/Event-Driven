function search(search_value){
    $.ajax({
        url: '/Ejem/models/searchEngine.php',
        type: 'POST',
        data: { 'search' : search_value },
        success: function(response){
            $('#results').html(response);
        }
    })
    }