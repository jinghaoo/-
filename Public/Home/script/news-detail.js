$(function() {
    var id = getUrlParam("id");
    var message;
    console.log(id);
    $.ajax({
        url: '/static/json/news-detail'+ id +'.js',
        dataType: 'json',
        success: function(data) {
            console.log("aa");
            var html = template('news-main', data);
            document.getElementById('content').innerHTML = html;
            $(".pre").on("click",function(){
                if(data.pre.id !== undefined){
                    $(location).attr('href', '/view/news-detail.html?id='+data.pre.id);
                }
            })
            $(".next").on("click",function(){
                if(data.nxt.id !== undefined){
                    $(location).attr('href', '/view/news-detail.html?id='+data.nxt.id);
                }
            })
        },
        statusCode: {
            404: function() {
                alert("没有找到相关文件~~");
            }
        }
    });
});
