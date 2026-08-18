<x-layout>
    <h2 class="target-name">Available</h2>

    @forelse ($targets as $target)
        <ul class="target-grid">
            <li class="target-card">
                <x-card href="{{ route('targets.show', $target->id) }}">
                    <div>
                        <h3 class="target-name">
                            {{ $target->name }}
                        </h3>
                        <p>{{ $target->branch?->name ?? 'No branch assigned' }}</p>
                    </div>
                </x-card>
            </li>
        </ul>
    @empty
        <div class="empty-state">
            <p>No targets yet.</p>
            <a href="{{ route('targets.create') }}" class="btn btn-primary">Create your first target</a>
        </div>
    @endforelse

    {{ $targets->links() }}
</x-layout>