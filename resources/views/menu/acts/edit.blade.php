<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>{{ $title }}</title>
</head>
<body>
   <h1>{{ $title }}</h1>
   
   {{Form::open(['url'=>'acts/update/'. $act->id, 'method'=>'post'])}}
   {{Form::label('title', '活動編號')}}<br>
   {{Form::text('act_no', $act->act_no )}}<br>
   {{Form::label('content', '活動主旨')}}<br>
   {{Form::text('act_name', $act->act_name)}}<br>
   {{Form::submit('確定儲存')}}
   {{Form::close()}}
</body>
</html>

