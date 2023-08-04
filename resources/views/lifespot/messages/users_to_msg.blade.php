@php
    $users = App\Models\User::all();

@endphp
@foreach ($users as $user)

<ul>
    <li class="mt-2 ml-5 mb-2">
        <a href="#" wire:click.prevent="startConversation({{ $user->id }})" class="text-gray-500">

               <span class="mr-2">{{ Str::limit($user->name, 30, '...') }}</span>

            {{-- <i class="fa fa-comments"></i> --}}
        </a>
    </li>
</ul>

@endforeach
