<x-layout class="showCard">
    <div class="target-details">
        <h2><strong> {{ $target->name }} </strong></h2>
        <p><strong>Skill level: </strong> {{ $target->skill }}</p>
        <p><strong>Bio: </strong> <br> {{ $target->bio }}</p>
    </div>

    <div class="branch-details">
        <h3><strong> Branch: </strong> {{ $target->branch->name }} </h3>
        <p><strong>Location: </strong> {{ $target->branch->location }} </p>
        <p><strong>About the branch: </strong> <br> {{ $target->branch->description }} </p>
    </div>

    <form action="{{ route('targets.destroy', $target->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Delete Target</button>
    </form>
</x-layout>