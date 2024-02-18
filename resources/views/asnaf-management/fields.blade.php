@if ($action == 'create')
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
        <input type="text" class="form-control" id="name" name="name" value="{{ $user ? $user->asnaf->phone_no : '' }}"
            required autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Alamat Emel</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ?? '' }}"
            required autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Negeri</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ?? '' }}"
            required autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Daerah</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ?? '' }}" required autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Poskod</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ?? '' }}" required autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Kariah Terdekat</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ?? '' }}" required autocomplete="off">
    </div>
@endif




