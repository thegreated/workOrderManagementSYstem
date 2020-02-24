@extends('layouts/contentLayoutMaster') <!--// choose any one option {contentLayoutMaster/fullLayoutMaster}-->

@section('title', 'User') <!-- // change title accrodingly -->

@section('content')
    <div class="card">
      <div class="card-header">
        <div class="card-title">User edit form</div>
      </div>
      <div class="card-body">

        <form action="{{ route('users.update', $user->id) }}" method="POST" class="form form-vertical" novalidate="">
             {{ method_field('PUT')}}
        @include("users._form",['buttonText' => 'Edit User']  )

        </form>

      </div>
  </div>
@endsection
