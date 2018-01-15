$(function(){
    var pageInfo = {
        page:1,
        pageSize:6,
        total:0
    };

    $.ajax({
        url: '/static/json/news.js',
        dataType: 'json',
        success: function(data) {
            pageInfo.total = data.infos.length;
            console.log(data);
            console.log(pageInfo.total);
            var html = template('news-main', data);
            document.getElementById('content').innerHTML = html;

            $(".news-item").on("click",function(){
                var index = pageInfo.total - 1 - $(".news-item").index(this) + (pageInfo.page-1)*pageInfo.pageSize;
                console.log(index);
                $(location).attr('href', '/view/news-detail.html?id='+index);
            })
        },
        statusCode: {
            404: function() {
                alert("没有找到相关文件~~");
            }
        }
    });
})
