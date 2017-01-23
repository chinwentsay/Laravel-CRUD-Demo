<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>活動 </title>
    </head>
    <body>
   
 <div class="result_wrap">
  <div class="result_content">
   <table class="list_tab">
        <tr>
        <th>活動編號</th>
        <th>活動主旨</th>
     
        </tr>
   

 	@foreach($acts as $act)
 	     <tr>
   		   <td> {{ $act->act_no }} </td>
   		   <td> {{ $act->act_name }} </td>
  		    </tr>
	 @endforeach

 </table>
 </div>
 </div>

 </body>
 </html>


