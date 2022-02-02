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
    //delete an article
    $('.btn-danger').click(function(){
        var id = $(this).attr('target');
        $.post('delete.php', {id : id},function(){
            $("#" + id).remove();
        })
    })
    //update an article
    $('.btn-secondary').click(function(){
        var id = $(this).attr('target');
        $('#formup').submit(function(){
            newtitle = $(this).find('input[name = title]').val();
            newCategory = $(this).find('input[name = category]').val();
            addtext = $(this).find('input[name = exampleFormControlTextarea1]').val();
            email = $(this).find('textarea[name = email]').val();
            console.log(newCategory = $(this).find('input[name = category]').val());
            $.post("update.php",{email:email,title:newtitle,category:newCategory,text:addtext,id:id});
    })
    })
    //animation 
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
    $('.like').one('click',function(){
        var id = $(this).attr('target')
        console.log(id);
        $.post('like.php',{id:id},function(){
        var n = parseInt($('#likeslayout' + id).text());
        n = n+1;
        $('#likeslayout' + id).text(n); 
        });
    })
    //recupérer un commentaire
    $('.comment').one("click",function(){
        const id = "#textareaN" + String($(this).text()).slice(9);
        $(id).toggle('slow');
        $(id).bind('keypress',function(e){
            key = e.keyCode;
            if (key == 13) {
                console.log('success');
                var d = new Date();
                $(id).hide();
                var strDate = "Added at " + d.getDate() + " / " + (d.getMonth() + 1) + " / " + d.getFullYear();
                var data = $(id + " > #floatingTextarea").val();
                $(this).after("<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'><div class='toast-header'><strong class='me-auto'>Bootstrap</strong><small class='text-muted'>"+ strDate +"</small></div><div class='toast-body'>" + data + "</div>"); 
                $.post('comment.php',{ comment : data, ID_Article : id.slice(10)});
            }
        })
    })
    $.post('comment.php',function(data){
        var obj = $.parseJSON(data);
        for (let i in obj){
            var id = "#commentslayout" + obj[i]['ID'];
            console.log(id);
            $(id).css('display','block');
            $(id).prepend("<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'><div class='toast-header'><strong class='me-auto'" + obj[i]['date'] + "</strong><small class='text-muted'>"+ obj[i]['own'] +"</small></div><div class='toast-body'>" + obj[i]['comment'] + "</div>")
        }       
    })
    $('.needs-validation').submit(function(){
        $('.alert-success').css('display','block');
        console.log($('.alert-success').css('display'));
    })
})