<!DOCTYPE html>
<html>
    <head>
        <title>Email</title>
    </head>
    <body>
        <div class="container">
            <div>
                <table style=" width: 350px; border-bottom: 1px solid #fff; margin-left: 200px;">
                    <thead>
                        <tr>
                            <th style="background-color: #eee; width:50%; font-size:15px;" colspan="2">
                                <h2>We are happy that now you are a member of our website</h2>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style=" width: 500px;" colspan="2">
                                To Verify your account please click on the link below
                                <a style=" color:red; margin-left: 20px;font-size:12px;" href="{{route('sendEmailDone',["email"=> $user->email,"verifyToken"=>$user->verifyToken])}}">{{$user->verifyToken}}</a>  
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Thanks & Regards,<br>{{ config('app.name') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>