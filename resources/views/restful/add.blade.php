<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Quản Lý Học Sinh</title>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container" style="margin-top:20px">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Thêm Điểm Học Sinh</h3>
        </div>
        {{--<div>--}}
            {{--@if ($errors->any())--}}
                {{--<div class="alert alert-danger">--}}
                    {{--<ul>--}}
                        {{--@foreach ($errors->all() as $error)--}}
                            {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}
            <form method="POST" action="{!! route('student.store') !!}" name="frmAdd">
                @csrf
                <div class="form-group">
                    <label for="lblHoTen">Họ Tên Học Sinh</label>
                    <input type="text" class="form-control" name="txtHoTen" value="<?php if (isset($_POST['txtHoTen'])){echo htmlentities($_POST['txtHoTen']);}?>"required />
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                </div>
                <div class="form-group">
                    <label for="lblToan">Điểm Môn Toán</label>
                    <input type="text" class="form-control" name="txtToan" required />
                </div>
                <div class="form-group">
                    <label for="lblLy">Điểm Môn Lý</label>
                    <input type="text" class="form-control" name="txtLy" required />
                </div>
                <div class="form-group">
                    <label for="lblHoa">Điểm Môn Hóa</label>
                    <input type="text" class="form-control" name="txtHoa" required />
                </div>
                <button type="submit" class="btn btn-default">Thêm</button>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

