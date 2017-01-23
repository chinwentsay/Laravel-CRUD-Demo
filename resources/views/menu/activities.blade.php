<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   
</head>
<body>
  
   <div>{{ link_to('acts/create', '新增') }}</div>
   @if (isset($data))


 <div class="result_wrap">
  <div class="result_content">
   <table class="list_tab">
        <tr>
        <th>序號</th>
        <th>活動編號</th>
        <th>活動主旨</th>
        <th>活動開始日期</th>
        <th>活動結束日期</th>
         <th>功能</th>
        </tr>
 @foreach($data  as $act)
      <tr>
      <td> {{ $act->id}} </td>
      <td> {{ $act->act_no}} </td>
      <td> {{ $act->act_name}} </td>
        <td> {{ $act->act_beg_date }} </td>
        <td> {{  $act->act_end_date }} </td>
        <td>  <div>{{ link_to('acts/edit/'. $act->id, '編輯') }}</div>
        <div>{{ link_to('acts/delete/'. $act->id, '刪除') }}</div>
        </td>
      </tr>
 @endforeach

 </table>
 </div>
 </div>

   @endif
</body>
</html>


