<x-layout>
    <h2 class="target-name">Available</h2>


    <ul class="target-grid">
        @foreach ($targets as $target)
            <li class="target-card">
                <x-card href="{{ route('targets.show', $target->id) }}">
                    <div>
                        <h3 class="target-name">
                            {{ $target->name }} 
                        </h3>
                        <p>{{ $target->branch->name }}</p>
                    </div>
                    
                </x-card>
            </li>
        @endforeach

        {{ $targets->links() }}
</x-layout>