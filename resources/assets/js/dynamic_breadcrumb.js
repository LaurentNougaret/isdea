
var pathUrl = window.location.pathname,
    arr = pathUrl.split('/'),
    breadcrumbSec = $(".breadcrumb ul");
breadcrumbSec.prepend("<li><a href='/'>home</a></li>");
arr.forEach(function(item, index) {
        if(item.length> 2) {
        var printItem = item.replace(/[^\w]/gi, ' ');
        if(arr.length -1 !== index) {
            if(arr[index-1] != ''){
                breadcrumbSec.append("<li><a href=/"+arr[index-1]+'/'+ item + ">" + printItem + "</a></li>");
            }
            else{
                breadcrumbSec.append("<li><a href=/"+ item + ">" + printItem + "</a></li>");
            }
        }
        else{
            breadcrumbSec.append("<li>" + printItem + "</li>");
        }
    }
});