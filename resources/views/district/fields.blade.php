@if ($action == 'create')
    <div class="mb-3">
        <label for="role" class="form-label">Negeri</label>
        <select class="form-select" name="state_id" id="state_id">
            <option>Sila Pilih Negeri</option>
            @foreach ($states as $stateDropdown)
                <option value="{{ $stateDropdown->id }}">
                    {{ $stateDropdown->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="role" class="form-label">Bandar</label>
        <select class="form-select" name="city_id" id="city_id">
            <option>Sila Pilih Bandar</option>
        </select>
    </div>
@endif

@if ($action == 'edit')
    <div class="mb-3">
        <label for="role" class="form-label">Negeri</label>
        <select class="form-select" name="state_id" id="state_id">
            <option>Sila Pilih Negeri</option>
            @foreach ($states as $stateDropdown)
                @if ($district->state_id == $stateDropdown->id)
                    <option value="{{ $stateDropdown->id }}" selected>
                        {{ $stateDropdown->name }}
                    </option>
                @else
                    <option value="{{ $stateDropdown->id }}">
                        {{ $stateDropdown->name }}
                    </option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="role" class="form-label">Bandar</label>
        <select class="form-select" name="city_id" id="city_id">
            <option>Sila Pilih Bandar</option>
            @foreach ($cities as $cityDropdown)
                @if ($district->city_id == $cityDropdown->id)
                    <option value="{{ $cityDropdown->id }}" selected>
                        {{ $cityDropdown->name }}
                    </option>
                @else
                    <option value="{{ $cityDropdown->id }}">
                        {{ $cityDropdown->name }}
                    </option>
                @endif
            @endforeach
        </select>
    </div>
@endif

@if ($action == 'show')
    <div class="mb-3">
        <label for="role" class="form-label">Negeri</label>
        <select class="form-select" name="state_id" disabled>
            <option>Sila Pilih Negeri</option>
            @foreach ($states as $stateDropdown)
                @if ($district->state_id == $stateDropdown->id)
                    <option value="{{ $stateDropdown->id }}" selected>
                        {{ $stateDropdown->name }}
                    </option>
                @else
                    <option value="{{ $stateDropdown->id }}">
                        {{ $stateDropdown->name }}
                    </option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="role" class="form-label">Bandar</label>
        <select class="form-select" name="city_id" id="city_id" disabled>
            <option>Sila Pilih Bandar</option>
            @foreach ($cities as $cityDropdown)
                @if ($district->city_id == $cityDropdown->id)
                    <option value="{{ $cityDropdown->id }}" selected>
                        {{ $cityDropdown->name }}
                    </option>
                @else
                    <option value="{{ $cityDropdown->id }}">
                        {{ $cityDropdown->name }}
                    </option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $district->name ?? '' }}"
            disabled>
    </div>
@else
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $district->name ?? '' }}"
            required>
    </div>
@endif
