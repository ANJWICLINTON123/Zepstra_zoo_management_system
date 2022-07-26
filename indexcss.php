body{
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f4f4f4;
}

nav head footer{
    display: block;
}

body{
    line-height: 1;
    margin: 0;
}

 /* ################### column and rows ############### */
.row{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    text-align: center;
}

.row::after{
    display: table;
    clear: both;
    content: "";
}

.col-1{width: 8.33%;}
 
 .col-2{width: 16.66%;}
 
 .col-3{width: 25%;}
 .col-4{width: 33.33%;}
 
 .col-5{width: 41.66%;}
 
 .col-6{width: 50%;}
 
 .col-7{width: 58.33%;}
 
 .col-8{width: 66.33%;}
 
 .col-9{width: 75%;}
 
 .col-10{width: 83.33%;}
 
 .col-11{width: 91.66%;}
 
 .col-12{width: 100%;}

 *{
     box-sizing: border-box;
 }


/* ################### Manu image ############### */
 img.image_logo{
    width: 12%;
    margin-left: 15px;
    float: left;
    display: block;
    padding: 5px 0 5px 10px;
    margin-top: -20px;
    margin-bottom: -20px;
 }
 /* ################### manu button ############### */
button.Login_button{
    float: right;
    margin: 11px 8px 0 0;
    padding: 6px 8px 5px 8px;
    color:#fff;
    font-size: 12px;
    font-weight: 600;
    background-color: #045010;
    border-color:  #fff;
    border-radius: 5px;
}
button.Login_button:hover{
    background-color: #43ca5e;
}

nav ul{
    margin: 0;
    padding: 0;
    width: 100%;
   
    /* margin-top: 0%; */
    /* z-index: 0; */
}
ul .navbar-nav {
    position: sticky;
}
nav.navbar{
    background-color: #045f16;
    overflow: hidden;
    position: static;
    padding-top: -100px;
   
}
/* ################### hamberga ############### */
.open-side a.hamberga{
    font-size: 30px;
    display:none;
}

a.hamberga{
    text-decoration: none;
    color: white;
    display:block;
    
}

.navbar a{
    float: right;
    display: inline;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    margin-left: auto;
}

.navbar ul{
    margin: 8px 0 0 0 ;
    list-style: none;
    
}

.navbar a:hover{
    background-color: #ddd;
    color: black;
}
/*############## dropdowm manu#######################*/

/* ################### side manu ############### */
.side-nav{
    height: 100%;
    width: 0;
    position:fixed;
    z-index: 1;
    top:0;
    left:0; 
    background-color: #111;
    opacity: 0.9;
    overflow-x:hidden;
    padding-top: 60px;
    transition: 0.5s;
}

.side-nav a{
    padding: 10px 10px 10px 30px;
    text-decoration: none;
    font-size: 22px;
    color:#ccc;
    display: block;
    transition: 0.3s;
   
}

.side-nav a:hover{
    color:rgb(241, 206, 206);
}

 .side-nav .btn-close{
     position: absolute;
     top:0;
     right: 22px;
     font-size: 36px;
     margin-left: 50px;
 }

 /* ################# sidebarLogin_button ################## */
 button.sidebarLogin_button{
    float: right;
    margin: 11px 8px 0 0;
    padding: 10px 15px 10px 15px;
    color:#fff;
    font-size: 15px;
    font-weight: 600;
    background-color: #045010;
    border-color:  #045010;
    border-radius: 5px;
    margin-right: 60%;
 }
 /*############## background image #######################*/
div.background_image{
    background-image: url("image/bg1.jpg");
    background-repeat: no-repeat;
    background-size: cover; 
    padding-left: 10%;
    padding-right: 10%;
    padding-top: 40%;  
    padding: auto;
    bottom: 20px;
    background-position: center; 
    opacity: o.9;
}
 /*############## short text on background image #######################*/
span.text_on_image h1{
    color: #fff;
    font-weight: 700;
    font-size: 42px;
    margin-top: -400px;
}

span.text_on_image p{
    color: #fff;
    line-height: 30px;
    font-size: 20px;
   
}

div.body_homepage h1{
    font-weight: 700;
    font-size: 36px;
}
span.green{
    color: #07721c;
}

.body_homepage p{
    line-height:25px;
    margin-left: 26px;
}
button.gallery_button{
   margin-right: 75%;
   color: #fff;
   background-color: #045f16;
   padding: 10px;
   border-color: #045f16;
   border-radius: 7px;
}

