@extends('layouts/contentLayoutMaster') <!--// choose any one option {contentLayoutMaster/fullLayoutMaster}-->

@section('title', 'User') <!-- // change title accrodingly -->

@section('content')
   @include ('layouts._messages')
    <div class="card">
      <div class="card-header">
      <div class="card-title">List of Users</div>
      <a href="{{ route('users.create') }}" class="btn bg-gradient-primary" type="button" name="button"> Add </a>
      </div>
      <div class="card-body">
          <table class="table ">
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Position </th>
            <th>Modify </th>
          </tr>
        @foreach($user as $users)
          <tr>
            <td>{{ $users->firstname . ' ' . $users->lastname }}</td>
            <td>{{ $users->email  }}</td>
            <td>{{ $users->contact  }}</td>
            <td>{{ $users->positions['name']  }}</td>
            <td>
              <div class="row">
                  <div class="col-6">
                    <a href="{{ route('users.edit',$users->id) }}" class="btn bg-gradient-info" type="button" name="button"> Edit </a>
                  </div>
                  <div class="col-6">
                  <form class="form-delete" method="post" action="{{ route('users.destroy', $users->id) }} " >
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
