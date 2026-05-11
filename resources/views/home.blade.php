<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="images/icon.ico">

<!--META TAGS-->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cairo:wght@200;300;400;600&family=Pacifico&family=Signika+Negative:wght@700&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lora:wght@400;500&display=swap" rel="stylesheet"> 

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<style>


html {
  scroll-behavior: smooth;
}
:root{
  scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
  scrollbar-width: thin !important;
}
::-webkit-scrollbar {
  height: 12px;
  width: 8px;
  background: #000;
}
::-webkit-scrollbar-thumb {
  background: gray;
  -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
}
::-webkit-scrollbar-corner {
  background: #000;
}










/*DEFAULT*/
body {
  width: 100%;
  margin:0;
  overflow-x: hidden;
  font-family: 'Cairo', sans-serif;
}

a,li,button,input,textarea {
  text-decoration:none;
  transition: 0.5s;
  list-style: none;
  outline: none !important;
}

button::-moz-focus-inner,a::-moz-focus-inner,input::-moz-focus-inner,textarea::-moz-focus-inner {
  border: 0;
}

.btn1 {
  background-color: #e39831;
  text-align: center;
  color: #fff;
  padding: 15px 30px;
  border: 0;
  border-radius: 5px;
}

.btn1:hover {
  background: #000;
  box-shadow: 0px 6px 16px -6px rgba(1,1,1,0.5);
}

.btn2 {
  background-color: #e39831;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  border:0;
  z-index:111;
  display:block;
  width:150px;
  margin:2vh 0;
  border-radius:40px;
}

.btn2:hover {
  background-color: #000000;
  box-shadow: 0px 6px 16px -6px rgba(1,1,1,0.5);
}

.title{
  font-family: 'Signika Negative', sans-serif;
  font-weight:900;
}

.sub-title{
  font-weight:400;
}

.dark-title{
  font-family: 'Bebas Neue', cursive;
}

p{
  line-height:1.8em;
  letter-spacing:0.08em;
}

table{
  width:100%;
  border-collapse:collapse;
}

table td{
  position:relative;
  vertical-align:top;
}

.sections{
  position:relative;
  margin:10vh auto;
}

.title_header{
  width:50%;
  margin:10vh auto;
  text-align:center;
}

.title_header h1{
  font-family: 'Berkshire Swash', cursive;
  font-size:2em;
  font-weight:900;
  position:relative;
  top:15px;
  display:block;
}

.title_header h5{
  color:rgb(0, 0, 0);
  font-size:1.2em;
  line-height:1.4em;
}

.title-2{
  font-family: 'Berkshire Swash', cursive;
  letter-spacing:0.08em;
  line-height:1.4em;
  color: #e39831;
}


.btn3{
  background:#e39831;
  border:1px solid #937404;
  margin:auto;
  display:block;
  width:200px;
  color: #ffffff;
  text-align:center;
  padding:20px;
  border-radius:5px;
  margin-top: 40px;
}

.btn3:hover{
  background: #000000;
  color:#ffffff;
}


@media (max-width:820px){
  .title_header{
    width:90%;
  }
  .title_header h1{
    font-size:1.6em;
  }
  .title_header h5{
    font-size:1.1em;
  }
}






/*ANIMATION*/
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
.inline-photo {
  opacity: 0;
  transform: translateY(4em) rotateZ(-0deg);
  transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
  will-change: transform, opacity;
}
.inline-photo.is-visible {
  opacity: 1;
  transform: rotateZ(-0deg);
}
.inline-photo2 {
  opacity: 0;
  transform: translateX(-15em) rotateZ(-0deg);
  transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
  will-change: transform, opacity;
}
.inline-photo2.is-visible2 {
  opacity: 1;
  transform: rotateZ(-0deg);
}
.inline-photo3 {
  opacity: 0;
  transform: translateX(15em) rotateZ(-0deg);
  transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
  will-change: transform, opacity;
}
.inline-photo3.is-visible3 {
  opacity: 1;
  transform: rotateZ(-0deg);
}
@-webkit-keyframes fadeInFromNone {
  0% {
    display: none;
    opacity: 0;
  }

  1% {
    display: block;
    opacity: 0;
  }

  100% {
    display: block;
    opacity: 1;
  }
}

