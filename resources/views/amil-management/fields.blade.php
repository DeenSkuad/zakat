@if ($action == 'create')
    <div class="mb-3">
        <label for="role" class="form-label">Negeri</label>
        <select class="form-select" name="state_id" id="state_id">
            <option>Sila Pilih Negeri</option>
            
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




