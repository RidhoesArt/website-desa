
$('#beranda').on('click', function(){  
    $.ajax({
        url: 'https://newsapi.org/v2/top-headlines',
        type: 'get',
        dataType: 'json',
        data: {
            'country' : $(this).data('id'),
            'apiKey' : '0ded2b227ae74601b9a7bd7155d9ac56'
        },
        success: function(movie){
            console.log(movie)
            if(movie.articles.source.id == "null"){

                $('.body-beranda').html(`
                <div class="container-fluid">
                    <div class="row">
                       <div class="col-md-4">
                       <img src="` + movie.author + `" class="img-fluid">
                       </div>

                        <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item"><h3>` + movie.title + `</h3></li>
                                <li class="list-group-item">Release : ` + movie.description + `</li>
                                <li class="list-group-item">Genre : ` + movie.urlToImage + `</li>
                                <li class="list-group-item">Director : ` + movie.publishedAt + `</li>
                                <li class="list-group-item">Aktors : ` + movie.content + `</li>
                            </ul>
                       </div> 
                    </div>
                </div>
                `);
            }
        }
    });
});