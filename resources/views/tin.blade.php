<style>
    .pagination li{
        list-style: none;
        float: left;
        margin-left: 5px;
    }
</style>
@foreach($tin as $value)
    {{$value->id}}
 {{$value->email}}<br>
@endforeach
{!!$tin->links()!!}
