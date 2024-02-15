@if ($action == 'edit' || $action == 'create')
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $state->name ?? '' }}" required>
    </div>
@endif

@if ($action == 'show')
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $state->name ?? '' }}" disabled>
    </div>
@endif
