<x-layout class="showCard">
    <div class="AgentDetails">
        <h2><strong> {{ $agent->name }} </strong></h2>
        <p><strong>Skill level: </strong> {{ $agent->skill }}</p>
        <p><strong>Bio: </strong> <br> {{ $agent->bio }}</p>

    </div>

    <div class="branchDetails">
        {{-- <h2><strong> Branch </strong></h2> --}}
        <h3><strong> Branch : </strong> {{ $agent->branch->name }} </h3>
        <p><strong>Location: </strong> {{ $agent->branch->location }} </p>
        <p><strong>About the branch: </strong> <br> {{ $agent->branch->description }} </p>
        
    </div>

    <form action="{{ route('agents.destroy', $agent->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Delete Agent</button>
    </form>
</x-layout>