img.zooimage{
    margin-top: 30px;
}
p.animal_description{
   text-align: left;
   line-height: 22px;
   
}

/*############## Our sponsors #######################*/
div.container_sponsors{
    background-color: #045f16;
    padding-top: 20px;
    margin-top: 20px;
}
h1.sponsors_header{
    color: #fff;
    text-align: center;
    line-height: 32px;
    font-weight: 900;
}

img.sponsors_image{
    margin-left: 100px;
}

div.divspons{
    text-align: center;
    color: #fff;
    margin-left:100px ;
}
.divspons p{
    margin-top: -4%;
    font-weight: lighter;
    color: #ccc;
    line-height: 20px;
}

img.mynabird{
    width: 100%; 
}
div.mynadetails{
    text-align: left;
    margin-top: 3%;
    margin-left: 6%;
}
b.description{
    line-height: 25px;
}


/*############## Zoo map #################*/
img.map{
    margin-right: 20%;
    width: 130%;
}
img.zoopic{
    width: 88%;
}
/*############## Footer #######################*/
footer.container_footer{
    margin-top: 90px;
    background-color: #ccc;
    padding-top: 10px;
}
.Our_footer a{
    color: #045f16;
}
.Our_footer h1{
    color: #045f16;
    margin-right: 6%;
}
.Our_footer p{
  line-height: 25px;
  margin-left: 11%;
  text-align: left;
}

.Our_footer1 a{
    color: #045f16;
}
.Our_footer1 h1{
    color: #045f16;
    margin-right: 35%;
}
.Our_footer1 h3{
    margin-right: 28%;
}

.Our_footer1 p{
  line-height: 20px;
  margin-left: 11%;
  text-align: left;
}
.arrange2 h1{
    margin-right: 35%;
}
.arrange1 p{
    margin-left: 18%;
}
.arrange3 h1{
    margin-right: 18%;
}

.info p{
    background-color: #045f16;
    color: #fff;
    font-size: 20px;
    text-align: center;
    padding: 10px;
}
/*############## modile view #######################*/

@media screen and (max-width: 680px) {
    .open-side a.hamberga{
        font-size: 30px;
        display: block;
    }
    .navbar-nav{display: none;}

img.image_logo{
    width: 23%;
    margin-left: 15px;
    float: left;
    display: block;
    padding: 5px 0 5px 10px;
    margin-top: -10px;

 }
     nav.navbar button{
        padding: 8px;
        font-size: 15px;
        width: 70px;
       margin-right: 10px;
       margin-top: 10px;
       margin-bottom: 10px;
    }
     .openside a.hamberga{
        margin-top: 12px;
     }

     span.text_on_image h1{
        color: #fff;
        font-weight: 600;
        font-size: 30px;
        margin-top: -170px;
    }
    
    span.text_on_image p{
        color: #fff;
        line-height: 20px;
        font-size: 15px;
 }

 /*#######body homepage#######################*/
 
 div.body_homepage{
    display:inline-block;
    margin: auto;
 }
 div.body_homepage h1{
    font-weight: 700;
    font-size: 28px;
}

.body_homepage p{
    line-height:20px;
    margin-left: 26px;
    text-align: center;
}
button.gallery_button{
  display: block;
  margin: auto;
}

/*#######  Our sponsors #######################*/
img.sponsors_image{
    margin:auto;
}

div.divspons{
    text-align: center;
    color: #fff;
    margin:auto;
}
.divspons p{
    margin-top: -4%;
    font-weight: lighter;
    color: #ccc;
    line-height: 23px;
}
img.mynabird{
    width: 100%; 
    margin-left: 20px;
}
/*############## Zoo map #################*/
img.zoopic{
    width: 150%;
}

/*############## Footer #######################*/
.Our_footer h1{
    font-size: 20px;
    margin-right: -4%;
}
.Our_footer p{
  line-height: 25px;
  margin-left: 10%;
  text-align: left;
}

.Our_footer1 h1{
    font-size: 20px;
    margin-right: 50%;
}
.Our_footer1 h3{
    margin-right: 30%;
}

.Our_footer1 p{
  line-height: 20px;
  margin-left: 11%;
  text-align: left;
}
.arrange1 h1{
    margin-right: 45%;
}
.arrange1 p{
    margin-left: 10%;
}
.arrange2 h1{
    margin-right: 40%;
}
.arrange3 h1{
    margin-right: 60%;
}
.arrange1 p{
    margin-left: 10%;
}
}