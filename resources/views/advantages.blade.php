<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="{{ asset('siteasset/javascript/script.js') }}" defer></script>

    <title> صفحة المميزات </title>
    <style>

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
	color: rgb(33, 141, 191);
	text-decoration:  none ;
    font-size: 2vh;
	padding: 0 10px;
	height: 30%;
	line-height: 0px;
}
a:hover {
	color:rgb(73, 227, 204);
}
    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr ;
        grid-gap: 20px;
        text-align: center;
        margin-top: 20px;
        margin-right: 20px;
        margin-left: 20px;

    }
    .grid-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
        color: #4d68b1;
        background-color: white;
    }
    .grid-item img {
        width: 10%;
        max-width: 170px;
        height: 23%;
        margin-bottom: 10px;
    }</style>
</head>
<body>
<!--section header-->
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
</section>

<div class="back">
<hr>
<!--section عرض المميزات-->
<section  id="mySection" style="text-align: center;">
            <b><i><h1 style="text-align: center; color: black;">! انتظر, هناك الكثير</h1></i></b>
         <!-- المميزات التي تقدمها الملعب-->

            <div class="grid-container">
                <div class="grid-item" style="grid-column: 1 / 2">
                    <img src="{{ asset('siteasset/images/7.png') }}" alt="">
                    <b><i><h4 style="text-align: center; color: black;"> اكتشف الملاعب حولك </h4></i></b>
                    <b><i><h4 style="color: rgb(246, 51, 51);"> تعرف من خلال الخريطة على الملعب الذي ستلعب به </h4></i></b>
                </div>
                <div class="grid-item" style="grid-column: 2 / 3;">
                    <img src="{{ asset('siteasset/images/8.png') }}" alt="">
                    <b><i><h4 style="text-align: center; color: black;"> اختر ساعة الحجز </h4></i></b>
                    <b><i><h4 style="color: rgb(246, 51, 51);"> تعرف على ساعات العمل , وخطط <br> جدول لعب الفريق دون عناء البحث </h4></i></b>
                </div>
                <div class="grid-item" style="grid-column: 1 / 2">
                    <img src="{{ asset('siteasset/images/9.png') }}" alt="">
                    <b><i><h4 style="text-align: center; color: black;"> حجز فوري وسريع </h4></i></b>
                    <b><i><h4 style="color: rgb(246, 51, 51);"> احجز ملعبك باللحظة الاخيرة وبدون بطاقة ائتمانية </h4></i></b>
                </div>
                <div class="grid-item" style="grid-column: 2 / 3">
                    <img src="{{ asset('siteasset/images/10.png') }}" alt="">
                    <b><i><h4 style="text-align: center; color: black;"> ادر حجوزاتك بسهولة </h4></i></b>
                    <b><i><h4 style="color: rgb(246, 51, 51);">  متابعة حجوزاتك الحالية الاحتفاظ بحجوزاتك السابقة </h4></i></b>
                </div>
            </div>
</section>
</div>

</body>
</html>

