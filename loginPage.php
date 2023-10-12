<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputNickname1">Pseudonyme</label>
                <input type="text" class="form-control" id="exampleInputNickname1" aria-describedby="NicknameHelp" placeholder="Entrer pseudo" name="nickname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer email" name="email">
                <small id="emailHelp" class="form-text text-muted">On n'ira pas transmettre votre mail hein</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>