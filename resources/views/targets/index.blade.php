<x-layout>
    <h2 class="Agent-name">Available</h2>

    @forelse ($agents as $Agent)
        <ul class="Agent-grid">
            <li class="Agent-card">
                <x-card href="{{ route('agents.show', $Agent->id) }}">
                    <div>
                        <h3 class="Agent-name">
                            {{ $Agent->name }}
                        </h3>
                        <p>{{ $Agent->branch?->name ?? 'No branch assigned' }}</p>
                    </div>
                </x-card>
            </li>
        </ul>
    @empty
        <div class="empty-state">
            <p>No agents yet.</p>
            <a href="{{ route('agents.create') }}" class="btn btn-primary">Create your first Agent</a>
        </div>
    @endforelse

    {{ $agents->links() }}
</x-layout>