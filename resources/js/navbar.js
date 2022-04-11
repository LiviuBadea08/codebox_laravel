
let icon = document.getElementById('icon');
let links = document.getElementById('links');

let active = false;

icon.addEventListener('click', function(){
    switch(active){
        case false: 
            active = showLinks(links);
            break;
        
        case true:
            active = hideLinks(links);
            break;
    };
});
        
function showLinks(links){
    document.getElementsByTagName('body')[0].classList.add("no-scroll");
    links.style.display = "flex";
    links.animate({ right: '0' });
    return true;
}

function hideLinks(links){
    document.getElementsByTagName('body')[0].classList.remove("no-scroll");
    links.style.display = "none";
    return false;
}

