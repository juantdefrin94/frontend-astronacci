$(function () {
    $('#contentTabs .nav-link').on('click', function () {
        $('#contentTabs .nav-link').removeClass('active');
        $(this).addClass('active');

        const target = $(this).data('target');
        $('#articles, #videos').addClass('d-none');
        $(target).removeClass('d-none');
    });

    if(data.data){
        data.data.articleRows.forEach(article => {
            $('#articles .row').append(`
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">${article.name}</h5>
                            <p class="card-text">${article.source}</p>
                        </div>
                    </div>
                </div>
            `);
        })

        data.data.videoRows.forEach(video => {
            $('#videos .row').append(`
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">${video.name}</h5>
                            <p class="card-text">${video.source}</p>
                        </div>
                    </div>
                </div>
            `);
        });
    }
});

function getCookie(name) {
  const cookieArr = document.cookie.split(';');
  for (let i = 0; i < cookieArr.length; i++) {
    let cookie = cookieArr[i].trim();
    if (cookie.startsWith(name + '=')) {
      return decodeURIComponent(cookie.substring(name.length + 1));
    }
  }
  return null;
}