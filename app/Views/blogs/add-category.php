<!-- start header section -->
<?= $this->include('common-layout/header.php') ?>
<!-- end header section -->
<div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
    <!-- start sidebar section -->
    <?= $this->include('common-layout/sidebar.php') ?>
    <!-- end sidebar section -->

    <div class="main-content flex flex-col min-h-screen">
        <!-- start topbar section -->
        <?= $this->include('common-layout/topbar.php') ?>
        <!-- end topbar section -->

        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <!-- start main content section -->
            <div x-data="form">
                <!-- start main content section -->
                <ul class="flex space-x-2 rtl:space-x-reverse pb-5 ">
                    <li>
                        <a href="javascript:;" class="text-primary hover:underline">Blogs</a>
                    </li>
                    <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                        <span>Add Category</span>
                    </li>
                </ul>
                <form action="#" method="post">
                    <!-- Start Add Category Information -->
                    <div class="panel ">
                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Category Information</h5>
                        </div>
                        <div class="mb-5">

                            <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2">

                                <div class="form-group">
                                    <label for="PropertyTitle">Category Name</label>
                                    <input id="PropertyTitle" type="text" placeholder="Enter Category Name"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="Slug">Slug</label>
                                    <input id="Slug" type="text" placeholder="Enter Category Slug" class="form-input"
                                        required />
                                </div>

                                <div class="form-group">
                                    <label for="state">Parent Category</label>
                                    <select class="selectize">
                                        <option selected value="category1">Category 1</option>
                                        <option value="category2">Category 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status" class="mr-3">Status </label>
                                    <label class="inline-flex mr-2 mt-1">
                                        <input type="radio" name="status" class="form-radio text-dark peer" />
                                        <span class="peer-checked:text-dark mr-3">Active</span>

                                        <input type="radio" name="status" class="form-radio text-dark peer" />
                                        <span class="peer-checked:text-dark">Deactive</span>
                                    </label>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-12 pt-5 lg:grid-cols-12">
                                <div class="form-group">
                                    <label for="desc">Description </label>
                                    <textarea rows="4" class="form-textarea"></textarea>
                                </div>

                                <!-- <div class="form-group">
                                    ==single file==
                                    <div class="custom-file-container" data-upload-id="myFirstImage"></div>

                                      == script   ==
                                    <script>
                                        new FileUploadWithPreview.FileUploadWithPreview('myFirstImage', {
                                            images: {
                                                baseImage: '<? //= base_url() ?>assets/images/file-preview.png',
                                                backgroundImage: '',
                                            },
                                        });
                                    </script>
                                </div> -->

                            </div>

                        </div>

                    </div>
                    <!-- End Add Category Information  -->

                    <button type="button" class="btn btn-success m-auto mt-5">Add Category</button>
                </form>
                <!-- end main content section -->
            </div>
        </div>

        <!-- end footer section -->
    </div>
</div>


<!-- Parent Dropdown -->
<script>
    document.addEventListener("DOMContentLoaded", function (e) {
        // default
        var els = document.querySelectorAll(".selectize");
        els.forEach(function (select) {
            NiceSelect.bind(select);
        });
    });
</script>

<!-- start sidebar section -->
<?= $this->include('common-layout/footer.php') ?>
<!-- end sidebar section -->

<script>
    // single image upload
    new FileUploadWithPreview.FileUploadWithPreview('myFirstImage', {
        images: {
            baseImage: '<?= base_url() ?>assets/images/file-preview.svg',
            backgroundImage: '',
        },
    });

    // multiple image upload
    new FileUploadWithPreview.FileUploadWithPreview('mySecondImage', {
        images: {
            baseImage: '<?= base_url() ?>assets/images/file-preview.svg',
            backgroundImage: '',
        },
        multiple: true,
    });

</script>