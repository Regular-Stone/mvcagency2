<div class="container d-flex flex-column justify-content-center align-items-center mt-5 mb-5">
    <h1 class="text-center mb-4">Ajouter une annonce</h1>
    <form action="<?=ROOT?>annonce/registerAnnonce" method="post" enctype="multipart/form-data" class="w-50">
        <div class="form-group mb-3">
            <label for="title">Titre : </label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group mb-3">
            <label for="description">Description : </label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="row">
            <div class="form-group col mb-3">
                <label for="price">Loyer mensuel (en €) </label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group col mb-3">
                <label for="category">Nombre de pièces : </label>
                <select class="form-select" id="category" name="category" required>
                    <option value="1">1 pièce</option>
                    <option value="2">2 pièces</option>
                    <option value="3">3 pièces</option>
                    <option value="4">4 pièces</option>
                    <option value="5">5 pièces</option>
                    <option value="6">6 pièces</option>
                    <option value="7">7 pièces</option>
                    <option value="8">8 pièces</option>
                    <option value="9">9 pièces</option>
                    <option value="10">10 et + (veillez précisez)</option>
                </select>
            </div>
        </div>
        <div class="form-group mb-3 d-flex justify-content-center align-items-center">
            <label for="image" class="me-3">Image pour l'annonce : </label>
            <input type="file" class="form-control-file" id="image" name="image" accept=".jpeg, .png, .jpg, .svg" required>
            <input type="hidden" name="MAX_FILE_SIZE" value="26214400">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
</div>