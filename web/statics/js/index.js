(function($) {
        $.fn.fadeImages = function(options) {
            var opt = $.extend({
                time: 1500, //动画间隔时间
                fade: 1000, //淡入淡出的动画时间
                dots: true //是否启用图片按钮
            }, options);
            var t = parseInt(opt.time),
                f = parseInt(opt.fade),
                d = opt.dots,
                i = 0,
                j = 0,
                k, l, m, set;
            m = $(this).find("ul li");
            l = m.length;
            console.log(d);
            if (d) {
                $(this).append("<ol id='dots'></ol>");
                for (j = 0; j < l; j++) {
                    $(this).find("ol").append("<li>" + (j + 1) + "</li>");
                };
                $(this).find("ol li").eq(0).addClass("active");
            }
            //初始化
            m.hide().eq(0).css("z-index", 2).fadeIn(f);
            //图片切换函数
            function show(i) {
                m.eq(i).css("z-index", 2).fadeIn(f).siblings().css("z-index", 1).fadeOut(f);
            }
            //逗点切换函数
            function dots(i) {
                $("ol#dots li").eq(i).addClass("active").siblings().removeClass();
            }
            //图片自动播放函数
            function play() {
                if (i++ < l - 1) {
                    set = setTimeout(function() {
                        show(i);
                        dots(i);
                        play();
                    }, t + f)
                } else {
                    i = -1;
                    play();
                }
            }
            play();
            //鼠标经过停止与播放
            m.hover(function() {
                clearTimeout(set);
                k = i;
            }, function() {
                i = k - 1;
                play();
            })
            //点击下方逗点控制动画
            if (d) {
                $(this).on("click", "ol#dots li", function() {
                    i = $(this).index();
                    dots(i)
                    show(i);
                })
            }
            return this;
        }
    }(jQuery));

    $(document).ready(function(event) {
        //首页banner
        $(".slide").fadeImages();

        //首页新闻资讯
        var tit1_li=$(".idx_part3 .tit li");
        var con1_li=$(".idx_part3 .con li");
        tit1_li.hover(function(){

            var _index=$(this).index();
            $(this).addClass("active").siblings().removeClass("active");
            con1_li.eq(_index).addClass("active").siblings().removeClass("active");

        },function(){

        });


    });