/**
 * Created by user on 2017/11/10.
 */
var BrowserDetect = {
    init:function(){
        var Sys = {};
        var ua = navigator.userAgent.toLowerCase();
        var s;
        (s = ua.match(/rv:([\d.]+)\) like gecko/)) ? Sys.ie = s[1].substring(0, s[1].indexOf('.')) :
        (s = ua.match(/msie ([\d.]+)/)) ? Sys.ie = s[1].substring(0, s[1].indexOf('.')) :
        (s = ua.match(/firefox\/([\d.]+)/)) ? Sys.firefox = s[1].substring(0, s[1].indexOf('.')) :
        (s = ua.match(/chrome\/([\d.]+)/)) ? Sys.chrome = s[1].substring(0, s[1].indexOf('.')) :
        (s = ua.match(/opera.([\d.]+)/)) ? Sys.opera = s[1].substring(0, s[1].indexOf('.')) :
        (s = ua.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1].substring(0, s[1].indexOf('.')) : 0;
        
        if(!((Sys.ie&&Sys.ie>=9)||(Sys.firefox&&Sys.firefox>=35)||(Sys.chrome&&Sys.chrome>=30)||(Sys.opera&&Sys.opera>=28)||(Sys.safari&&Sys.safari>=8))){
            return false;
        }else{
            return true;
        }
    }
};
// 判断版本
if(!BrowserDetect.init()){//不满足版本
    window.location.href = "/view/browserDetectModal.html";
};