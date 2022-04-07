$(document).ready(function(){
    let icon = document.getElementById('icon');
    let links = $('#links');
    
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

    // $(window).on('resize', function(){

    //     let screen = $(this).width();
    //     active = screenLinks(screen, links);

    // });
});        
        
function showLinks(links){
    document.getElementsByTagName('body')[0].classList.add("no-scroll");
    links.show();
    links.animate({ right: '0' });
    return true;
}

function hideLinks(links){
    document.getElementsByTagName('body')[0].classList.remove("no-scroll");

    links.animate({ right: '-40%' });

    setTimeout(function(){links.hide();}, 0800);

    return false;
}

// function screenLinks(screen, links){
//     switch(screen > 540){
//         case true:
//             document.getElementsByTagName('body')[0].classList.remove("no-scroll");
//             links.show();
//             return true;
//             break;
        
//         case false:
//             links.hide();
//             return false;
//             break;
//     }    
// }