<div class="modal fade" id="baseAjaxModalContent" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Negeri {{ $user->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('asnaf-management.fields', ['action' => 'edit'])
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn bg-primary" data-action="{{ route('asnaf-managements.update', $user->id) }}" onClick="btnUpdate(this)">Kemaskini</button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('asnaf-management.js.edit')
