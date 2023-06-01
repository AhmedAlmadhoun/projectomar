<!DOCTYPE html>
<html dir="rtl">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>صفحة الحجز</title>
<style>
body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
    }
nav {
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
	color: rgb(36, 102, 168);
	text-decoration:  none ;
	padding: 0 10px;
	height: 30%;
	font-size: 20px;
	line-height: 0px;
}
a:hover {
	color:rgb(73, 227, 204);
}
.a1:hover{
	text-decoration:  none ;

}
</style>
</head>
<body>
<!--section header-->
  <section>
    <header><nav>
        <ul>
          <li><b><a href="index.html">الصفحة الرئيسية</a></b></li>
          <li><b><a href="photo.html">الصور</a></b></li>
          <li><b><a href="advantages.html">المميزات</a></b></li>
          <li><b><a href="connectus.html">تواصل معنا</a></b></li>
          @auth
            <li class="nav-item" style="margin-top: 1vh;">
                <select style="background-color: rgb(49, 151, 124); border-radius: 1vh; height:4vh;" onchange="if (this.value) window.location.href=this.value;">
                    <option>{{ Auth::user()->name }}</option>
                    <option value="{{ route('logout') }}">
                        Logout
                    </option>
                </select>
            </li>
        @else
        <li><b><a href="{{ route('dashboard') }}"> تسجيل الدخول</a></b></li>

        @endauth
        <li><b><a href="reservation.html">مواعيد الملاعب</a></b></li>
        <li style="float: left; margin-right: auto;"><img src="images/logo.png" alt="" style="width: 11vh; height: 11vh; margin-top: -5vh;"></li>
        </ul>
      </nav>
    </header>
  </section>
<!-- section صفحة الحجز-->
<Section>
<div class="container" style=" margin-top: 15vh;" >
  <div class="row" style="text-align: center;">
    <div class="col-md-6 offset-md-3">
      <form>
        <div class="form-group">
            <select class="form-control" style="width: 200%; height: 8vh; border-radius: 1vh;" name="studium_id">
                @foreach ($revs as $rev )
                <option  {{ $rev->studium_id == $rev->id ? 'selected' : '' }}  value="{{ $rev->studium->id }}">{{ $rev->studium->name }}</option>
            @endforeach

            {{-- {{ $studiu->studium_id == $rev->studiu->id ? 'selected' : '' }} --}}
              </select>
        </div><br>
        <div class="form-group">
            <select class="form-control" style="width: 200%; height: 8vh; border-radius: 1vh;" name="day" >
                <option value="">اختر اليوم</option>
                <option value="السبت">السبت</option>
                <option value="الاحد">الاحد</option>
                <option value="الاثنين"> الاثنين</option>
                <option value="الثلاثاء"> الثلاثاء</option>
                <option value="الاربعاء"> الاربعاء</option>
                <option value="الخميس"> الخميس</option>
              </select>
        </div><br>

          <div class="form-group" >
          <input name="date" type="date" id="date" class="form-control" lang="en" style="width: 200%; height: 8vh; border-radius: 1vh;">
          </div><br>
          <div class="form-group" >
          <input name="time" type="time" id="time" class="form-control" lang="en" style="width: 200%; height: 8vh; border-radius: 1vh;">
          </div><br>
      </form>
     <a href="#" class="a1"> <button type="submit" class="btn btn-primary" style="width: 30vh; height: 7vh; border-radius: 1vh;">إرسال</button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </a>
    </div>
  </div>
</div>
</Section>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
