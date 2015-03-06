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
    
})