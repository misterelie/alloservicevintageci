<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vintage Ci</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
        <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
    </head>
</head>

<body>
    <main>
        <section class="services-page spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 m-auto">
                                <form action="" method="post" id="image-upload" enctype="multipart/form-data"
                                  >
                                    <fieldset class="mb-4">
                                        <div class="card ">
                                            <div class="card-header px-4 py-3 bg-bordeau">
                                                <h4 class="card-title text-white">Publier une annonce</h4>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="row mb-2">
                                                    <div class="col-sm-6   mb-2">
                                                        <label for="lieu_service" class="form-label">Titre de l'annonce <span class="text-red">*</span> 
                                                            :</label>
                                                        <input type="text" name="titre_annonce" id="titre_annonce"
                                                            class="form-control" required>
                                                    </div>

                                                    <div class="col-sm-6  mb-2">
                                                        <label for="categorie_annonce" class="form-label">Catégorie de
                                                            l'annonce
                                                            : <span class="text-red">*</span> </label>
                                                        <select name="categorie_annonce" id="categorie_annonce"
                                                            class="form-control categorie_annonce mb-2" required>
                                                            <option value="">--Catégories--</option>
                                                            <option value="Informatique">Informatique
                                                            </option>
                                                            <option value="mode-homme">Mode Homme
                                                            </option>
                                                            <option value="Produits bébé">Produits pour bébé
                                                            </option>
                                                            <option value="mode-femme">Mode Femme
                                                            </option>
                                                            <option value="beaute-hygiene-sante">Beauté & Hygiène
                                                            </option>
                                                            <option value="telephone-tablette">Téléphones & Tablettes
                                                            </option>
                                                            <option value="maison-cuisine-jardin">Maison et bureau
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6  mb-2">
                                                        <label for="commune_annonce" class="form-label">Commune
                                                            : <span class="text-red">*</span> </label>
                                                        <select name="commune_annonce" id="commune_annonce"
                                                            class="form-control commune_annonce mb-2" required>
                                                            <option value="">--Commune--</option>
                                                            <option value="cocody">Cocody
                                                            </option>
                                                            <option value="marcory">Marcory
                                                            </option>
                                                            <option value="abobo">Abobo
                                                            </option>
                                                            <option value="adjame">Adjamé
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6 mb-2">
                                                        <label for="price_annonce" class="form-label">Prix de l'annonce
                                                            : <span class="text-red">*</span></label>
                                                        <input type="number" name="price_annonce" id="price_annonce"
                                                            class="form-control " required>
                                                    </div>
                                                   
                                                    <!--end::Input group-->
                                                    <div class="form-group mb-2 mt-2">
                                                        <!--begin::Input group-->
                                                        <div class="form-group row">
                                                            <!--begin::Label-->
                                                            <label
                                                                class="col-lg-2 col-form-label text-lg-right">Ajouter la Photo de l'annonce: <span class="text-red">*</span> </label>
                                                            <!--end::Label-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-10">
                                                                <!--begin::Dropzone-->
                                                                <div class="dropzone dropzone-queue mb-2"
                                                                    id="kt_dropzonejs_example_2">
                                                                    <!--begin::Controls-->
                                                                    <div class="dropzone-panel mb-lg-0 mb-2">
                                                                        <a class="dropzone-select btn btn-sm btn-primary me-2">Joindre
                                                                            des fichiers</a>
                                                                        <a
                                                                            class="dropzone-upload btn btn-sm btn-light-primary me-2">Télécharger
                                                                            tout</a>
                                                                        <a
                                                                            class="dropzone-remove-all btn btn-sm btn-light-primary">Retirer tout</a>
                                                                    </div>
                                                                    <!--end::Controls-->

                                                                    <!--begin::Items-->
                                                                    <div class="dropzone-items wm-200px">
                                                                        <div class="dropzone-item" style="display:none">
                                                                            <!--begin::File-->
                                                                            <div class="dropzone-file">
                                                                                <div class="dropzone-filename"
                                                                                    title="some_image_file_name.jpg">
                                                                                    <span
                                                                                        data-dz-name>some_image_file_name.jpg</span>
                                                                                    <strong>(<span
                                                                                            data-dz-size>340kb</span>)</strong>
                                                                                </div>

                                                                                <div class="dropzone-error"
                                                                                    data-dz-errormessage></div>
                                                                            </div>
                                                                            <!--end::File-->

                                                                            <!--begin::Progress-->
                                                                            <div class="dropzone-progress">
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-primary"
                                                                                        role="progressbar"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"
                                                                                        aria-valuenow="0"
                                                                                        data-dz-uploadprogress>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Progress-->

                                                                            <!--begin::Toolbar-->
                                                                            <div class="dropzone-toolbar">
                                                                                <span class="dropzone-start"><i
                                                                                        class="bi bi-play-fill fs-3"></i></span>
                                                                                <span class="dropzone-cancel"
                                                                                    data-dz-remove
                                                                                    style="display: none;"><i
                                                                                        class="bi bi-x fs-3"></i></span>
                                                                                <span class="dropzone-delete"
                                                                                    data-dz-remove><i
                                                                                        class="bi bi-x fs-1"></i></span>
                                                                            </div>
                                                                            <!--end::Toolbar-->
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Dropzone-->

                                                                <!--begin::Hint-->
                                                                <span class="form-text text-muted"></span>
                                                                <!--end::Hint-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label for="details_annonce" class="form-label">Détails de
                                                            l'annonce :
                                                            <span class="text-red">*</span> </label>
                                                        <textarea rows="3" name="details_annonce" id="details_annonce"
                                                            class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    </fieldset>

                                    <div class="form-group d-block text-right">
                                        <button type="submit" class="btn submit-btn">Publier l'annonce</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>
