<x-layout>
    <div class="container">
        <div class="create-form">
            <h1>Create Target</h1>

            <form action="{{ route('targets.store') }}" method="POST">
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
                    <label for="branch_id" class="form-label">Branch</label>
                    <select class="form-control @error('branch_id') is-invalid @enderror" id="branch_id" name="branch_id" required>
                        <option value="" disabled selected>Select a branch</option>
                        @foreach ($branches as $branch)
                            <option value="{{ $branch->id }}">
                                {{ $branch->name}}
                            </option>
                        @endforeach
                    </select>
                    @error('branch_id')
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
                    <a href="{{ route('targets.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>