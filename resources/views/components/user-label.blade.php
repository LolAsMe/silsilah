<div>
    <div class="label">
        @if ($user->couples()->first())
        <div>
            {{ link_to_route('users.tree', $user->name, [$user->id], ['title' => $user->name . ' (' . $user->gender . ')']) }}
        </div>
        <div class="separator"></div>
        <div>
            {{ link_to_route('users.tree', $user->couples()->first()->name, [$user->couples()->first()->id], ['title' => $user->couples()->first()->name . ' (' . $user->couples()->first()->gender . ')']) }}
        </div>
        @else
        {{ link_to_route('users.tree', $user->name, [$user->id], ['title' => $user->name . ' (' . $user->gender . ')']) }}
        @endif
    </div>
</div>
