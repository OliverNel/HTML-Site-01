function rand() {
    console.log(getRandomInt(16));
}

var boxArray = new Array(16);
var turn=0,won=-1,status=1,ki=0;
function initialzie() {
    for (var i = 0; i < boxArray.length; i++) {
        boxArray[i] = -1;
    }
    won=0;
    $('.player-box').text('-');
}
function iswon() {
    //Reihen Check
    if(boxArray[0]==boxArray[1]&&boxArray[1]==boxArray[2]&&boxArray[2]==boxArray[3]&&boxArray[0]!=-1) {
        $('.resultat').text('Spieler '+player+' hat gewonnen!');
        $('.main-content .game .board #box1').toggleClass('win');
        $('.main-content .game .board #box2').toggleClass('win');
        $('.main-content .game .board #box3').toggleClass('win');
        $('.main-content .game .board #box4').toggleClass('win');
        won = 1;
    }
    if(boxArray[4]==boxArray[5]&&boxArray[5]==boxArray[6]&&boxArray[6]==boxArray[7]&&boxArray[4]!=-1) {
        $('.resultat').text('Spieler '+player+' hat gewonnen!');
        $('.main-content .game .board #box5').toggleClass('win');
        $('.main-content .game .board #box6').toggleClass('win');
        $('.main-content .game .board #box7').toggleClass('win');
        $('.main-content .game .board #box8').toggleClass('win');
        won = 1;
    }
    if(boxArray[8]==boxArray[9]&&boxArray[9]==boxArray[10]&&boxArray[10]==boxArray[11]&&boxArray[8]!=-1) {
        $('.resultat').text('Spieler '+player+' hat gewonnen!');
        $('.main-content .game .board #box9').toggleClass('win');
        $('.main-content .game .board #box10').toggleClass('win');
        $('.main-content .game .board #box11').toggleClass('win');
        $('.main-content .game .board #box12').toggleClass('win');
        won = 1;
    }
    if(boxArray[12]==boxArray[13]&&boxArray[13]==boxArray[14]&&boxArray[14]==boxArray[15]&&boxArray[12]!=-1) {
        $('.resultat').text('Spieler '+player+' hat gewonnen!');
        $('.main-content .game .board #box13').toggleClass('win');
        $('.main-content .game .board #box14').toggleClass('win');
        $('.main-content .game .board #box15').toggleClass('win');
        $('.main-content .game .board #box16').toggleClass('win');
        won = 1;
    }
    //Spalten Check
    if(boxArray[0]==boxArray[4]&&boxArray[4]==boxArray[8]&&boxArray[8]==boxArray[12]&&boxArray[0]!=-1) {
        $('.resultat').text('Spieler '+player+' hat gewonnen!');
        $('.main-content .game .board #box1').toggleClass('win');
        $('.main-content .game .board #box5').toggleClass('win');
        $('.main-content .game .board #box9').toggleClass('win');
        $('.main-content .game .board #box13').toggleClass('win');
        won = 1;
    }
    if(boxArray[1]==boxArray[5]&&boxArray[5]==boxArray[9]&&boxArray[9]==boxArray[13]&&boxArray[1]!=-1) {
        $('.resultat').text('Spieler '+player+' hat gewonnen!');
        $('.main-content .game .board #box2').toggleClass('win');
        $('.main-content .game .board #box6').toggleClass('win');
        $('.main-content .game .board #box10').toggleClass('win');
        $('.main-content .game .board #box14').toggleClass('win');
        won = 1;
    }
    if(boxArray[2]==boxArray[6]&&boxArray[6]==boxArray[10]&&boxArray[10]==boxArray[14]&&boxArray[2]!=-1) {
        $('.resultat').text('Spieler '+player+' hat gewonnen!');
        $('.main-content .game .board #box3').toggleClass('win');
        $('.main-content .game .board #box7').toggleClass('win');
        $('.main-content .game .board #box11').toggleClass('win');
        $('.main-content .game .board #box15').toggleClass('win');
        won = 1;
    }
    if(boxArray[3]==boxArray[7]&&boxArray[7]==boxArray[11]&&boxArray[11]==boxArray[15]&&boxArray[3]!=-1) {
        $('.resultat').text('Spieler '+player+' hat gewonnen!');
        $('.main-content .game .board #box4').toggleClass('win');
        $('.main-content .game .board #box8').toggleClass('win');
        $('.main-content .game .board #box12').toggleClass('win');
        $('.main-content .game .board #box16').toggleClass('win');
        won = 1;
    }
    //Diagonal Check
    if(boxArray[0]==boxArray[5]&&boxArray[5]==boxArray[10]&&boxArray[10]==boxArray[15]&&boxArray[0]!=-1) {
        $('.resultat').text('Spieler '+player+' hat gewonnen!');
        $('.main-content .game .board #box1').toggleClass('win');
        $('.main-content .game .board #box6').toggleClass('win');
        $('.main-content .game .board #box11').toggleClass('win');
        $('.main-content .game .board #box16').toggleClass('win');
        won = 1;
    }
    if(boxArray[3]==boxArray[6]&&boxArray[6]==boxArray[9]&&boxArray[9]==boxArray[12]&&boxArray[3]!=-1) {
        $('.resultat').text('Spieler '+player+' hat gewonnen!');
        $('.main-content .game .board #box4').toggleClass('win');
        $('.main-content .game .board #box7').toggleClass('win');
        $('.main-content .game .board #box10').toggleClass('win');
        $('.main-content .game .board #box13').toggleClass('win');
        won = 1;
    }

    var i;
    for (i = 0; i< boxArray.length; i++) {
        if(boxArray[i]==-1)
            break;
    }
    if(i==16&&won==0)
        $('.resultat').text('Unentschieden!');
}

