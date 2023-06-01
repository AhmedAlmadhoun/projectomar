v<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>

body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;

}

label{
color: black;
margin-left: 70vh;
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
  border:10px solid white;
}
</style>
    <title>صفحة تعديل الملاعب</title>
</head>
<body>


<br>
<!--صفحة تعديل الملعب-->
<section>
<h1 style="text-align: center;"> تعديل الملاعب </h1>
    <div class="container " style="text-align:center; width: 80vh; height: 80vh; margin-top: 10vh;">
        <form action="{{ route('studium.update',$studium->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center" >
                <div class="col-6">
                  <div class="form-group">
                    <label for="image-input">اختر صورة:</label>
                    <input type="file" id="image-input" accept="image/*" name="image" ><br>
                    <img id="preview-image" src="{{ asset('uploads/'.$studium->image) }}" alt="" style="width: 600px; height: 400px; border-radius: 2vh; border: 3px solid black;" >
                  </div><br><br>
                  <div class="form-group">
                      <label for="text-input"> اسم الملعب : </label>
                      <input name="name" type="text" id="text-input" class="form-control" placeholder="اسم الملعب" value="{{ $studium->name }}" >
                    </div><br>
                  <div class="form-group">
                      <label for="text-input" style="width: 13vh;"> اسم صاحب الملعب : </label>
                      <input name="name_off" type="text" id="text-input" class="form-control" placeholder="اسم صاحب الملعب" value="{{ $studium->name_off }}">
                    </div><br>
                    <div class="form-group">
                      <label for="text-input" style="width: 13vh;"> رقم صاحب الملعب : </label>
                      <input name="phone_off" type="text" id="text-input" class="form-control" placeholder="رقم صاحب الملعب" value="{{ $studium->phone_off }}">
                    </div><br>
                    <div class="form-group">
                      <label for="text-input" style="width: 13vh;"> مدة اللعب: </label>
                      <input name="duration" type="text" id="text-input" class="form-control" placeholder="رقم صاحب الملعب" value="{{ $studium->duration }}">
                    </div><br>
                    <div class="form-group">
                      <label for="text-input" style="width: 13vh;"> السعر: </label>
                      <input name="price" type="text" id="text-input" class="form-control" placeholder="رقم صاحب الملعب" value="{{ $studium->price }}">
                    </div><br>
                  <div class="form-group">
                     <b>  <input type="submit"   value="اضافة" class="btn btn-success" style="width: 25vh; height: 5vh;"></b>
                    </div>
                    {{-- <button>Create</button> --}}
                </div>
              </div>
        </form>
      </div>
</section>


<script>
          const imageInput = document.getElementById('image-input');
          const previewImage = document.getElementById('preview-image');

          imageInput.addEventListener('change', function() {
            const file = imageInput.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
              previewImage.src = e.target.result;
            };

            reader.readAsDataURL(file);
          });
</script>
</body>
</html>
