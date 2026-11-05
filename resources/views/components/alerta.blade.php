@props(['tipo' => 'success'])
<div {{ $attributes->merge(['class' => "alert alert-$tipo"]) }} role="alert">
    {{ $slot }}
</div>