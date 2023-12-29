function videoClicked(id, first = false) {
    // console.log(id);

    const player = document.getElementById('ytplayer');
    const header_height = document.getElementsByClassName('main-header-bar')[0].offsetHeight;
    // console.log(header_height);
    if (!first) window.scrollTo({
        top: window.pageYOffset + player.getBoundingClientRect().top - document.documentElement.offsetTop - header_height,
        behavior: 'smooth'
    });
    document.getElementById('ytplayer').src = 'https://www.youtube.com/embed/' + id + '?cc_load_policy=0'
    + (first ? '' : '&autoplay=1') + '&iv_load_policy=1&loop=0';
}

function nextPage(token, lim = 16) {
    if ($('#load-spinner').length) $('#load-spinner').removeClass('d-none');
    // console.log('At next page');
    // console.log(token);
    if (token === undefined)
        return;
    const first = token === 'first';
    if (first) token = '';
    
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        // console.log(this.responseText);
        var row = document.getElementById('gallery');
        var sample = document.getElementById('sample-video-template');


        const resp = JSON.parse(this.responseText);
        if (first && resp.items) videoClicked(resp.items[0].id.videoId, true);
        resp.items.forEach(element => {
            sample.getElementsByClassName('ytvidthumb')[0].src = 'https://i.ytimg.com/vi/'
            + element.id.videoId + '/hqdefault.jpg';
            sample.getElementsByClassName('play')[0].src = resp.ytlogo;
            sample.getElementsByClassName('vtitle')[0].innerHTML = element.snippet.title;

            sample.classList.remove('d-none');
            var clone = sample.cloneNode(true);
            clone.addEventListener('click', function() { videoClicked(element.id.videoId); })
            row.appendChild(clone);
            sample.classList.add('d-none');
            
        });
        if ($('#load-spinner').length) $('#load-spinner').addClass('d-none');

        if (resp.nextPageToken === undefined && $('#load-more').length) {
            document.getElementById('load-more').innerHTML = 'No More Videos';
            document.getElementById('load-more').onclick = function() {};
        }
        else if ($('#load-more').length)
            document.getElementById('load-more').onclick = function() { nextPage(resp.nextPageToken); };
    }
    xhttp.open("GET-2.html", 'https://www.ramfit.org/ytapi/?token=' + token + '&limit=' + lim);
    xhttp.send();

}

function test() {
    document.getElementById('load-spinner').classList.remove('d-none');
    setTimeout(() => {
        document.getElementById('load-spinner').classList.add('d-none');
    }, 3000);
}

$(function() {
    if ($('#ytg-wrapper').length) {
        $('#ytg-wrapper').empty();
        $('#ytg-wrapper').append(
        '<div id="ytg">' +
            '<div class="ytg-flex-container">' + 
                '<div class="ytp-wrapper">' +
                '<!-- Here is the embedded player -->'+
                    '<div class="ytplayer">' +
                        '<iframe id="ytplayer" type="text/html" width="640" height="360" src="https://www.youtube.com/embed/" frameborder="0" allow="autoplay"></iframe>' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '<div class="ytg-flex-container" id="gallery">' +
                '<div class="ytv-wrapper d-none" id="sample-video-template">' +
                    '<div class="ytvideo">' +
                        '<div class="yt-thumb position-relative">' +
                            '<img src="" alt="" class="ytvidthumb">' +
                            '<img src="" alt="play" class="play position-absolute">' +
                        '</div>' +
                        '<div class="vtitle">' +
                            'Hello I am a title' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</div>' +
        '</div>'
        );
        // console.log('Appended');
        if ($('#ytg-wrapper').hasClass('ytg-wrapper-home')) {
            nextPage('first', 8)
        } else {
            nextPage('first');
        }
    }
});