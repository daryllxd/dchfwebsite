var DCHF = {
    initialize: function(){
        DCHF.bindEvents();
//        DCHF.UI.changeColors();
        DCHF.UI.prepareCoinslider();
        

    },
    bindEvents: function(){
//        window.oncontextmenu = function(){
//            return false;
//        };                
//        $('#lock').click(DCHF.UI.lockScreen);
//        onresize = function(){
//            DCHF.UI.verticallyCenter('#candidate-details .image','#candidate-details',$(document).height()-245,'padding');
//        };
//        $('#candidateMenu').click(DCHF.UI.toggleCandidate);
//        $('#messageMenu').click(DCHF.UI.toggleMessages);
//        $('#categoryMenu').click(DCHF.UI.toggleCategory);
//        $('#btnSendMessage').click(DCHF.AJAX.sendMessage);
//        $('#btnSendCategory').click(DCHF.AJAX.sendCategory);
    }
}
//$(".myClass").css("border","3px solid red");</script>

DCHF.UI = {
    showMessage: function(input){
        alert(input);        
        
    },
    prepareCoinslider: function(){
        $('#coin-slider').coinslider();
    },
//    changeColors : function(){
//        $('.threecols').css('border', '3px solid red');
//        $('.threecols').css('box-sizing', 'border-box');
//    },
    
    lockScreen: function(){
        $('#header').css('top','-32px');
        $('#sidebar').hide();
        $('#content-pane').hide();
        $('#idle').fadeIn();
    },
    randomizeWallpaper: function(){
        var num = Math.ceil(Math.random(1,14)*100)%13+1;
        document.getElementsByTagName('body')[0].style.backgroundImage = 'url(public/images/background/m'+num+'.jpg)';
    }
}
    
$(document).ready(function(){
   DCHF.initialize(); 
});