<!DOCTYPE html>
<html>
    <body>
    	<header>
    		@include('layouts.header')
    			
    	</header>
        	
            <div align="center">
                @yield('content')
            </div>
    		<footer>@include('layouts.footer')</footer>
    </body>
</html>
@section ('content')
  <h1> The parent content</h1>
@endsection
// child.blade.php
extends ('master')
@section ('content')
  @parent
  <h2> Child content </h2>
@endsection
