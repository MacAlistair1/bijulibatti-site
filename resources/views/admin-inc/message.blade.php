@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <h3 class="alert alert-danger">{{ $error }}</h3>        
    @endforeach    
@endif

@if (session('error'))
<h3 class="alert alert-danger">{{ session('error') }}</h3>     
@endif

@if (session('success'))
<h3 class="alert alert-success">{{ session('success') }}</h3>     
@endif