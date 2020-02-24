@extends('layouts/contentLayoutMaster') <!--// choose any one option {contentLayoutMaster/fullLayoutMaster}-->

@section('title', 'Position') <!-- // change title accrodingly -->

@section('content')
<div class="card">
  <div class="card-header">
      <h4 class="card-title">Add Position Form</h4>
  </div>
  <div class="card-body">
      <form action="{{ route('positions.update', $position->id) }}" method="POST" class="form form-vertical" novalidate="">
           {{ method_field('PUT')}}
        @include("positions._form",['buttonText' => 'Edit Position']  )
      </form>

     </div>
  </div>
@endsection
