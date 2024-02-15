<div class="modal fade" id="baseAjaxModalContent" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Negeri {{ $amil-management->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('amil-management.fields', ['action' => 'edit'])
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn bg-primary" data-action="{{ route('amil-managements.update', $amil-management->id) }}" onClick="btnUpdate(this)">Kemaskini</button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('amil-management.js.edit')
