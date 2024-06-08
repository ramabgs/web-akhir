<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jersi Pedia</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    body,
    html {
        height: 100%;
        font-family: Arial, sans-serif;
        background-color: #ffff;

    }

    .container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        height: 100%;
        margin-left: 50px;
        gap: 20px;
    }

    .container img {
        width: 30%;
        left: 10%;
    }

    .btn1 {
        padding: 15px 35px;
        background-color: #696969;
        border-radius: 30px;
    }
    .btnn{
        position: absolute;
        display: flex;
        gap: 20px;
        left: 20%;
        top: 70%;
    }
    
    .btn1 a{
        text-decoration: none;
        font-size: 1.5vw;
        color: #4B0909;
        font-weight: 700;
    }
    .txt{
        font-size: 3.5vw;
        width: 30%;
        margin-top: 20px;
        line-height: 60px;
        font-weight: 500;
    }
    

</style>

<body>
    @include('shared.header')
    <h4 class="mt-5">Macam-Macam Jersey</h4>
    <div class="col-md-16 d-flex flex-wrap gap-10 mb-2">
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/juve.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Juventus </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/liverpool.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Liverpool </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/mu.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Manchester United </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/munchen.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Munchen </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/leicester.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Leicester </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/dortmund.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Dortmund </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/madrid.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Madrid </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/acmilan.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey AC Milan </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/lazio.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Lazio </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/tottenham.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Tottenham </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/ajax.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Ajax </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/nasr.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Al-Nasr </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/brenford.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Brentford </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/persebaya.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Jersey Persebaya </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
     </div>
</html>


{{ $posts->links() }}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>