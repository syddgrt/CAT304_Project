<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ReporTruzz!!!</title>

    <!-- Custom fonts for this template-->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="template/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.css" rel="stylesheet"> <!--- nanti kena tukaq jadi minified css .min.css--->

</head>

<div class="container">
        <div class="body d-md-flex align-items-center justify-content-between">
            <div class="box-1 mt-md-0 mt-5">
                <img src="https://i.ibb.co/4ttLyQz/32599dcedc23c0675a8229c0644bba81.jpg"
                    class="" alt="">
            </div>
            <div class=" box-2 d-flex flex-column h-100 align-items-center justify-content-between">
                <div class="mt-5">
                    <h1 class="logo me-auto me-lg-0 font-weight-bolder" style="color: black;"><a>ReporTruzz<span></span></a></h1>
                    <p class="text-muted mb-2">Resolve your problem now with us</p>
                    <div class="d-flex flex-column ">
                        <p class="text-muted mb-2 text-center">      Continue with...</p>
                        <div class="d-flex align-items-center">
                            
                            <a href="/login" class="box me-2 mx-auto">
                                <p class="mb-0 text-center">Let's Go</p>
                            </a>
                            
                        </div>
                        
                    </div>
                </div>
               
                   
                </div>
            </div>
           
        </div>
   




    <!-- Bootstrap core JavaScript-->
    <script src="template/vendor/jquery/jquery.min.js"></script>
    <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="template/js/sb-admin-2.min.js"></script>

</body>

</html>

<style>
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}
	
body {
  background: linear-gradient(to right, #000000, #363727, #344105, #000000, #363727, #344105);
  background-size: 200% 200%;
  animation: gradient 10s ease infinite;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}



.container {
    margin: 50px auto;
}

.body {
    position: relative;
    width: 720px;
    height: 440px;
    margin: 20px auto;
    border: 1px solid #dddd;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.box-1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.box-2 {
    padding: 10px;
}

.box-1,
.box-2 {
    width: 50%;
    background-color: aliceblue;
}

.h-1 {
    font-size: 24px;
    font-weight: 700;
}

.text-muted {
    font-size: 14px;
}

.container .box {
    width: 100px;
    height: 100px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 2px solid transparent;
    text-decoration: none;
    color: #615f5fdd;
      background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  border-radius: 50%;
}



.box:active{background-color: #3e8e41}
.box:visited {
    border: 3px solid #ee82ee;
}

.box:hover {
    background-color: #3e8e41;
  


}

.btn.btn-primary {
    background-color: transparent;
    color: #ee82ee;
    border: 0px;
    padding: 0px;
    font-size: 14px;
}

.btn.btn-primary .fas.fa-chevron-right {
    font-size: 12px;
}

.footer .p-color {
    color: #ee82ee;
}

.footer.text-muted {
    font-size: 10px;
}

.fas.fa-times {
    position: absolute;
    top: 20px;
    right: 20px;
    height: 20px;
    width: 20px;
    background-color: #f3cff379;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fas.fa-times:hover {
    color: #ff0000;
}

@media (max-width:767px) {
    body {
        padding: 10px;
        background-color: aliceblue;
    }

    .body {
        width: 100%;
        height: 100%;
        background-color: aliceblue;
    }

    .box-1 {
        width: 100%;
        background-color: aliceblue;
    }

    .box-2 {
        width: 100%;
        height: 440px;
        background-color: aliceblue;
    }
}

</style>