@-moz-keyframes fadeInFromNone {
  0% {
    display: none;
    opacity: 0;
  }

  1% {
    display: block;
    opacity: 0;
  }

  100% {
    display: block;
    opacity: 1;
  }
}

@-o-keyframes fadeInFromNone {
  0% {
    display: none;
    opacity: 0;
  }

  1% {
    display: block;
    opacity: 0;
  }

  100% {
    display: block;
    opacity: 1;
  }
}

@keyframes fadeInFromNone {
  0% {
    display: none;
    opacity: 0;
  }

  1% {
    display: block;
    opacity: 0;
  }

  100% {
    display: block;
    opacity: 1;
  }
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}















/*TOP NAVIGATION*/
header{
  position:fixed;
  top:0;
  width:100%;
  z-index:9999;
  
}

.topnav {
  overflow: hidden;
  background-color:#fff;
  width:100%;
  height:80px;
  margin:0; 
  box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
  transition:none;
  font-family: 'Cairo', sans-serif;
}

.topnav a {
  float: left;
  display: block;
  color: #8c6239;
  text-align: center;
  padding: 24px 16px;
  margin:auto 1rem;
  text-decoration: none;
  font-size: 17px;
  position:relative;
}
.topnav a:hover{
color: #e39831;

}

.logo{
 width: 103px;
    height: 79px;
  position:absolute;
  top:0.2rem;
  border-radius:0px;
}

#icon{
  float:right;
}

#active{
  display:flex;
  font-weight:bold;
  width:100px;
  font-family: 'Pacifico', cursive;
}

#active:hover{
  color:#fff;
}
/* 
.topnav .active{
  color:#000000;
} */

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: #8c6239;
  padding: 24px 16px;
  background-color: inherit;
  font-family: inherit;
  margin:auto 1rem;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-top:2px solid #ec4613;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 8px 16px;
  margin:auto 0rem;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  color: #000000;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: rgb(0, 0, 0);
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 920px) {
  .logo{
    height:40px;
    width:100px;
    position:static;
  }
  .topnav{
    height:auto;
  }
  .topnav a {
    float: left;
    display: block;
    color: #8c6239;
    text-align: center;
    padding: 14px 16px;
  }
  .dropdown .dropbtn {
    padding: 14px 16px;
  }
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
  #active{
    display:none;
  }
}

@media screen and (max-width: 920px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    padding: 6px 16px;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}


    .container{
  overflow:hidden;
  width:100%;
  height:100vh;
  position:relative;
  background-image:url("./Screenshot\ 2026-03-29\ at\ 14.19.20.png");
  background-size:cover;
  background-attachment:fixed;
}

.container section{
  width:40%;
  position:absolute;
  top:20vh;
  right:2vw;
}

.container section .title-2{
  font-size:3em;
  position:relative;
  top:20px;
}

.container section .sub-title{
  font-size:1.1em;
      color: #fff;
}

.container img{
  position:absolute;
  bottom:0px;
  width:100%;
  height:50px;
}

@media (max-width:820px){
  .container{
    height:90vh;
    background-attachment:local;
  }

  .container section{
    position:absolute;
    width:90%;
    left:1vw;
    margin:auto;
  }

  .container section .title-2{
    font-size:1.6em;
  }

  .container section .sub-title{
    font-size:1.1em;
  }
}

/*SECTION1*/
.section1{
  width:95%;
  margin:auto;
  display:flex;
}

.section1 section{
  width:50%;
  margin:0 20px;
}

.section1 img{
  width:90%;
  height:70vh;
}

.section1 p{
  line-height:2em;
}

@media (max-width:820px){
  .section1{
    display:block;
  }

  .section1 section{
    width:100%;
    margin:0px;
    padding:10px;
  }

  .section1 img{
    width:95%;
  }
}







/*SECTION2*/
.section2{
  margin:10vh 0;
}
.Cards{
  width:100%;
  display:flex;
  align-items:center;
  justify-content:center;
  display:flex;
}

.product_card{
  width:250px;
  height:360px;
  position:relative;
  margin:20px;
  text-align:center;
}

.product_card img{
  width:100%;
  height:60%;
}

.product_card ul{
  width:10%;
  position:absolute;
  top:10px;
  left:-20px;
  z-index:1;
}

