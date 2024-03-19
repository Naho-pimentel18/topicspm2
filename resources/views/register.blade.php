<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <h1>register</h1>
    <form action="/register" method="post">
        @csrf

        <div>
            <label for="">name</label>
            <input type="text" name='name'>
        @error('name')
         <p>{{$message}}</p>
         @enderror
        </div>




        <div>
            <label for="">Email</label>
            <input type="text" name='email'>
            @error('email')
         <p>{{$message}}</p>
         @enderror
        </div>

        <div>
            <label for="password">password</label>
            <input type="password" name='password'>
          @error('password')
         <p>{{$message}}</p>
         @enderror

        </div>

        <div>
            <label for="">birthday</label>
          <input type="date" name='birthday'>
          @error('birtday')
          <p>{{$message}}</p>
          @enderror
        </div>
        <button type="submit">send</button>
    </form>
    </div>



