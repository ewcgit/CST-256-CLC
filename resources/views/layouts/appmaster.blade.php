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
