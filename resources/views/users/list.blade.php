<html>
     <body>
       <h2> Foydalanuvchilar ro'yxati </h2>
        <ul>
            @foreach($users as $user)
               <li> {{$user}} </li>
             @endforeach
        </ul>
     </body>
</html>
