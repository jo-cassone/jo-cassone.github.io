var largo = window.screen.height;
var ancho = window.screen.width;
var colorDepth = window.screen.colorDepth;
var pixelDepth = window.screen.pixelDepth;
var availHeight = window.screen.availHeight;
var availWidth = window.screen.availWidth;
var version = navigator.appVersion;
var name = navigator.appName;
var lang = navigator.language;
var code = navigator.appCodeName
var platform = navigator.platform;

function BOMNavigator(){
    document.getElementById('version').innerHTML = version;
    document.getElementById('appName').innerHTML = name;
    document.getElementById('language').innerHTML = lang;
    document.getElementById('code').innerHTML = code;
    document.getElementById('platform').innerHTML = platform;
}

document.getElementById('body').onload = function(){
    BOMNavigator();

}

function a(){
    window.print();
}