.product_card .views{
  position:absolute;
  top:0;
  right:0;
  color:#fff;
  padding:5px 20px;
  background:#FF324D;
  font-size:11px;
  font-weight:900;
}

.product_card section{
  padding:10px;
}

.product_card section .price{
  color:#FF324D;
  padding:0 10px;
  margin-right:10px;
}

.product_card section strike{
  color:gray;
  padding:0 5px;
}

.product_card section .discount{
  color:green;
  padding:0 5px;
}

.product_card section .fa-star{
  color:gray;
}

.product_card section .checked {
  color: orange;
}

.product_card section .rating{
  color:rgba(1,1,1,0.5);
}

.product_icons{
  display:none;
}

.product_card ul li{
  list-style:none;
  padding:10px 5px;
  padding-left:0;
  color:#fff;
}

.product_card ul li i{
  background:#3399ff;
  border-radius:50%;
  padding:10px;
  height:15px;
  width:15px;
  text-align:center;
  transition:0.5s;
}

.product_card ul li i:hover{
  background:#000000;
  color:#fff;
}


.product_card:hover  > .product_icons{
  display:block;
}


/* ANIMATION */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}


@media (max-width:820px){
  .Cards{
    display:block;
  }
  .product_card{
    width:45%;
    display:inline-block;
    margin:10px;
  }
  .product_card .title-2{
    font-size:0.9em;
  }
  .product_card section .price{
    margin-right:3px; 
  }
  .product_card section{
    font-size:12px; 
  }
}










/*SECTION3*/
.section3{
  width:100%;
  padding:5vh 0;
  background:#62c3e7;
  background-image:url("https://i.ibb.co/kSBgyMd/section3.png");
  background-size:8% 100%;
  background-position:left;
  background-repeat:no-repeat;
}

.section3 .title-2{
  font-size:3em;
}

.section3 .sub-title{
  color:rgba(255,255,255,1);
  letter-spacing:0.08em;
  line-height:1.6em;
}

@media (max-width:820px){
  .section3{
    background-size:20% 100%;
  }
  .section3 .title-2{
    font-size:2em;
  }
  .section3 .sub-title{
    font-size:1em;
  }

}



/*FOOTER*/
.footer{
  background:#000;
  padding:30px 0px;
  font-family: 'Play', sans-serif;
  text-align:center;
  background-image:url("https://i.ibb.co/7Nwg5dK/footer.jpg");
  background-size:100% 100%;
}

.footer .row{
  width:100%;
  margin:1% 0%;
  padding:0.6% 0%;
  color:gray;
  font-size:0.8em;
}

.footer .row a{
  text-decoration:none;
  color:gray;
  transition:0.5s;
}

.footer .row a:hover{
  color:#fff;
}

.footer .row ul{
  width:100%;
}

.footer .row ul li{
  display:inline-block;
  margin:0px 30px;
}

.footer .row a i{
  font-size:2em;
  margin:0% 1%;
}

@media (max-width:720px){
  .footer{
    text-align:left;
    padding:5%;
  }
  .footer .row ul li{
    display:block;
    margin:10px 0px;
    text-align:left;
  }
  .footer .row a i{
    margin:0% 3%;
  }
}











.courses {
    padding: 60px 20px;
    text-align: center;
}

.courses h2 {
    font-size: 32px;
    margin-bottom: 40px;
}

/* GRID AUTO RESPONSIVE */
.card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    max-width: 1100px;
    margin: auto;
}

.card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    position: relative;
    transition: transform 0.3s;
}

