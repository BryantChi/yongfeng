<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', '名稱:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Case Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('case_title', '標題:') !!}
    {!! Form::text('case_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Case Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('case_content', '內容:') !!}
    {!! Form::textarea('case_content', null, ['class' => 'form-control', 'id' => 'contents']) !!}
</div>

@push('third_party_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.tiny.cloud/1/1ugon3r0i7rnpx6jhdz4moygn9knxfai212wbqlixzr9hpi8/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script> --}}
    <script src="{!! asset('vendor/tinymce/js/tinymce/tinymce.js') !!}"></script>
@endpush
@push('page_scripts')
    {{-- <script src="{{ asset('assets/admin/js/cases.js') }}" referrerpolicy="no-referrer"></script> --}}
    <script>
        /**
         * 編輯器初始化
         */
        tinymce.init({
            selector: '#contents', // 更改此值以匹配你的HTML
            language: "zh_TW", // 介面語言
            menu: {
                meun: {
                    title: '編輯器'
                }
            },
            menubar: 'menu',
            plugins: [
                'advlist', 'autolink', 'link', 'image', 'media', 'lists', 'charmap', 'preview', 'anchor',
                'pagebreak',
                'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime',
                'table', 'emoticons', 'template', 'help'
            ],
            toolbar: "undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl",
            // tinycomments_mode: 'embedded',
            media_live_embeds: true,
            image_class_list: [
                // { title: '無', value: '' },
                {
                    title: 'Rwd class',
                    value: 'img-fluid'
                }
            ],
            table_class_list: [{
                    title: 'Rwd class',
                    value: 'table table-bordered'
                },
                // { title: 'Rwd class', value: 'table table-responsive' }
            ],
            table_default_styles: {
                'border-collapse': 'collapse',
                'border': '1px solid black'
            },
            content_style: "table, th, td { border: 1px solid black; }",
            /* 配置圖片和視頻上傳的URL */
            image_title: true,
            // images_upload_url: '{{ route('editor-upload') }}',
            automatic_uploads: false,
            promotion: false,
            relative_urls: true,
            file_picker_types: 'image media', // 允許上傳圖片和視頻
            // images_upload_url: '{{ route('editor.upload.temp') }}',
            // relative_urls: false,
            file_picker_callback: function(callback, value, meta) {
                const input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', meta.filetype === 'image' ? 'image/*' : 'video/*');
                input.onchange = function() {
                    const file = this.files[0];
                    if (!file) return;

                    const formData = new FormData();
                    formData.append('file', file);
                    formData.append('_token', '{{ csrf_token() }}');

                    fetch('{{ route('editor.upload.temp') }}', {
                            method: 'POST',
                            body: formData,
                        })
                        .then(response => response.json())
                        .then(data => {
                            callback(data.location, {
                                title: file.name
                            });
                        })
                        .catch(error => {
                            console.error('Upload failed:', error);
                            alert('上傳失敗');
                        });
                };
                input.click();
            },
        });
    </script>
@endpush
