const bt1 = document.querySelector(".submit_1");
const bt2 = document.querySelector(".submit_2");
const bt3 = document.querySelector(".submit_3");
const bt4 = document.querySelector(".submit_4");
bt1.addEventListener('click', function () {
    console.log("helklo");
    document.querySelector(".sub_menu1").classList.toggle("sub_menu");

});
bt2.addEventListener('click', function () {
    
    console.log("helklo");
    document.querySelector(".sub_menu2").classList.toggle("sub_menu");
});
bt3.addEventListener('click', function () {
    
    console.log("helklo");
    document.querySelector(".sub_menu3").classList.toggle("sub_menu");
});
bt4.addEventListener('click', function () {
    
    console.log("helklo");
    document.querySelector(".sub_menu4").classList.toggle("sub_menu");
});