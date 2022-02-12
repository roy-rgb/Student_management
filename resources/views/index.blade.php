
       @extends('master');


       @section('content')

       <table class="table table-responsive table-hover">
           <tr>
              <th>#</th>
              <th>Name</th>
              <th>Registration</th>
              <th>department name</th>
              <th>Info</th>
              <th>Action</th>
           </tr>

              @php
                $i=0;
              @endphp

                 @foreach($students as $tm)
                 @php $i++; @endphp
           <tr>
               <td>{{$i++}}</td>
               <td>{{$tm->name}}</td>
               <td>{{$tm->registration_id}}</td>
               <td>{{$tm->department_name}}</td>
               <td>{{$tm->info}}</td>
               <td>
                   <a href="#" class="btn btn-success">Edit</a>
               </td>

           </tr>
                @endforeach
       </table>


       @endsection
