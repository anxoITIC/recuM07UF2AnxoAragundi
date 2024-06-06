<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP LARAVEL</title>
</head>
<body>
    <div>
        
    </div>
    <form action="" method="POST">
        <div>
            <label>NAME</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>SURNAME</label>
            <input type="text" name="surname">
        </div>
        <div>
            <label>
                <select name="ROL">
                    <option value="Professorat">Professorat</option>
                    <option value="Alumnat">Alumnat</option>
                </select>
            </label>
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="passwd">
        </div>
        <div>
            <label>email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="active">Active</label>
            <input type="checkbox" name="active">
       </div>
        <div>
            <button type="submit" name="send">SEND</button>
        </div>
        <div>
            <a href=" {{ route('signin') }} ">SIGN IN</a>
        </div>
    </form>    
</body>
</html>


