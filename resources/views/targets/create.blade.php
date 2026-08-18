<x-layout>
    <div class="container">
        <div class="create-form">
            <h1>Create Agent</h1>

            <form action="{{ route('agents.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="skill" class="form-label">Skill</label>
                    <input type="number" class="form-control @error('skill') is-invalid @enderror" id="skill" name="skill" value="{{ old('skill') }}" min="0" max="100" required>
                    @error('skill')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="branch_name" class="form-label">Branch Name</label>
                    <input type="text" class="form-control @error('branch_name') is-invalid @enderror" id="branch_name" name="branch_name" value="{{ old('branch_name') }}" placeholder="e.g. Frontend / Backend / Design" required>
                    @error('branch_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="5" required>{{ old('bio') }}</textarea>
                    @error('bio')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('agents.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>