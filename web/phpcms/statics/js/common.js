
    $(document).ready(function(event) {
       
        //应用设备
        var tit2_li=$(".pro_application .type li");
        var con2_li=$(".pro_application .type_info_ul>li");
        tit2_li.hover(function(){

            var _index=$(this).index();
            $(this).addClass("active").siblings().removeClass("active");
            con2_li.eq(_index).addClass("active").siblings().removeClass("active");
            
        },function(){

        });

        //新闻
        var tit3_li=$(".news_list .list_tit  li");
        var con3_li=$(".news_list .con  li");
        tit3_li.hover(function(){

            var _index=$(this).index();
            $(this).addClass("active").siblings().removeClass("active");
            con3_li.eq(_index).addClass("active").siblings().removeClass("active");
            
        },function(){

        });



    });