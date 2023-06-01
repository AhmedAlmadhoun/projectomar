<!DOCTYPE html>
<html dir="rtl">
<head>
  <title>خاصة admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      display:block;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;

    }

.h1{
  width: 86%;
}
.custom-table {
      width: 100%;
      margin-bottom: 20px;
      font-size: 24px;
      text-align: right;
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
         <b> <a class="nav-link" href="index.html">الصفحة الرئيسية</a></b>
        </li>
        <li class="nav-item" style="padding: 4px;">
          <b>   <a class="nav-link" href="photo.html">الصور</a></b>
        </li>
        <li class="nav-item" style="padding: 4px;">
          <b>   <a class="nav-link" href="advantages.html">المميزات</a></b>
        </li>

        <li class="nav-item" style="padding: 4px;">
          <b>   <a class="nav-link" href="connectus.html">تواصل معنا</a></b>
        </li>
        <li class="nav-item" style="margin-top: 1vh; padding: 4px;">
          <select style="background-color: rgb(49, 151, 124); border-radius: 1vh; height:4vh ;" onchange="if (this.value) window.location.href=this.value;">
            <option> تسجيل الدخول </option>
            <option value="loginadmin.html">admin</option>
            <option value="loginusers.html">loginusers</option>
            <option value="loginofficial.html">offical</option>

          </select>
        </li>
        <li class="nav-item" style="padding: 4px;">
          <b><a class="nav-link" href="reservation.html">مواعيد الملاعب</a></b>
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
</section>
  <br>
  <!-- ازرار التنقل-->
  <section>
  <div class="form-group" id="name" style="direction: ltr; width: 86%;">
    <div  style="display: flex; ">
        <a href="{{ route('admin.user') }}" style="width: 15%; ; text-align: center; float: left; margin-right: 2%;" class="btn btn-primary">صفحة المستخدمين </a>
        <a href="{{ route('reservations') }}" style="width: 15%; ; text-align: center; float: left; margin-right: 2%;" class="btn btn-primary">صفحة الحجوزات </a>
        {{-- <button  style="width: 15%; text-align: center; float: left;" class="btn btn-primary" >صفحة الحجوزات </button> --}}
      </b>
    </div>
  </div>
</section>
<!--containar الغير مقبولة عرض الملاعب-->
<section>
  <div class="container" style="border-radius: 2vh;">
    <table class="table custom-table" style="border-radius: 1vh;">
      <thead>
        <tr>
          <th style="text-align: right;"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; صورة الملعب </b></th>
          <th style="text-align: right;"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; اسم الملعب  </b></th>
          <th style="text-align: right;"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; التاريخ</b></th>
          <th style="text-align: right;"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; القبول</b></th>
          <th style="text-align: right;"><b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; الرفض</b></th>

        </tr>
      </thead>
    </table>
    @foreach ($users as $user )
    <div class="row" style="margin-top: -3vh;">
        <div class="col-md-12">
          <table class="table radius-table">
            <tbody>
              <tr>
              <b><i>  <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <img src="{{ asset('uploads/'.$user->studium->image)}}" style="border: 3px solid white; border-radius: 2vh;width: 160px; height: 100px;"  alt=""></td></i></b>
              <b><i> <td style="text-align: right; margin-right: -3vh;"><b><br> {{ $user->name }}</b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></i></b>
                <b><i>  <td class="td1" style="font-size: 1vh; text-align: right;"><b><br><br>{{ $user->date }}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></i></b>
                <td class="td1">
                    <div class="form-group">
                        {{-- {{route('off.update',[$user->id])}} --}}
                      <form method="POST" action="{{route('admin.active',[$user->id])}}">
                          @csrf
                          @method('put')
                      <button class="btn btn-success btn-lg btn-block" style="width: 90px;">قبول</button>
                  </form>
                    </div>
                  </td>
                  <td class="td1">
                    <div class="form-group">
                        {{-- {{route('off.destroy',[$user->id])}} --}}
                      <form method="POST" action="{{route('admin.inactive',[$user->id])}}">
                          @csrf
                          @method('DELETE')
                      <button class="btn btn-danger btn-lg btn-block" style="width: 80px;" >رفض</button>
                  </form>

                    </div>
                  </td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    @endforeach

</div>
</section>


</form>
<br><br>


</body>
</html>
