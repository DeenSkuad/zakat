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
    <div class="mb-3">
        <label for="role" class="form-label">Mukim</label>
        <select class="form-select" name="district_id" id="district_id">
            <option>Sila Pilih Mukim</option>
        </select>
    </div>
@endif

@if ($action == 'edit')
    <div class="mb-3">
        <label for="role" class="form-label">Negeri</label>
        <select class="form-select" name="state_id" id="state_id">
            <option>Sila Pilih Negeri</option>
            @foreach ($states as $stateDropdown)
                @if ($kariah->district->state->id == $stateDropdown->id)
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
        </select>
    </div>

    <div class="mb-3">
        <label for="role" class="form-label">Mukim</label>
        <select class="form-select" name="district_id" id="district_id">
            <option>Sila Pilih Mukim</option>
            @foreach ($districts as $district)
                @if ($kariah->district_id == $district->id)
                    <option value="{{ $district->id }}" selected>
                        {{ $district->name }}
                    </option>
                @else
                    <option value="{{ $district->id }}">
                        {{ $district->name }}
                    </option>
                @endif
            @endforeach
        </select>
    </div>
@endif

@if ($action == 'show')
    <div class="mb-3">
        <label for="role" class="form-label">Negeri</label>
        <select class="form-select" name="state_id" id="state_id" disabled>
            <option>Sila Pilih Negeri</option>
            @foreach ($states as $stateDropdown)
                @if ($kariah->district->state->id == $stateDropdown->id)
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
        </select>
    </div>

    <div class="mb-3">
        <label for="role" class="form-label">Mukim</label>
        <select class="form-select" name="district_id" id="district_id" disabled>
            <option>Sila Pilih Mukim</option>
            @foreach ($districts as $district)
                @if ($kariah->district_id == $district->id)
                    <option value="{{ $district->id }}" selected>
                        {{ $district->name }}
                    </option>
                @else
                    <option value="{{ $district->id }}">
                        {{ $district->name }}
                    </option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $kariah->name ?? '' }}"
            disabled>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Poskod</label>
        <input type="text" class="form-control" id="postcode" name="postcode"
            value="{{ $kariah->postcode ?? '' }}" disabled>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Alamat</label>
        <textarea class="form-control" id="address" name="address" disabled>{{ $kariah->address ?? '' }}</textarea>
    </div>
@else
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $kariah->name ?? '' }}"
            required>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Poskod</label>
        <input type="text" class="form-control" id="postcode" name="postcode"
            value="{{ $kariah->postcode ?? '' }}" required>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Alamat</label>
        <textarea class="form-control" id="address" name="address">{{ $kariah->address ?? '' }}</textarea>
    </div>
@endif
