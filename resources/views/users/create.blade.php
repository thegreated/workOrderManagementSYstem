@extends('layouts/contentLayoutMaster') <!--// choose any one option {contentLayoutMaster/fullLayoutMaster}-->

@section('title', 'User') <!-- // change title accrodingly -->

@section('content')
    <div class="card">
      <div class="card-header">
      <div class="card-title">Users Form</div>
      </div>
      <div class="card-body">

        <form action="{{ route('users.store') }}" method="POST" class="form form-vertical" novalidate="">
        @include("users._form",['buttonText' => 'Save User']  )

        </form>


      </div>
  </div>
@endsection
