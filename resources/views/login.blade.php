<x-layout>
<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <h1> Log In</h1>
    <form action="\login" method="POST">
        @csrf

        <div>
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>
        <div>
            <x-input titulo="Password" type="password" nombre="password"/>
        </div>
        <button type="submit">Log in</button>
    </form>
</div>




</x-layout>