$(document).ready(function(){
    if(status==1) {
    initialzie();
    $('.player-box').click(function(e){
        var clicked = $(this).attr('data-box');
        if(won==0){
            if(turn==0){
            if(boxArray[clicked-1]==-1){
                $(this).text('X');
                boxArray[clicked-1]=0;
                turn = 1;
                player = "X";
            }
            }else{
                if(boxArray[clicked-1]==-1){
                    $(this).text('O');
                    boxArray[clicked-1]=1;
                    turn = 0;
                    player = "O";
                }
            }   
            status + 1;
            iswon();
        }
        
    });
    }
else {

}
    $('.main-content .game #friend').click(function(){
        $('.resultat').text('');
        $('.main-content .game #ki').prop("disabled", false);
        $('.main-content .game #friend').toggleClass('choose');
        $('.main-content .game #ki').toggleClass('choose');
        $(this).prop("disabled", true);

        $('.main-content .game .board #box1').removeClass('win');
        $('.main-content .game .board #box2').removeClass('win');
        $('.main-content .game .board #box3').removeClass('win');
        $('.main-content .game .board #box4').removeClass('win');
        $('.main-content .game .board #box5').removeClass('win');
        $('.main-content .game .board #box6').removeClass('win');
        $('.main-content .game .board #box7').removeClass('win');
        $('.main-content .game .board #box8').removeClass('win');
        $('.main-content .game .board #box9').removeClass('win');
        $('.main-content .game .board #box10').removeClass('win');
        $('.main-content .game .board #box11').removeClass('win');
        $('.main-content .game .board #box12').removeClass('win');
        $('.main-content .game .board #box13').removeClass('win');
        $('.main-content .game .board #box14').removeClass('win');
        $('.main-content .game .board #box15').removeClass('win');
        $('.main-content .game .board #box16').removeClass('win');

        initialzie();
        $('.player-box').click(function(e){
            var clicked = $(this).attr('data-box');
            if(won==0){
                if(turn==0){
                if(boxArray[clicked-1]==-1){
                    $(this).text('X');
                    boxArray[clicked-1]=0;
                    turn = 1;
                    player = "X";
                }
                }else{
                    if(boxArray[clicked-1]==-1){
                        $(this).text('O');
                        boxArray[clicked-1]=1;
                        turn = 0;
                        player = "O";
                    }
                }   
                
                iswon();
            }
            
        });
    });
    $('.main-content .game #ki').click(function(){
        $('.resultat').text('');
        
        $('.main-content .game .board #box1').removeClass('win');
        $('.main-content .game .board #box2').removeClass('win');
        $('.main-content .game .board #box3').removeClass('win');
        $('.main-content .game .board #box4').removeClass('win');
        $('.main-content .game .board #box5').removeClass('win');
        $('.main-content .game .board #box6').removeClass('win');
        $('.main-content .game .board #box7').removeClass('win');
        $('.main-content .game .board #box8').removeClass('win');
        $('.main-content .game .board #box9').removeClass('win');
        $('.main-content .game .board #box10').removeClass('win');
        $('.main-content .game .board #box11').removeClass('win');
        $('.main-content .game .board #box12').removeClass('win');
        $('.main-content .game .board #box13').removeClass('win');
        $('.main-content .game .board #box14').removeClass('win');
        $('.main-content .game .board #box15').removeClass('win');
        $('.main-content .game .board #box16').removeClass('win');

        $('.main-content .game #friend').prop("disabled", false);
        $('.main-content .game #ki').toggleClass('choose');
        $('.main-content .game #friend').toggleClass('choose');
        $(this).prop("disabled", true);
        initialzie();

        if(won==0){
            if(ki==0){
                $('.player-box').click(function(e){
                    var clicked = $(this).attr('data-box')
                    if(boxArray[clicked-1]=-1){
                        $(this).text('X');
                        boxArray[clicked-1]=0;
                        player = "X";
                    }
                    var zug = $(this).attr(rand)
                    if(boxArray[zug]=-1) {
                        $('#box').text('O');
                        boxArray[zug]=-1
                        player = "O";
                    }
                });
                ki = 1
            }
            iswon();
        }
        });

    $('#reset').click(function(){
        $('.resultat').text('');
        location.reload();
        alert("Das Spielfeld wird jetzt zurückgesetzt!");
    });
});