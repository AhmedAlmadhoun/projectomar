<!DOCTYPE html>
<html dir="rtl">
<head>
	<title>تطبيق ملعب كرة قدم</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('siteasset/css/main.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
	<!--<section id="sectionToMove">
		هنا يتم وضع الكود الذي تريد نقله
		<h2>عنوان القسم</h2>
		<p>نص القسم</p>
	  </section>-->

	<!--<section id="newSection">
	 يمكنك وضع المحتوى الحالي للصفحة هنا -->

		<!-- ثم قم بإضافة الكود المنقول داخل القسم -->
	<!--	<script>
		  var sectionToMove = document.getElementById('sectionToMove');
		  var newSection = document.getElementById('newSection');
		  newSection.appendChild(sectionToMove);
		</script>
	  </section>-->

	<div class="header">
		<h1><i>ملعب كرة القدم </i></h1>
		<p><i>  مرحبا بكم في برنامج لملاعب كرة القدم</i></p>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<a href="{{ route('loginadmin') }}">Admin</a>
			</div>
			<div class="col">
				<a href="{{ route('login') }}">stadium offical</a>
			</div>
			<div class="col">
				<a href="{{ route('login') }}">users</a>
			</div>


		</div><br><br>
		<div >
			<b><i> <label class="label1" for="has-account" style="color: white;  width: 23vh; "><a href="{{ route('register') }}" style="font-size: 13px; color: white;"> هل لديك حساب ؟ ام لا </a></label></i></b>
        </div>
	</div>
</body>
</html>
