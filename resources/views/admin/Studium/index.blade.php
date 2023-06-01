<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body{

  background-image: url(images/1.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

.slidecontainer {

    max-width: 51%;
    margin-right: 40vh;/* Width of the outside container */
  }

  /* The slider itself */
  .slider {
    -webkit-appearance: none;  /* Override default CSS styles */
    appearance: none;
    width: 60%; /* Full-width */
    height: 20px; /* Specified height */
    background: #d3d3d3; /* Grey background */
    outline: none; /* Remove outline */
    opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
    -webkit-transition: .2s; /* 0.2 seconds transition on hover */
    transition: opacity .2s;
    margin-bottom: 5vh;
  }

  /* Mouse-over effects */
  .slider:hover {
    opacity: 1; /* Fully shown on mouse-over */
  }

  /* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
  .slider::-webkit-slider-thumb {
    -webkit-appearance: none; /* Override default look */
    appearance: none;
    width: 20px; /* Set a specific slider handle width */
    height: 20px; /* Slider handle height */
    background: rgb(40, 40, 40); /* Green background */
    cursor: pointer; /* Cursor on hover */
  }

  .slider::-moz-range-thumb {
    width: 25px; /* Set a specific slider handle width */
    height: 25px; /* Slider handle height */
    background: rgb(40, 40, 40); /* Green background */
    cursor: pointer; /* Cursor on hover */
  }
  nav {
	background-color: white;
	height: 40px;
}
ul {
	margin: 0;
	padding: 0;
	list-style: none;
	display: flex;
	justify-content: right;
	align-items: right;
	height: 100%;
margin-top: -1vh;}
a{
  color: rgb(36, 102, 168);
  font-size: 20px;
}
a:hover{
  color:rgb(141, 226, 21);
}
li {
	margin: 0 10px;
margin-top: 1%;
padding: auto;
}
label{
color: rgb(216, 169, 38);
margin-left: 70vh;
}
.h1{
  border: 3px solid black;
}
#myDiv {
  width: 80%;
  height: 100%;

  margin: auto;
}

table {

  width: 100%;
  height: 100%;

}

td {
  text-align: center;
  border:10px solid rgb(45, 45, 45);
}
</style>
    <title>صفحة الصور</title>
</head>
<body>
  <!--section haeder-->
  <section>
  <header>
  <nav>
    <ul>
        <li><b><a href="{{ route('index') }}">الصفحة الرئيسية</a></b></li>
        <li><b><a href="{{ route('studium.index') }}">جميع الملاعب</a></b></li>
        <li><b><a href="{{ route('studium.create') }}">اضافة ملعب</a></b></li>
        <li><b><a href="{{ route('admin.user') }}"> الموافقة على صاحب نادي </a></b></li>
        @if(Auth::guard('admin')->check())
        <li class="nav-item" style="margin-top: 1vh;">
            <select style="background-color: rgb(49, 151, 124); border-radius: 1vh; height:4vh;margin-top: 18%;" onchange="if (this.value) window.location.href=this.value;">
                <option>{{ auth()->guard('admin')->user()->name }}</option>
                <option value="{{ route('logout') }}">
                    Logout
                </option>
            </select>
        </li>
    @else
        <li><b><a href="{{ route('dashboard') }}">تسجيل الدخول</a></b></li>
    @endif
    <li style="float: left; margin-right: auto;"><img src="{{ asset('siteasset/images/logo.png') }}" alt="" style="width: 12vh; height: 11vh; margin-top: -3vh;"></li>
  </ul>
  <hr class="hr">
  </nav>
  </header>
</section>
<div><br><br>
    <!--section الصور -->
<section>
    <div class="container4" style="width: 100%; margin: 0 auto;">
        <div class="row">
          <div class="col">
        <b><i>   <h1 style="text-align: center; color: black;">معرض الصور</h1></i></b>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <b><i> <h1 style="text-align: center; color: red;" >...استكشاف "الملاعب" الآن</h1></i></b>
          </div>
        </div ><br><br>
      <!-- Carousel -->
      <div id="myDiv">
        <table>


              <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($studia as $studium)

                <div class="col">
                  <div class="card h-100">
                    <a href="{{ route('studium.edit', $studium->id) }}" >
                        <img src="{{ asset('uploads/'.$studium->image)}}" class="card-img-top" alt="...">
                    </a>                    <div class="card-body">
                      <h3 class="card-title">{{ $studium->name }}</h3>
                      <p class="card-text"><h4>السعر :&nbsp;&nbsp; {{ $studium->price }} {{ $studium->duration }}</h4></p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            {{-- @endforeach --}}


        </table>
      </div>

    <br>
      <br><br><br>

</div>
</section>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
