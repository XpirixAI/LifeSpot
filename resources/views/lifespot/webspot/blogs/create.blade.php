<x-xpirix>
    <script src="https://cdn.tiny.cloud/1/detamb5laj9woxfosdw977t3pb43ni4maa7f6eege035mgdd/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="pt-4 pb-6 px-8 lg:px-24">
        <div class="flex justify-between">
            <div class="lg:flex items-center space-x-8">
                <div class="flex items-center hover:text-blue-500 space-x-1">
                 <span>&larr;</span>
                 <button onclick="history.back()" class="text-sm">Go Back</button>
                </div>
                 <h2 class="my-8 text-gray-800 font-bold text-2xl text-center">Create a New Post</h2>
             </div>
            <div class="border border-grblueay-700 p-4 mb-4">
                <ul class="text-sm text-gray-500">
                    <li>&#x2022; Behave like you would in real life</li>
                    <li>&#x2022; Search for duplicates before posting</li>
                    <li>&#x2022; Understand the <a href="#!" class="text-blue-500">community rules</a></li>
                    <li>&#x2022; Look for the original source of content</li>
                </ul>
            </div>
        </div>

        <div class="container mx-auto p-6 bg-gray-100 rounded-lg">
            <div class="mt-5 md:mt-0 md:col-span-2 text-gray-700">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <form method="POST" action="{{ route('storePost.webspot') }}" enctype="multipart/form-data">
                            @csrf
                            @include('posts.forms.create_post_form')

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</x-xpirix>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script>
        tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link ximage media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

    {{-- <script src="https://cdn.tiny.cloud/1/nnd7pakaxqr7isf3oqefsdlew1jsidgl78umfeus6tg21ng0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
        tinymce.init({
            selector: 'textarea',

            image_class_list: [
            {title: 'img-responsive', value: 'img-responsive'},
            ],
            height: 500,
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });
            },
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste imagetools"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",

            image_title: true,
            automatic_uploads: true,
            images_upload_url: '/upload',
            file_picker_types: 'image',
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function () {
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            }
        });
</script> --}}
