<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <style>
            p {
                font-size: 12px;
            }

            .signature {
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <div>
            <p>Hi,</p>
            <p>You have been invited to join LifeSpot as {{ $user->name }}'s {{ $relationship->title }}</p>
            <a 
                href="{{route('view.invite', [
                    'invite_id' => $invite_id,
                    'relationship_type' => $relationship->id,
                    'owner_id' => $user->id 
                ])}}"
            >Sign up here.</a>
        </div>
    </body>
</html>