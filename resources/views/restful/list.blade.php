<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản Lý Học Sinh</title>
    <link type="text/css" href="{!!url('public/css/style.css')!!}" rel="stylesheet">
    <style type="text/css">
        .btn {padding:0px;font-weight:bold}
    </style>
    <script type="text/javascript">
        function xacnhanxoa(msg) {
            if (window.confirm(msg)) {
                return true;
            }
            return false;
        }
    </script>
</head>
<body>
<div class="container" style="margin-top:20px">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Danh Sách Học Sinh</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ Tên</th>
                    <th>Điểm Toán</th>
                    <th>Điểm Lý</th>
                    <th>Điểm Hóa</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
                </thead>
                <tbody>
                <?php $stt=0?>
                @foreach($student as $st)
                    <?php $stt=$stt+1?>
                <tr>
                    <th scope="row">{{$stt}}</th>
                    <td>{{$st->name}}</td>
                    <td>{{$st->toan}}</td>
                    <td>{{$st->ly}}</td>
                    <td>{{$st->hoa}}</td>
                    <th>
                        <form method="POST" action="{{route('student.destroy',$st->id)}}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" value="{{$st->id}}">
                            <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit" id="delete" class="btn btn-link">Xóa</button>
                        </form>
                    </th>
                    <th><a href="{{route('student.edit',$st->id)}}">Sửa</a></th>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
