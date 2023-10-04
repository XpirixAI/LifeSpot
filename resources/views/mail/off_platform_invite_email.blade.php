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
            <p>
                I have requested you to be Trustee and additional roles for my estate.
                I have found this awesome program called LifeSpot (LifeSpotAI) to store my important documents that will pertain to you.
                LifeSpot is allowing me to safely store and share all my estate information including Will & Trust documents, assets, and wishes for my family.
                This is so important to me, I want to give you access, and the ability to have access to my most current documents that I have for my Estate.
            </p>
            <p>
                Please accept my invitation by becoming a member with LifeSpot.ai. and consider saving, sharing and growing your own estate.
                Please let me know if you have any questions.
            </p>
            <p>
                Thank You,<br/>
                {{ $user->name }}
            </p>
            <p>
                If you have any questions please visit the LifeSpot Help Center at <a href="https://lifespot.ai/help">LifeSpot.ai/help</a>
            </p>
            <p>
                Not Interested?
            </p>
            <p>
                <a 
                    href="{{route('decline.invite', [
                        'invite_id' => $invite_id,
                        'relationship_type' => $relationship->id,
                        'owner_id' => $user->id 
                    ])}}"
                >Decline this invitation</a> if you cannot be Brandon's Trustee.
            </p>
            <p>
                We will let Brandon know and confirm with the account holder.
            </p>

            <a 
                class="btn bg-blue-500 p-3 rounded-lg text-white float-right"
                href="{{route('view.invite', [
                    'invite_id' => $invite_id,
                    'relationship_type' => $relationship->id,
                    'owner_id' => $user->id 
                ])}}"
            >
                Accept Invitation
            </a>
        </div>
    </body>
</html>