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
            <div>
                <div class="gap-5 lg:flex">
                    <div class="grow space-y-5">
                        <div class="panel">
                            <form action="">

                                <h5 class="text-lg font-semibold dark:text-white-light mb-2">Blog Information</h5>

                                <div class="form-group mb-4">
                                    <label for=" BlogTitle">Title</label>
                                    <input id="BlogTitle" type="text" placeholder="Enter Blog Title" class="form-input"
                                        required />
                                </div>
                                <div class="form-group mb-4">
                                    <label>Short Description</label>
                                    <textarea placeholder="Enter Blog short description" rows="4"
                                        class="form-input"></textarea>
                                </div>
                                <!-- Start Blog Description -->

                                <div class="form-group mb-4">
                                    <label for=" BlogTitle">Content</label>

                                    <div class="form-group mb-5">
                                        <!-- basic -->
                                        <div id="editor">
                                            <!-- Text Here.. -->
                                        </div>

                                        <!-- script -->
                                        <script>
                                            new Quill('#editor', {
                                                theme: 'snow'
                                            });
                                            var toolbar = quill.container.previousSibling;
                                            toolbar.querySelector('.ql-picker').setAttribute('title', 'Font Size');
                                            toolbar.querySelector('button.ql-bold').setAttribute('title', 'Bold');
                                            toolbar.querySelector('button.ql-italic').setAttribute('title', 'Italic');
                                            toolbar.querySelector('button.ql-link').setAttribute('title', 'Link');
                                            toolbar.querySelector('button.ql-underline').setAttribute('title', 'Underline');
                                            toolbar.querySelector('button.ql-clean').setAttribute('title', 'Clear Formatting');
                                            toolbar.querySelector('[value=ordered]').setAttribute('title', 'Ordered List');
                                            toolbar.querySelector('[value=bullet]').setAttribute('title', 'Bullet List');
                                        </script>
                                    </div>
                                </div>
                                <!-- End Blog Description  -->
                                <!-- <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2">

                                    <div class="form-group">
                                        single file
                                        <div class="custom-file-container" data-upload-id="myFirstImage"></div>
                                    </div>
                                </div> -->
                            </form>
                        </div>


                        <!-- Start SEO -->
                        <div class="panel mt-5">
                            <div class="mb-2  flex items-center justify-between">
                                <h5 class="text-lg font-semibold dark:text-white-light">SEO Information</h5>
                            </div>
                            <div class="mb-5">

                                <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2">

                                    <div class="form-group">
                                        <label for="seoTitle">Tittle</label>
                                        <input id="seoTitle" type="text" placeholder="Enter SEO Title"
                                            class="form-input" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="seoKeywords">Keywords</label>
                                        <input id="seoKeywords" type="text" placeholder="Enter SEO Keywords"
                                            class="form-input" required />
                                        <div class="tag-list" id="tagList"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="BlogExcerpt ">Description </label>
                                <!-- <input id="PropertyExcerpt " type="text" placeholder="Enter Property Excerpt "
                                        class="form-input" required /> -->
                                <textarea rows="4" class="form-textarea"></textarea>
                            </div>

                        </div>
                        <!-- End SEO  -->

                        <div class="hidden justify-end gap-4 lg:flex">
                            <a href="<?= base_url('/all-blogs') ?>" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary primary-btn">Add Blog</button>
                        </div>
                    </div>
                    <div class="mt-5 w-full shrink-0 lg:mt-0 lg:max-w-xs">
                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-1">
                            <div class="panel p-0">
                                <div class="border-b p-4 text-base font-semibold dark:border-[#191e3a] dark:text-white">
                                    Publish</div>
                                <form action="" class="space-y-5 p-4">
                                    <div>
                                        <label class="">Status</label>
                                        <select class="form-select">
                                            <option>Published</option>
                                            <option>Draft</option>
                                            <option>Scheduled</option>
                                        </select>
                                    </div>
                                    <div>
                                        <div x-data="form">
                                            <label class="">Date For Schedule</label>
                                            <input id="basic" x-model="date1" class="form-input" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="">Visibility</label>
                                        <select class="form-select">
                                            <option>Public</option>
                                            <option>Hidden</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="panel p-0">
                                <div class="border-b p-4 text-base font-semibold dark:border-[#191e3a] dark:text-white">
                                    Category Blog</div>
                                <form action="" class="space-y-5 p-4">
                                    <div>
                                        <div x-data="form">
                                            <select class="selectize">
                                                <option selected value="category1">Category 1</option>
                                                <option  value="category2">Category 2</option>
                                                <option  value="category3">Category 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel p-0">
                                <div class="border-b p-4 text-base font-semibold dark:border-[#191e3a] dark:text-white">
                                    Featured Image</div>
                                <form action="" class="space-y-5 p-4">
                                    <div>
                                        <div x-data="form">
                                            <!-- single file -->
                                            <div class="custom-file-container" data-upload-id="myFirstImage"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel p-0">
                                <div class="border-b p-4 text-base font-semibold dark:border-[#191e3a] dark:text-white">
                                    Blog Tags</div>
                                <form action="" class="space-y-5 p-4">
                                    <div class="form-group">
                                        <input id="blogTags" type="text" placeholder="Enter Blog Tags"
                                            class="form-input" required />
                                        <div class="tag-list" id="blogTagList"></div>
                                    </div>
                                </form>
                            </div>

                            <div class="flex justify-end gap-4 lg:hidden">
                                <a href="<?= base_url('/all-blogs') ?>" class="btn btn-outline-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary dark-btn">Add Blog</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end footer section -->
    </div>
