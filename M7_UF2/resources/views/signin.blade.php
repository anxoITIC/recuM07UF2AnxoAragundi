<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNIN LARAVEL</title>
</head>    
</body>
    <div>
     
    </div>

    <div >
        <form  action="{{ route('send_login') }}" method="POST">
            @csrf
            <div >
                <label  >Email address</label>
                <input type="text"  name="email_login" placeholder="email@example.com" required>
            </div>
            <div >
                <label >Password</label>
                <input type="text" name="password_login" placeholder="Password" required>
            </div>
            <div>
                <input type="checkbox">
                <label>

                Remember me
                </label>
            </div>
            <button type="submit" name="signin">Sign in</button>
            <div>
            <a href=" {{ route('signup') }} ">SIGN UP</a> 
            </div>
        </form>
    </div>
</body>
</html>


