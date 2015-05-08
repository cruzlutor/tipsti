function fbShare(url) {
    share('http://www.facebook.com/sharer.php?s=100&p[url]=' + url);
}    
function psShare(url) {
    share('https://plus.google.com/share?url=' + url);
}
function twShare(url, title, via) {
    share('http://twitter.com/share?text=' + title + '&url=' + url + '&via=' + via);
}

function share(url){
    var winWidth = 520;
    var winHeight = 520;
    var winTop = (screen.height / 2) - (winHeight / 2);
    var winLeft = (screen.width / 2) - (winWidth / 2);
    window.open(url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
}