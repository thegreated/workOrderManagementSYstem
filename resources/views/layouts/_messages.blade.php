@if (session('success'))
<div  class="alert alert-primary alert-dismissible fade show mb-5" role="alert">
    <h4 class="alert-heading">Success!</h4>
    <p class="mb-0">
      {{ session('success') }}
    </p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
    </button>
</div>

@endif
