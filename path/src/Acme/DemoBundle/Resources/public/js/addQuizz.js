$(function(){
    $('<hr/>').insertBefore('#add_quizz_type > div:nth-child(5)');
    
    $('#add_quizz_type > div:nth-child(5) label').hide();
    $('#add_quizz_type > div:nth-child(5) label').remove();
    //$('.required').remove();
    $('#add_quizz_type_questions label').remove();
    
   $('<p class="numberAddQuestion" >1</p>').insertAfter('#add_quizz_type_questions > div > #add_quizz_type_questions_0 > div:first-child()');
    
    $('<p class="numberAddQuestion" >2</p>').insertAfter('#add_quizz_type_questions > div > #add_quizz_type_questions_1 > div:first-child()');
    
    $('<p class="numberAddQuestion" >3</p>').insertAfter('#add_quizz_type_questions > div > #add_quizz_type_questions_2 > div:first-child()');
    
    $('<p class="numberAddQuestion" >4</p>').insertAfter('#add_quizz_type_questions > div > #add_quizz_type_questions_3 > div:first-child()');
    
    $('<p class="numberAddQuestion" >5</p>').insertAfter('#add_quizz_type_questions > div > #add_quizz_type_questions_4 > div:first-child()');
    
    $('<p class="numberAddQuestion" >6</p>').insertAfter('#add_quizz_type_questions > div > #add_quizz_type_questions_5 > div:first-child()');
    
    $('<p class="numberAddQuestion" >7</p>').insertAfter('#add_quizz_type_questions > div > #add_quizz_type_questions_6 > div:first-child()');
    
    $('<p class="numberAddQuestion" >8</p>').insertAfter('#add_quizz_type_questions > div > #add_quizz_type_questions_7 > div:first-child()');
    
    $('<p class="numberAddQuestion" >9</p>').insertAfter('#add_quizz_type_questions > div > #add_quizz_type_questions_8 > div:first-child()');
    
    $('<p class="numberAddQuestion" >10</p>').insertAfter('#add_quizz_type_questions > div > #add_quizz_type_questions_9 > div:first-child()');
    
    $('#add_quizz_type_questions > div > div > div:nth-child(3) input').click(function(){
        $(this).parent().parent().parent().parent().find('input[type="checkbox"]').not(this).attr('checked', false);

    })

    $('.addQuizz').submit(function(){
    
        var doreturn = 0;
        var checked = 0;
        $('section .addQuizz #add_quizz_type_questions > div').each(function(){
            var input = $(this).find('input[type="checkbox"]');
            
            var isvalid = 0;
            
            input.each(function(){
                var element = $(this);
                if(element.prop('checked')==false){
                isvalid = isvalid +1;
                }else{
                isvalid = 0;
                };
                
                if(isvalid != 0){
                checked = checked;
                }else{
                checked = checked + 1;
                }
            })
            
            if (checked < 10 ){
            
            console.log(checked);
            doreturn = 1;
                
            }else{
            doreturn = 0;
            console.log(checked);
            
            }
        
        })
      
        //console.log(doreturn);
        if(doreturn == 1){
            
            alert("Au moins une question n'a pas de bonne reponse validé ! Merci de lui choisir une bonne reponse")
            return false;}else{
        return true;
        };
        
    })
    
})