

 <div class="result_wrap">
  <div class="result_content">
   <table class="list_tab">
        <tr>
        <th>活動編號</th>
        <th>活動主旨</th>
        <th>活動開始日期</th>
        <th>活動結束日期</th>
        </tr>
 @foreach($data  as $act)
      <tr>
      <td> {{ $act->act_no}} </td>
      <td> {{ $act->act_name}} </td>
        <td> {{ $act->act_beg_date }} </td>
        <td> {{  $act->act_end_date }} </td>
      </tr>
 @endforeach

 </table>
 </div>
 </div>


