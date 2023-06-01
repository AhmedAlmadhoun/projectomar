<!DOCTYPE html>
<html dir="rtl">
<head>
  <title>صفحة عرض الحجوزات</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      display:block;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;

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
    .custom-table {
      width: 60%;
      height: 10%;
      margin: auto;
      font-size: 3vh;
      text-align: right;
      border-collapse: collapse;
      background-color: green;
      border-radius: 1vh;
      color: white;
      border-spacing: 0;
    }

    .radius-table {
      width: 60%;
      height: 10%;
      margin: auto;
      color: white;
      border-collapse: collapse;
      background-color: gray;
      border-radius: 1vh;
      border-spacing: 0;
    }
    .cost-table {
      width: 60%;
      height: 10%;
      margin: auto;
      color: white;
      border-collapse: collapse;
      background-color: rgb(205, 204, 204);
      border-radius: 1vh;
      border-spacing: 0;
    }
    .foot-table {
      width: 60%;
      height: 10%;
      margin: auto;
      border-collapse: collapse;
      background-color: rgb(152, 152, 152);
      border-radius: 1vh;
      color: white;
      border-spacing: 0;
    }
    .root-table {
      width: 60%;
      height: 10%;
      margin: auto;
      border-collapse: collapse;
      background-color: rgb(89, 89, 89);
      border-radius: 1vh;
      color: white;
      border-spacing: 0;
    }
    .check-table {
      width: 60%;
      height: 10%;
      margin: auto;
      border-collapse: collapse;
      background-color: rgb(152, 152, 152);
      border-radius: 1vh;
      color: white;
      border-spacing: 0;
    }
    .heer-table {
      width: 60%;
      height: 10%;
      margin: auto;
      border-collapse: collapse;
      background-color: rgb(205, 204, 204);
      border-radius: 1vh;
      color: white;
      border-spacing: 0;
    }


  </style>
</head>
<body>
  <!-- section header-->
  <section>
<header>
  <nav>
    <ul>
        <li><b><a href="{{ route('index') }}">الصفحة الرئيسية</a></b></li>
        <li><b><a href="{{ route('photo') }}">الصور</a></b></li>
        <li><b><a href="{{ route('advantages') }}">المميزات</a></b></li>
        <li><b><a href="{{ route('connectus') }}">تواصل معنا</a></b></li>
      <li><b><a href="{{ route('reservations') }}">مواعيد الملاعب</a></b></li>

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
      <li style="float: left; margin-right: auto;"><img src="{{ asset('siteasset/images/logo.png') }}" alt="" style="width: 11vh; height: 11vh; margin-top: -5vh;"></li>
      </ul>
  </nav>
