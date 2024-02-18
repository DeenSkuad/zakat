@if ($action == 'create' || $action == 'edit')
    <div class="mb-3">
        <label for="name" class="form-label">No. Kad Pengenalan</label>
        <input type="text" class="form-control" id="ic_no" name="ic_no" value="{{ $user->ic_no ?? '' }}"
            required autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Nama Penuh</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ?? '' }}"
            required autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">No. Telefon</label>
        <input type="text" class="form-control" id="phone_no" name="phone_no" value="{{ $user->asnaf->phone_no ?? '' }}"
            required autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Alamat Emel</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $user->email ?? '' }}"
            required autocomplete="off">
    </div>
@endif

@if ($action == 'create')
    <div class="mb-3">
        <label for="name" class="form-label">Negeri</label>
        <select class="form-control" name="state_id" id="state_id">
            <option selected disabled>Sila Pilih Negeri</option>
            @foreach($states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach
        </select>
    </div>
@elseif($action == 'edit')
    <div class="mb-3">
        <label for="name" class="form-label">Negeri</label>
        <select class="form-control" name="state_id" id="state_id">
            <option selected disabled>Sila Pilih Negeri</option>
            @foreach($states as $state)
                @if($user->asnaf->state_id == $state->id)
                    <option value="{{ $state->id }}" selected>{{ $state->name }}</option>
                @else
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
@endif

@if ($action == 'create' || $action == 'edit')
    <div class="mb-3">
        <label for="name" class="form-label">Mukim</label>
        <select class="form-control" name="district_id" id="district_id">
            <option selected disabled>Sila Pilih Mukim</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label" name="postcode">Poskod</label>
        <select class="form-control" name="postcode" id="postcode">
            <option selected disabled>Sila Pilih Poskod</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Kariah Terdekat</label>
        <select class="form-control" name="kariah_id" id="kariah_id">
            <option selected disabled>Sila Pilih Kariah</option>
        </select>
    </div>
@endif

@if ($action == 'show')
    <div class="mb-3">
        <label for="name" class="form-label">No. Kad Pengenalan</label>
        <input type="text" class="form-control" id="ic_no" name="ic_no" value="{{ $user->ic_no ?? '' }}"
            required autocomplete="off" disabled>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Nama Penuh</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ?? '' }}"
            required autocomplete="off" disabled>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">No. Telefon</label>
        <input type="text" class="form-control" id="phone_no" name="phone_no" value="{{ $user->asnaf->phone_no ?? '' }}"
            required autocomplete="off" disabled>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Alamat Emel</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $user->email ?? '' }}"
            required autocomplete="off" disabled>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Negeri</label>
        <select class="form-control" name="state_id" id="state_id" disabled>
            <option selected disabled>Sila Pilih Negeri</option>
            @foreach($states as $state)
                @if($user->asnaf->state_id == $state->id)
                    <option value="{{ $state->id }}" selected>{{ $state->name }}</option>
                @else
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Mukim</label>
        <select class="form-control" name="district_id" id="district_id" disabled>
            <option selected disabled>Sila Pilih Mukim</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label" name="postcode">Poskod</label>
        <select class="form-control" name="postcode" id="postcode" disabled>
            <option selected disabled>Sila Pilih Poskod</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Kariah Terdekat</label>
        <select class="form-control" name="kariah_id" id="kariah_id" disabled>
            <option selected disabled>Sila Pilih Kariah</option>
        </select>
    </div>
@endif



