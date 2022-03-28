function my_proverka () {
var code = document.getElementById("my_pass").value;
var pass = "1234";
var login = document.getElementById("login").value;
var login = "barna";
if (code == pass) {

var win = document.getElementById("openModal");
win.classList.add("close");
   window.location.href = "portfolio.php";
}
else {
   alert("Неверный логин или пароль!")
}
}

let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   header.classList.toggle('active');
   document.body.classList.toggle('active');
}

window.onscroll = () =>{
   if(window.innerWidth < 991){
      menu.classList.remove('fa-times');
      header.classList.remove('active');
      document.body.classList.remove('active');
   }

   document.querySelectorAll('section').forEach(sec =>{

      let top = window.scrollY;
      let offset = sec.offsetTop - 150;
      let height = sec.offsetHeight;
      let id = sec.getAttribute('id');

      if(top >= offset && top < offset + height){
         document.querySelectorAll('.header .navbar a').forEach(links =>{
            links.classList.remove('active');
            document.querySelector('.header .navbar a[href*='+ id +']').classList.add('active')
         });
      };

   });

}