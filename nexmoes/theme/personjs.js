var documentWidth=window.screen.availWidth;
var documentHeight=window.screen.availHeight;
if(documentWidth>documentHeight){
    document.getElementsByTagName("body")[0].setAttribute("style","background-size:100% auto")
}else{
    document.getElementsByTagName("body")[0].setAttribute("style","background-size:auto 100%")
}

function CopyUrl(){
    var url=document.getElementById("url").getAttribute('copy-url');
    var textarea =document.createElement('textarea');
    document.body.appendChild(textarea)
    textarea.value=url
    textarea.select();
    document.execCommand("Copy"); 
    document.body.removeChild(textarea)
}