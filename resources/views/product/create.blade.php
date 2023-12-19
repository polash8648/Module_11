@if(Session::has('success'))
<p class="alert">{{ Session::get('success') }}</p>
@endif
<form method="POST" action="{{route('product.store') }}" >    
    @csrf
    @include('product._form')
</form>