<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>{{ $title }}</title>
</head>
<body>
   <h1>{{ $title }}</h1>
   {{Form::open(['url'=>'acts/store', 'method'=>'post'])}}
   {{Form::label('title', '活動編號')}}<br>
   {{Form::text('act_no')}}<br>
   {{Form::label('content', '活動主旨')}}<br>
   {{Form::text('act_name')}}<br>
 
     {{Form::submit('確定新增')}}
   {{Form::close()}}
</body>
</html>

