<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maa Electro</title>
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
    <h4 class="mt-5">Berbagai Macam Alat Elektronik</h4>
    <div class="col-md-16 d-flex flex-wrap gap-10 mb-2">
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/ac.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> AC </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/blender.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Blender </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/kalkulator.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Kalkulator </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/kamera.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Kamera </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/kipas.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Kipas Angin </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/kompor.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Kompor Listrik </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/kulkas.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Kulkas </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
               
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/laptop.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Laptop </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/mejikom.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Magic Com </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/mixer.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Mixer </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/oven.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Oven </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/radio.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Radio </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/sedot debu.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Vacum Cleaner </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
          <div class="card" style="width: 180px;">
               <div class="card-header m-auto" style="border-radius:10px;">
                    <img src="{{asset('assets/image/setrika.png')}}" style="width: 140px; height: 160px;">
               </div>
               <div class="card-body">
                    <p class="m-0 text-justify"> Setrika </p>
                    <p class="m-0"><i class="fa-solid fa-heart-circle-plus"></i></p>
               </div>
          </div>
     </div>
</html>


{{ $posts->links() }}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>