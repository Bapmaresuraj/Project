
// for text cheanging
// var typed =new Typed(".input",{
//     strings:["Music Event","Birthday Event","Wedding Event","Festival Event"," Pre Marriage"],
//     typeSpeed:79,
//     backSpeed:60,
//     loop:true
//   });
  

let menulinks =document.getElementById("menu-links");

menulinks.style.maxHeight="0px";
function toggelmenu(){
if(menulinks.style.maxHeight=="0px"){
  menulinks.style.maxHeight="100px";
}else{
  menulinks.style.maxHeight="0px";
}
}
