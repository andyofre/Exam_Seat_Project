@if (session('success'))
<div class="alert alert-success alert-icon alert-dismissible fade show" role="alert">
    <i class="uil uil-check-circle"></i>{{ session('success') }}</a>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session('error'))
<div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
    <i class="uil uil-times-circle"></i>{{ session('error') }}</a>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
