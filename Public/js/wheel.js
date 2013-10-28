jQuery.fn.extend({
    wheel1:function  (leftbclass,rightbclass,num) {
        var imgnum=$(this).find("li").length;
        var imgwidth=$(this).find("li").outerWidth();
        $(this).css("width",imgnum*imgwidth+100);
        var that=$(this);
        var num=num
        var flag=true;
        $("."+leftbclass).click(function  () {
            var index=that.position().left/imgwidth+1;
            if(that.position().left==0) return;
            if(!flag)return;
            flag=false;
            that.animate({
                left:(index+num-1)*imgwidth
            },1000,function  () {
                flag=true;
            });
        })

        $("."+rightbclass).click(function  () {
            var index=that.position().left/imgwidth-1;
            if(-(that.position().left)>=(imgnum-num)*imgwidth) return;
            if(!flag)return;
            flag=false;
            that.animate({
                left:(index-num+1)*imgwidth
            },1000,function() {
                flag=true;
            });
        })
    }
});