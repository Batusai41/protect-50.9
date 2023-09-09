
var ims = "a";
var sm =document.querySelector('#isubmit').onclick = function(e){
    ims = e.target.src;
    console.log('ims=' + ' ' + ims);
    localStorage.setItem('pic', e.target.src);
}  