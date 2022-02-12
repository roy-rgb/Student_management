
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
                   <a href="{{ route('edit', $tm->id) }}" class="btn btn-success">Edit</a>
              
                <form class="form-inline" action="{{ route( 'delete', $tm->id ) }}" method="post">
                        @csrf   
                <input type="submit" class="btn btn-danger" value="delete">
               </form>

                </td>
             

           </tr>
                @endforeach
       </table>


       @endsection