<script type="text/javascript">
    // set the dropzone container id
    const id = "#kt_dropzonejs_example_2";
    const dropzone = document.querySelector(id);

    // set the preview element template
    var previewNode = dropzone.querySelector(".dropzone-item");
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);

    var myDropzone = new Dropzone(id, { // Make the whole body a dropzone
        url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        maxFilesize: 1, // Max filesize in MB
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: id + " .dropzone-items", // Define the container to display the previews
        clickable: id +
            " .dropzone-select" // Define the element that should be used as click trigger to select files.
    });

    myDropzone.on("addedfile", function (file) {
        // Hookup the start button
        file.previewElement.querySelector(id + " .dropzone-start").onclick = function () {
            myDropzone.enqueueFile(file);
        };
        const dropzoneItems = dropzone.querySelectorAll('.dropzone-item');
        dropzoneItems.forEach(dropzoneItem => {
            dropzoneItem.style.display = '';
        });
        dropzone.querySelector('.dropzone-upload').style.display = "inline-block";
        dropzone.querySelector('.dropzone-remove-all').style.display = "inline-block";
    });

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
        const progressBars = dropzone.querySelectorAll('.progress-bar');
        progressBars.forEach(progressBar => {
            progressBar.style.width = progress + "%";
        });
    });

    myDropzone.on("sending", function (file) {
        // Show the total progress bar when upload starts
        const progressBars = dropzone.querySelectorAll('.progress-bar');
        progressBars.forEach(progressBar => {
            progressBar.style.opacity = "1";
        });
        // And disable the start button
        file.previewElement.querySelector(id + " .dropzone-start").setAttribute("disabled", "disabled");
    });

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("complete", function (progress) {
        const progressBars = dropzone.querySelectorAll('.dz-complete');

        setTimeout(function () {
            progressBars.forEach(progressBar => {
                progressBar.querySelector('.progress-bar').style.opacity = "0";
                progressBar.querySelector('.progress').style.opacity = "0";
                progressBar.querySelector('.dropzone-start').style.opacity = "0";
            });
        }, 300);
    });

    // Setup the buttons for all transfers
    dropzone.querySelector(".dropzone-upload").addEventListener('click', function () {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
    });

    // Setup the button for remove all files
    dropzone.querySelector(".dropzone-remove-all").addEventListener('click', function () {
        dropzone.querySelector('.dropzone-upload').style.display = "none";
        dropzone.querySelector('.dropzone-remove-all').style.display = "none";
        myDropzone.removeAllFiles(true);
    });

    // On all files completed upload
    myDropzone.on("queuecomplete", function (progress) {
        const uploadIcons = dropzone.querySelectorAll('.dropzone-upload');
        uploadIcons.forEach(uploadIcon => {
            uploadIcon.style.display = "none";
        });
    });

    // On all files removed
    myDropzone.on("removedfile", function (file) {
        if (myDropzone.files.length < 1) {
            dropzone.querySelector('.dropzone-upload').style.display = "none";
            dropzone.querySelector('.dropzone-remove-all').style.display = "none";
        }
    });
</script>

</html>