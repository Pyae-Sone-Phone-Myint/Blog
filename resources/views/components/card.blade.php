<div {{ $attributes->merge(['class' => 'card ' . $classes]) }}>
    <div class="card-header">{{ $cardTitle }}</div>
    <div class="card-body">
        {{ $slot }}
    </div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>
