<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify your email address ({{{ $email }}})</h2>

        <div>
            <p>Hi {{{ $firstName }}},</p>    
            <h3>Thanks for creating an account with the programmerPrep! Follow the link below to verify your email address</h3> 

            <h2>{{{ URL::to('register/verify/' . $confirmationCode) }}}</h2>

            <h2>Thanks,</h2>
            <h2>programmerPrep</h2>
        </div>
    </body>
</html>