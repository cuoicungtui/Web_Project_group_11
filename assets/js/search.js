$(document).ready(function () {
    $(".search").keyup(function (e) { 
        var x=1;
        var searchitem = $(".search").val();
        var SplitSearchItem = searchitem.replace(/ /g, "'):containsi('");

        $.extend($.expr[':'], {'containsi': function(elem,i, match,array){
            return (elem.textContent || elem.innerText || '').toLowerCase(). indexOf ((match[3] ).toLowerCase()) >= 0;      
                      }
                  }
                   );
                
        $(".results tbody tr").not(":containsi('" + SplitSearchItem + "')").each(function(e){
            $(this).attr('visible','false');
        });

        $(".results tbody tr:containsi('" + SplitSearchItem + "')").each(function(e){
            $(this).attr('visible','true');
          });



        var jobCount = $('.results tbody tr[visible="true"]').length;
        
        if(jobCount == '0') {$('.no-result').show();}
          else {$('.no-result').hide();}

    //     if(x== 1) {$('.no-result').show();
    //     alert(SplitSearchItem);
    //     x=x+1;
    // }
    //         else {$('.no-result').hide();
    //         x=x-1;
    //         alert(SplitSearchItem);
    //     }  
    });
});