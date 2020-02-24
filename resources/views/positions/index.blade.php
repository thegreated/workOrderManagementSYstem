@extends('layouts/contentLayoutMaster') <!--// choose any one option {contentLayoutMaster/fullLayoutMaster}-->

@section('title', 'Position') <!-- // change title accrodingly -->

@section('content')
   @include ('layouts._messages')
<div class="card">
  <div class="card-header">
      <h4 class="card-title">List of Positions</h4>
      <a href="{{ route('positions.create')}}" class="btn bg-gradient-primary" type="button" name="button"> Add </a>
  </div>
  <div class="card-body">
       <table class="table">
         <tr>

           <th>Name</th>
           <th>Modify</th>
         </tr>
         @foreach($position as $positions)
         <tr>

              <td>{{ $positions->name }}</td>
              <td>
                <div class="row">
                    <div class="col-6">
                    <a href="{{ route('positions.edit',$positions->id) }}" class="btn bg-gradient-info" type="button" name="button"> Edit </a>
                  </div>
                  <div class="col-6">
                    <form class="form-delete" method="post" action="{{ route('positions.destroy', $positions->id) }} " >
                      @method('DELETE')
                      @csrf
                      <button onclick="return confirm('Are you sure')" class="btn bg-gradient-danger waves-effect waves-light" type="submit"> Delete </button>
                    </form>
                  </div>
                </div>
              </td>
          </tr>
         @endforeach
       </table>

     </div>
  </div>
@endsection
