<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> صفحة عرض جميع الحجوزات للملعب   </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>
    body {
      display:block;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;

    }
  /*  nav {
	background-color: white;
	height: 50px;
}
ul {
	margin: 0;

	padding: 0;
	list-style: none;
	display: flex;
	justify-content: right;
	align-items: right;
	height: 100%;


}

li {
	margin: 0 10px;
	margin-top: 3vh;

}
a {
	display: block;
  color: rgb(60, 114, 190);
	text-decoration:  none ;
	padding: 0 10px;
	height: 30%;
	line-height: 0px;
}
a:hover {
	color:rgb(73, 227, 204);
}*/
.h1{
  width: 86%;
}
.custom-table {
      width: 100%;
      margin-bottom: 20px;
      font-size: 24px;
      text-align: center;
      background-color: green;
      color: white;
    }

    .radius-table {
      width: 100%;
      margin-bottom: 20px;
      text-align: right;
      background-color: gray;
      color: white;
      border-spacing: 0;
    }
    .cost-table {
      width: 100%;
      margin-bottom: 20px;
      text-align: right;
      background-color: rgb(205, 204, 204);
      color: white;
      border-spacing: 0;
    }

    .foot-table {
      width: 100%;
      margin-bottom: 20px;
      text-align: right;
      background-color: rgb(152, 152, 152);
      color: white;
      border-spacing: 0;
    }

    .root-table {
      width: 100%;
      margin-bottom: 20px;
      text-align: right;
      background-color: rgb(89, 89, 89);
      color: white;
      border-spacing: 0;
    }
    .seet-table {
      width: 100%;
      margin-bottom: 20px;
      text-align: right;
      background-color: gray;
      color: white;
      border-spacing: 0;
    }
    .half-table {
      width: 100%;
      margin-bottom: 20px;
      text-align: right;
      background-color: rgb(205, 204, 204);
      color: white;
      border-spacing: 0;
    }

</style>
</head>
<body>
<!--section header-->
<section>
<header>
  <nav class="navbar navbar-expand-lg navbar-primary"  >

    <div class="collapse navbar-collapse" style="margin-top: -3vh;" id="navbarNav">
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item" style="padding: 4px;">
         <b> <a class="nav-link" href="{{ route('index') }}">الصفحة الرئيسية</a></b>
        </li>
        <li class="nav-item" style="padding: 4px;">
          <b>   <a class="nav-link" href="{{ route('photo') }}">الصور</a></b>
        </li>
        <li class="nav-item" style="padding: 4px;">
          <b>   <a class="nav-link" href="{{ route('advantages') }}">المميزات</a></b>
        </li>

        <li class="nav-item" style="padding: 4px;">
          <b>   <a class="nav-link" href="{{ route('connectus') }}">تواصل معنا</a></b>
        </li>



        <li class="nav-item" style="padding: 4px;">
          <b><a class="nav-link" href="{{ route('reservations') }}">مواعيد الملاعب</a></b>
        </li>
        <li class="nav-item" style="padding: 4px;">
            <b>   <a class="nav-link" href="{{ route('dashboard') }}">{{ Auth::user()->name ?? 'تسجيل الدخول'}}</a></b>
          </li>
      </ul>
       <a class="navbar-brand" href="#">
      <img src="{{ asset('siteasset/images/logo.png') }}" alt="" style="width: 11vh; height: 11vh;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
  </nav>
</header>
</section><br><br>
<h1> صفحة الحجوزات </h1>
<br><!-- اضافة زر ارسال-->
<section>
<div class="form-group" id="name" style="direction: ltr; width: 86%;">
<div  style="display: flex; ">
{{-- <b> --}}
{{-- <input type="submit" onclick="goToPage2()" style="width: 180%; height: 120%; text-align: center; float: left; " class="btn btn-primary" value="ز">
</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}
    <a href="{{ route('photo') }}" class="btn btn-primary">اضافة حجز</a>
    </div>
</div>
</section>
<!-- صفحة الحجوزات ل صاحب الملعب-->
<section>
  <div class="container" style="border-radius: 2vh;">
    <table class="table custom-table" style="border-radius: 1vh;">
      <thead>
        <tr>
          <th style="text-align: right;"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  الساعة   </b></th>
          <th style="text-align: right;"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   اليوم   </b></th>
          <th style="text-align: right;"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   التاريخ   </b></th>
          <th style="text-align: right;"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  اسم الشخص </b></th>
          <th style="text-align: right;"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; القبول&nbsp;&nbsp;&nbsp;</b></th>
          <th style="text-align: right; "><b>  الرفض &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></th>
          <th style="text-align: right; "><b>  التعديل &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></th>

        </tr>
      </thead>
    </table>

    <div class="row" style="margin-top: -3vh;">
        <div class="col-md-12">

          <table class="table radius-table custom-table">
            <tbody>
                @foreach ($reservations as $reservation)
                <tr>
                    <td class="td1">  {{ date('h:i a', strtotime($reservation->time)) }}</td>
                    <td class="td1">  {{ $reservation->day }} </td>
                    <td class="td1">  {{ date('d/n', strtotime($reservation->date)) }}
                    </td>
                    <td class="td1"> {{ $reservation->name }}</td>
                    <td class="td1">
                        <div class="form-group">
                          <form method="POST" action="{{route('serve.update',[$reservation->id])}}">
                              @csrf
                          <button class="btn btn-success btn-lg btn-block" style="width: 90px;">قبول</button>
                      </form>
                        </div>
                      </td>
                      <td class="td1">
                        <div class="form-group">
                          <form method="POST" action="{{route('serve.delete',[$reservation->id])}}">
                              @csrf
                              @method('DELETE')
                          <button class="btn btn-danger btn-lg btn-block" style="width: 80px;" >رفض</button>
                      </form>

                        </div>
                      </td>
                      <td class="td1">
                        <div class="form-group">
                          <a href="{{route('change',[$reservation->id])}}" class="btn btn-primary btn-lg btn-block" style="width: 80px;">تعديل</a>
                        </div>
                      </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
        </div>
      </div>

</div>
</section>
<!--
<div class="form-group" >
    <input type="time" id="time" class="form-control" lang="en" >
    </div>
-->
</form>

<br><br>


</body>
</html>


