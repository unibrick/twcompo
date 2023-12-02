<x-twcompo::oauth.icon-button href="{{ route($attributes['provider']) }}" label="">
    @include('twcompo::svg.' . $attributes['provider'])
</x-twcompo::oauth.icon-button>

