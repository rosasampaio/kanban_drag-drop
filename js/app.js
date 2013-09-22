$(function(){
    $("#sortable1,#sortable2,#sortable3,#sortable4").sortable({
        connectWith: '.connectedSortable',
        update : function (){ 
          
            $.ajax({
                type: "POST",
                url: "../classe/sort.php",
                data:{  
                    sort1:$("#sortable1").sortable('serialize'),
                    sort2:$("#sortable2").sortable('serialize'),
                    sort3:$("#sortable3").sortable('serialize'),
                    sort4:$("#sortable4").sortable('serialize')
                },
                success: function(html) {
                    
                    $('.success').show().fadeOut(2100);
//                    $('.kanban').toggleText(1000);
                },
                error:function(){
                      alert('erro');
                }
                
            });
        } 
    }).disableSelection();
});



