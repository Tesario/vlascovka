/* Header Scroll */
$(window).on('scroll', (e) => {
    var scrollPosition = $('html')[0].scrollTop;
    if(scrollPosition <= 0){
        changeHeader('transparent', '100px', '3rem', 'white', "transparent");
    }
    else{
        changeHeader('white', '50px', '2rem', 'black', "gray");
    }
});

function changeHeader( bgColor,logoSize, fontSize, fontColor, borderColor){
    $('#header').css({'background':bgColor, 'height':logoSize, "border-bottom": "1px solid " + borderColor});
    $('#header .logo-box').css({'width':logoSize, 'height':logoSize, 'filter':'brightness('+((fontColor == 'black')?'0':'500%')+')'});
    $('#header h1').css({'font-size':fontSize, 'color':fontColor})
}
/* End Header Scroll */