</div>


<!-- City Dropdown -->
<script>
    document.addEventListener("DOMContentLoaded", function (e) {
        // default
        var els = document.querySelectorAll(".selectize");
        els.forEach(function (select) {
            NiceSelect.bind(select);
        });
    });
</script>

<!-- Date script -->
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("form", () => ({
            date1: '2022-07-05',
            init() {
                flatpickr(document.getElementById('basic'), {
                    dateFormat: 'Y-m-d',
                    defaultDate: this.date1,
                })
            }
        }));
    });

</script>

<!-- Script for both SEO and Blog tags -->
<script>
    function setupTagInput(inputId, tagListId) {
        const tagInput = document.getElementById(inputId);
        const tagList = document.getElementById(tagListId);

        tagInput.addEventListener("keydown", function (event) {
            if (event.key === "Enter" || event.key === ",") {
                event.preventDefault();
                addTag(tagInput.value.trim(), tagList);
                tagInput.value = "";
            }
        });
    }

    function addTag(tagName, tagList) {
        if (tagName === "") return;

        const tagElement = document.createElement("div");
        tagElement.classList.add("tag");
        tagElement.textContent = tagName;

        tagElement.addEventListener("click", function () {
            tagList.removeChild(tagElement);
        });

        tagList.appendChild(tagElement);
    }

    // Setup for SEO tags
    setupTagInput("seoKeywords", "tagList");

    // Setup for Blog tags
    setupTagInput("blogTags", "blogTagList");

    // Add initial tags if needed
    const initialTags = [];
    initialTags.forEach((tag) => addTag(tag, document.getElementById("tagList")));
</script>



<!-- start sidebar section -->
<?= $this->include('common-layout/footer.php') ?>
<!-- end sidebar section -->

<!-- File Upload -->
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

<!-- Editor Script -->
<script>
    new Quill('#editor', {
        theme: 'snow',
    });
    var quill = new Quill('#editor1', {
        theme: 'snow',
    });
    var toolbar = quill.container.previousSibling;
    toolbar.querySelector('.ql-picker').setAttribute('title', 'Font Size');
    toolbar.querySelector('button.ql-bold').setAttribute('title', 'Bold');
    toolbar.querySelector('button.ql-italic').setAttribute('title', 'Italic');
    toolbar.querySelector('button.ql-link').setAttribute('title', 'Link');
    toolbar.querySelector('button.ql-underline').setAttribute('title', 'Underline');
    toolbar.querySelector('button.ql-clean').setAttribute('title', 'Clear Formatting');
    toolbar.querySelector('[value=ordered]').setAttribute('title', 'Ordered List');
    toolbar.querySelector('[value=bullet]').setAttribute('title', 'Bullet List');

</script>