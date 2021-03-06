<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
    Trouver le !
</button>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">GIF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" id="searchTenor" class="form-control" placeholder="Recherche sur Tenor">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" id="btnTenor" type="button">🔎</button>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-md-center tenor_container_image" id="container-image">
                    <p class="text-center my-5 lead">Attente d'une recherche</p>
                </div>
            </div>
        </div>
    </div>
</div>
