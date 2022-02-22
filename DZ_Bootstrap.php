<!DOCTYPE html> 
        <html lang="ru"> 
            <head> 
                <meta charset="utf-8"> 
                <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
                <meta name="viewport" content="width=device-width, initial-scale=1"> 
                 <title>HomeWork Bootstrap</title> 
            <!-- Bootstrap --> 
            <link href="style/bootstrap.css" rel="stylesheet"> 
            <link href="style/style.css" rel="stylesheet"> 
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media 
            queries --> 
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
            <!--[if lt IE 9]> 
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> 
            <![endif]--> 
                    <style> 
                    .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .colmd-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 
                    { 
                    border:1px solid #ccc; 
                    height:60px; 
                    text-align:center; 
                    } 
                    </style> 
            </head> 
<body> 
    <div class="container "> 
            <!-- 1 строка логоти название сайта контакты ---> 
            <div class="row"> 
                <div class=" col-md-3  q">Логотип</div> 
                <div class=" col-md-6 w ">Название сайта</div> 
                <div class=" col-md-3  q">Контакты</div> 
            </div> 
            <!-- 2 строка фото -->
            <div class="row"> 
               
                <div class=" col-md-12 foto d-flex justify-content-center align-items-center" style="height: 200px;"><h1>Фото<h1></div> 
                
            </div> 
            <!-- 3 строка товары---> 
            <div class="row my-3 "> 
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 w d-flex justify-content-center align-items-center ">Товары</div> 
                 
            </div>
            <!-- 4 строка ---> 
            <div class="row  "> 
                <div class=" col-md-2  offset-3 c " style="height: 150px;"></div> 
                <div class=" col-md-2 offset-2 c " style="height: 150px;"></div> 
                
            </div> 

            <!-- 5 строка ---> 
            <div class="row my-3 "> 
                <div class=" col-md-2 w" style="height: 150px;"></div> 
                <div class=" col-md-2 offset-1 w " style="height: 150px;"></div> 
                <div class=" col-md-2 offset-2 w" style="height: 150px;"></div> 
                <div class=" col-md-2 offset-1  w" style="height: 150px;"></div> 
            </div> 

             <!-- 6 строка футер---> 
             <div class="row my-5"> 
                <div class="col-md-12 fu "style="height: 30px;">Футер</div> 
                 
            </div>
</div> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="bootstrap/js/bootstrap.js"></script> 
</body> 
</html>