.card:hover {
    transform: translateY(-8px);
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

/* Badge */
.tag {
    position: absolute;
    top: 15px;
    left: 15px;
    padding: 6px 14px;
    font-size: 12px;
    color: #fff;
    border-radius: 20px;
}

.beginner { background: #e39831; }
.popular { background: #9c27b0; }
.pro { background: #000; }

.content {
    padding: 20px;
}

.content h3 {
    font-size: 22px;
}

.subtitle {
    color: #777;
    margin-bottom: 15px;
}

.content ul {
    list-style: none;
    margin-bottom: 15px;
}

.content ul li {
    margin: 8px 0;
    font-size: 14px;
}

.price {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 15px;
}

.btn {
    display: inline-block;
    padding: 10px 25px;
    background: #e39831;
    color: #fff;
    border-radius: 25px;
    text-decoration: none;
}

/* MOBILE OPTIMIZATION */
@media (max-width: 480px) {
    .courses h2 {
        font-size: 26px;
    }

    .card img {
        height: 180px;
    }

    .price {
        font-size: 20px;
    }
}


</style>

<body>


<header id="header">
<div class="topnav" id="myTopnav">
<a href="#"><img class="logo" src="./logooo.png" alt=""></a>
<a id="active"></a>
<a href="/" class="active">HOME</a>
<a href="/feedback">Review</a>
<a href="/gallery">Gallery</a>
<a href="/blog">Blog</a>
<a href="/contact">CONTACT</a>
<a href="#">ABOUT</a>
<a href="#" style="float:right;padding: 24px 2px;"><i class="fa fa-search" class="openBtn" onclick="openSearch()"></i></a>
<a href="#" style="float:right;padding: 24px 2px;"><i class="fa fa-user-circle-o"></i></a>
<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
</div>
</header>

    <div class="container">
<section>
<h1 class="title-2">Welcome to Our Bakery Academy</h1>
<h5 class="sub-title">Build professional baking skills with hands-on practice and expert support.</h5>
<a href="#" class="btn1">CONTACT US</a>
</section>
<img src="https://i.ibb.co/t842sLk/shape.png">
</div>

<!--SECTION1-->
<div class="sections section1">
<section>
    <div data-aos="fade-right" data-aos-duration="3000">
<img src="./sectionimg1.jpg" alt="">
</div>
</section>
<section>
    <div data-aos="fade-left" data-aos-duration="3000">
<h1 class="title">Bake Your Passion</h1>
<p>We offer professional bakery training for beginners and future bakers who want to develop real, practical skills. Our programs are designed to provide a strong foundation in baking, covering essential techniques, hygiene standards, and modern bakery practices in a supportive learning environment. <br> Students learn through hands-on sessions, industry-standard techniques, and guidance from experienced instructors. With a strong focus on practical experience and confidence building, our training helps you confidently start your baking career or launch your own bakery business.</p>

<a href="#" class="btn2">CONTACT US</a>
</div>
</section>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>


<!--SECTION2-->
<div class="sections section2">
<div class="title_header">
<h1>Best Seller Products</h1>
<h5>We offer something different to local and foreign patrons and ensure you enjoy a memorable food experience every time.</h5>
</div>
<section class="Cards">
<!--CARD1-->
<div class="product_card">
<img src="https://i.ibb.co/BT0f2p7/cake-1.jpg" class="product_image" alt="PRODUCT">
<ul class="product_icons animate">
<!-- <li><i class="fa fa-shopping-cart"></i></li>
<li><i class="fa fa-share"></i></li>
<li><i class="fa fa-heart-o"></i></li> -->
</ul>
<span class="views">FRESH</span>
<section>
<h1 class="title-2">Dark Choco Slice</h1>
<span class="price">Rs70</span><strike>Rs90</strike><span class="discount">20% OFF</span>
</section>
</div>
<!--CARD1-->
<div class="product_card">
<img src="https://i.ibb.co/q9QyFRc/cake-2.jpg" class="product_image" alt="PRODUCT">
<ul class="product_icons animate">
<!-- <li><i class="fa fa-shopping-cart"></i></li>
<li><i class="fa fa-share"></i></li>
<li><i class="fa fa-heart-o"></i></li> -->
</ul>
<section>
<h1 class="title-2">Dark Choco Slice</h1>
<span class="price">Rs70</span><strike>Rs90</strike><span class="discount">20% OFF</span>
</section>
</div>
<!--CARD1-->
<div class="product_card">
<img src="https://i.ibb.co/YRJ5t4M/cake-3.jpg" class="product_image" alt="PRODUCT">
<ul class="product_icons animate">
<!-- <li><i class="fa fa-shopping-cart"></i></li>
<li><i class="fa fa-share"></i></li>
<li><i class="fa fa-heart-o"></i></li> -->
</ul>
<section>
<h1 class="title-2">Dark Choco Slice</h1>
<span class="price">Rs70</span><strike>Rs90</strike><span class="discount">20% OFF</span>
</section>
</div>
<!--CARD1-->
<div class="product_card">
<img src="https://i.ibb.co/PC8fZxT/cake-4.jpg" class="product_image" alt="PRODUCT">
<ul class="product_icons animate">
<!-- <li><i class="fa fa-shopping-cart"></i></li>
<li><i class="fa fa-share"></i></li>
<li><i class="fa fa-heart-o"></i></li> -->
</ul>
<section>
<h1 class="title-2">Dark Choco Slice</h1>
<span class="price">Rs70</span><strike>Rs90</strike><span class="discount">20% OFF</span>
</section>
</div>
</section>
<a href="#" class="btn3">VIEW PRODUCTS</a>
</div>


<section class="courses">
    <h2>Our Course Levels</h2>

    <div class="card-grid">

        <!-- Level 1 -->
        <div class="card">
            <span class="tag beginner">Best for Beginners</span>
            <img src="./cardimg1.jpg" alt="Beginner Cake">
            <div class="content">
                <h3>LEVEL 1</h3>
                <p class="subtitle">Beginner Course</p>
                <ul>
                    <li>For Beginners / No Experience</li>
                    <li>Eggless & Basic Cakes</li>
                    <li>Duration: 21 Days</li>
                </ul>
                <p class="price">Rs. 15,000</p>
                <a href="#" class="btn">Enroll Now</a>
            </div>
        </div>

        <!-- Level 2 -->
        <div class="card">
            <span class="tag popular">Most Popular</span>
            <img src="./cardimg2.jpg" alt="Intermediate Cake">
            <div class="content">
                <h3>LEVEL 2</h3>
                <p class="subtitle">Intermediate Course</p>
                <ul>
                    <li>For Level 1 Completed</li>
                    <li>Advanced Cakes & Pastries</li>
                    <li>Duration: 40 Days</li>
                </ul>
                <p class="price">Rs. 30,000</p>
                <a href="#" class="btn">Enroll Now</a>
            </div>
        </div>

        <!-- Level 3 -->
        <div class="card">
            <span class="tag pro">Professional</span>
            <img src="./cardimg3.jpg" alt="Professional Cake">
            <div class="content">
                <h3>LEVEL 3</h3>
                <p class="subtitle">Professional Course</p>
                <ul>
                    <li>For Professionals</li>
                    <li>Fondant & Wedding Cakes</li>
                    <li>Duration: 3 Months</li>
                </ul>
                <p class="price">Rs. 60,000</p>
                <a href="#" class="btn">Enroll Now</a>
            </div>
        </div>

    </div>
</section>



<div class="sections section1">
<section>
    <div data-aos="fade-right" data-aos-duration="3000">
<img src="./slideimg.jpg" alt="">
</div>
</section>
<section>
    <div data-aos="fade-left" data-aos-duration="3000">
<h1 class="title">Bake Your Passion</h1>
<p>The bakery field has a wide and growing scope. Trained bakers can work in hotels, restaurants, cafes, bakeries, and food industries. There is high demand for cakes, desserts, and special bakery items for events and celebrations.

Bakery training also helps in starting self-businesses like home bakeries, cake shops, and online bakery services. With good skills and creativity, bakery offers steady income and long-term career opportunities in Nepal and abroad.</p>

<a href="#" class="btn2">CONTACT US</a>
</div>
</section>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>




<!-- 
SECTION3-->
<!-- <section class="section3">
<div class="title_header">
<h1 class="title-2">Real Taste</h1>
<h5 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h5>
</div>
</section> -->




<!--FOOTER-->
<footer>
<div class="footer">
<div class="row">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-youtube"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
</div>

<div class="row">
<ul>
<li><a href="#">Contact us</a></li>
<li><a href="#">Our Services</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">Career</a></li>
</ul>
</div>

<div class="row">
Copyright © 2021 name - All rights reserved
</div>
</div>
</footer>





<!-- 
<script>
    function NavBar() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
} else {
x.className = "topnav";
}
}
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
document.getElementById("myTopnav").style.width = "100%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "0%";
document.getElementById("roll_back").style.display = "block";
} else {
document.getElementById("myTopnav").style.width = "80%";
document.getElementById("header").style.position = "fixed";
document.getElementById("header").style.top = "2rem";
document.getElementById("roll_back").style.display = "none";
}
}


</script> -->







</body>
</html>