</header>
</section><br><br><br>
<!-- عرض جدول الحجوزات-->
  <table class="table custom-table">
    <tr>
       <td  style="text-align: center;"><b> اسم الملعب </b></td>
      <td style="text-align: right;"><b>اليوم</b></td>
      <td style="text-align: center;"><b> التاريخ</b></td>
      <td style="text-align: right;"><b>الوقت</b></td>
    </tr>
  </table>
  <br>
  <table class="table radius-table">
    <tr>
        <td ><b style="margin-right: 4vh;"> ملعب النجوم </b></td>
        <td style="text-align: left;"><b> السبت</b></td>
        <td class="td1" style="font-size: 1vh; text-align: left;"><b >1/2/2023 &nbsp;&nbsp; 15/2/2023 <br><br> 8/2/2023 &nbsp;&nbsp;  22/2/2023</b></td>
        <td class="td1" style="font-size: 1vh; text-align: center;"><b > 8:15&nbsp; pm &nbsp;&nbsp; 10:30&nbsp; am <br><br>7:30 &nbsp; am &nbsp;&nbsp; 10:15&nbsp; am </b></td>
    </tr>
  </table>
  <br>
  <table class="table cost-table">
    <tr>
        <td ><b style="margin-right: 4vh;"> ملعب التعاون </b></td>
        <td style="text-align: left;"><b>الاحد</b></td>
        <td class="td1" style="font-size: 1vh; text-align: left;"><b >1/2/2023 &nbsp;&nbsp; 22/2/2023 <br><br> 8/2/2023 &nbsp;&nbsp;  21/2/2023</b></td>
        <td class="td1" style="font-size: 1vh; text-align: center;"><b > 8:15&nbsp; pm &nbsp;&nbsp; 10:30&nbsp; am <br><br>7:30 &nbsp; am &nbsp;&nbsp; 10:15&nbsp; am </b></td>
    </tr>
  </table>
  <br>
  <table class="table foot-table">
    <tr>
        <td ><b style="margin-right: 5vh;"> ملعب العنان</b></td>
        <td style="text-align: left;"><b>الاثنين</b></td>
        <td class="td1" style="font-size: 1vh; text-align: left;"><b >1/2/2023 &nbsp;&nbsp; 22/2/2023 <br><br> 8/2/2023 &nbsp;&nbsp;  21/2/2023</b></td>
        <td class="td1" style="font-size: 1vh; text-align: center;"><b > 8:15&nbsp; pm &nbsp;&nbsp; 10:30&nbsp; am <br><br>7:30 &nbsp; am &nbsp;&nbsp; 10:15&nbsp; am </b></td>
    </tr>
  </table>
  <br>
  <table class="table root-table">
    <tr>
        <td ><b style="margin-right: 5vh;"> ملعب الاتحاد </b></td>
        <td style="text-align: left;"><b>الثلاثاء</b></td>
        <td class="td1" style="font-size: 1vh; text-align: left;"><b >1/2/2023 &nbsp;&nbsp; 22/2/2023 <br><br> 8/2/2023 &nbsp;&nbsp;  21/2/2023</b></td>
        <td class="td1" style="font-size: 1vh; text-align: center;"><b > 8:15&nbsp; pm &nbsp;&nbsp; 10:30&nbsp; am <br><br>7:30 &nbsp; am &nbsp;&nbsp; 10:15&nbsp; am </b></td>
    </tr>
  </table>
  <br>
  <table class="table check-table">
    <tr>
        <td ><b style="margin-right: 4vh;"> ملعب البلدي </b></td>
        <td style="text-align: left;"><b>الاربعاء</b></td>
        <td class="td1" style="font-size: 1vh; text-align: left;"><b >1/2/2023 &nbsp;&nbsp; 22/2/2023 <br><br> 8/2/2023 &nbsp;&nbsp;  21/2/2023</b></td>
        <td class="td1" style="font-size: 1vh; text-align: center;"><b > 8:15&nbsp; pm &nbsp;&nbsp; 10:30&nbsp; am <br><br>7:30 &nbsp; am &nbsp;&nbsp; 10:15&nbsp; am </b></td>
    </tr>
  </table>
  <br>
  <table class="table heer-table">
    <tr>
        <td ><b style="margin-right: 4vh;"> ملعب الجنوب </b></td>
        <td style="text-align: left;"><b>الخميس</b></td>
        <td class="td1" style="font-size: 1vh; text-align: left;"><b >1/2/2023 &nbsp;&nbsp; 22/2/2023 <br><br> 8/2/2023 &nbsp;&nbsp;  21/2/2023</b></td>
        <td class="td1" style="font-size: 1vh; text-align: center;"><b > 8:15&nbsp; pm &nbsp;&nbsp; 10:30&nbsp; am <br><br>7:30 &nbsp; am &nbsp;&nbsp; 10:15&nbsp; am </b></td>
    </tr>
  </table>
  <div class="col-md-6"><br>
    <b><i><input type="submit" onclick="goToPage2()" value="الحجز" style="width: 20vh; border-radius: 1vh; height: 6vh;" class="btn btn-success"></i></b>
    </div>  <br><br>
    <script>
			function goToPage2() {
			  window.location.href = "change.html";
			}
		  </script>

  </body>
</html>
