
       @extends('master');


       @section('content')

          <h2> create student</h2>

          <form class="form-horizontal" action="{{ route('store')}}" method="post">
                      @csrf
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="registration_id">Registration Id:</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="registration_id" id="registration_id" placeholder="Enter Registration Id">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="department_name">Department:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="department_name" id="department_name" placeholder="Enter Department name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="info">Info:</label>
                    <div class="col-sm-10">
                      <textarea type="text" class="form-control" name="info" id="info"  rows="4" placeholder="Enter info">
                    </textarea>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10 my-3">
                      <button type="submit" class="btn btn-primary">Register Student</button>
                    </div>
                  </div>
          </form>


       @endsection
