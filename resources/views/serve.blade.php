
<!DOCTYPE html>
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
            margin-top: 1%;
            font-size: 2.5vh;

        }

        a {
            color: rgb(36, 102, 168);
            font-size: 20px;
        }

        a:hover {
            color: rgb(141, 226, 21);
        }

        label {
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
            border: 10px solid white;
        }
    </style>
    <title>صفحة اضافة حجز جديد</title>
</head>

<body>

    <br>
    <br>
    <!--section اضافة حجز جديد-->
    <section>
        <h1 style="text-align: center;"> اضافة حجز </h1>
        <div class="container " style="text-align:center; width: 80vh; height: 80vh; margin-top: 10vh;">

            <form method="post" action="{{ route('serve.store') }}" >
                @csrf
                <input type="hidden" name="studium_id" id="" value="{{ $studium->id }}">

                <div class="row justify-content-center">
                    <div class="col-6">

                        <div class="form-group">
                            <label for="text-input">موعد الحجز:</label>
                            <input name="time" type="time" class="form-control" placeholder="موعد الحجز" onchange="validateTime(this)">
                        </div>
                        <span id="time-error" style="color: red;"></span><br>
                        <div class="form-group">
                            <label for="text-input"> اختر اليوم : </label>
                            <select class="form-control" name="day">
                                <option value="">اختر اليوم</option>
                                <option value="السبت">السبت</option>
                                <option value="الاحد">الاحد</option>
                                <option value="الاثنين"> الاثنين</option>
                                <option value="الثلاثاء"> الثلاثاء</option>
                                <option value="الاربعاء"> الاربعاء</option>
                                <option value="الخميس"> الخميس</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label for="text-input" style="width: 11vh;">تاريخ الحجز:</label>
                            <input name="date" type="date" class="form-control" placeholder="تاريخ الحجز" min="">
                        </div><br>

                        <div class="form-group">
                            <label for="text-input"> اسم الشخص : </label>
                            <input name="name" type="text" id="text-input" class="form-control"
                                placeholder="اسم الشخص">
                        </div><br>
                        <div class="form-group">
                            <button class="btn btn-success" style="width: 25vh; height: 5vh;">اضافة</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</body>
<script>
    // الحصول على تاريخ اليوم الحالي
    var currentDate = new Date();

    // زيادة اليوم بمقدار واحد للحصول على التاريخ التالي
    currentDate.setDate(currentDate.getDate() + 1);

    // تحويل التاريخ التالي إلى سلسلة نصية بتنسيق "YYYY-MM-DD"
    var formattedDate = currentDate.toISOString().split('T')[0];

    // الحصول على عنصر الإدخال "date"
    var dateInput = document.getElementsByName('date')[0];

    // تعيين قيمة الحقل "min" لعنصر الإدخال "date" إلى التاريخ التالي
    dateInput.min = formattedDate;
</script>
<script>
    function validateTime(input) {
        var selectedTime = input.value;
        var selectedHour = parseInt(selectedTime.split(':')[0]);

        if (selectedHour < 8 || selectedHour >= 22) {
            document.getElementById('time-error').textContent = 'يجب أن يكون الحجز بين الساعة 8 صباحًا و 10 مساءً.';
            input.value = ''; // إزالة القيمة غير الصحيحة
        } else {
            document.getElementById('time-error').textContent = '';
        }
    }
</script>
</html>
