$(document).ready(function(){
    //show-pop
    $(".btn-secondary").click(function(){
        $("#pop-upcontainer").show('slow',function(){
        });
    })
    
    //close-pop
    $("#closepop-up").click(function(){
        $("#pop-upcontainer").hide('slow');
    })
    
    $('.up').click(function(){
        var id = $(this).text();
        $('#id1').val(id.slice(6));
    })
    //submit l'update d'un article
    $('#formup').submit(function(){
        console.log('haezljk');
        newtitle = $(this).find('input[name = title]').val();
        newCategory = $(this).find('input[name = category]').val();
        addtext = $(this).find('input[name = exampleFormControlTextarea1]').val();
        email = $(this).find('textarea[name = email]').val();
        ident = $(this).find('input[name = ident]').val();
        $.post("update.php",{email:email,title:newtitle,category:newCategory,text:addtext,id:ident},function(data){
        }); 
        
    })
    $('.art').mouseenter(function(){
        $(this).animate({
            'zoom' : 1.4,
        },'slow');
    })
    $('.art').mouseleave(function(){
        $(this).animate({
            'zoom' : 1, 
        },)
    })
    //recupérer les j'aimes
    $('.like').click(function(){
        const id = String($(this).text());
        $.post('like.php',{id:String($(this).text())},function (){
        var n = parseInt($('#' + id.slice(6)).text());
        n = n+1;
        $('#' + id.slice(6)).text(n); 
        });
    })

    })