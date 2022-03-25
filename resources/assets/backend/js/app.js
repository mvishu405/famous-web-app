require('./bootstrap');
// require('alpinejs');



/*
|--------------------------------------------------------------------------
| Plugin initialization
|--------------------------------------------------------------------------
|
*/

bsCustomFileInput.init();

// Datatable
$('.admin-data-table').DataTable({
    paging: true,
    lengthChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: false,
    responsive: true,
    stateSave: true
});

//Initialize Select2 Elements
$('.select2').select2()

//Initialize Select2 Elements
$('.select2bs4').select2({
    theme: 'bootstrap4'
})

// //Datemask dd/mm/yyyy
// $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
// //Datemask2 mm/dd/yyyy
// $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
// //Money Euro
// $('[data-mask]').inputmask()

//Date range picker
$('#reservationdate').datetimepicker({
    format: 'L'
});

//Date range picker
$('#reservation').daterangepicker()

//Date range picker with time picker
$('#reservationtime').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
        format: 'MM/DD/YYYY hh:mm A'
    }
})

//Date range as a button
$('#daterange-btn').daterangepicker(
    {
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
    },
    function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
)

//Timepicker
$('#timepicker').datetimepicker({
    format: 'LT'
})

//Bootstrap Duallistbox
$('.duallistbox').bootstrapDualListbox()

//Colorpicker
$('.my-colorpicker1').colorpicker()
//color picker with addon
$('.my-colorpicker2').colorpicker()

$('.my-colorpicker2').on('colorpickerChange', function (event) {
    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
});

$("input[data-bootstrap-switch]").each(function () {
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
});

// Alert code
$('.toastrDefaultSuccess').click(function () {
    toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});

$('.toastrDefaultInfo').click(function () {
    toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});
$('.toastrDefaultError').click(function () {
    toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});
$('.toastrDefaultWarning').click(function () {
    toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
});




// Tiny mce

var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

tinymce.init({
    selector: '.tmce',
    plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
    imagetools_cors_hosts: ['picsum.photos'],
    menubar: 'file edit view insert format tools table help',
    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    toolbar_sticky: true,
    autosave_ask_before_unload: true,
    autosave_interval: '30s',
    autosave_prefix: '{path}{query}-{id}-',
    autosave_restore_when_empty: false,
    autosave_retention: '2m',
    image_advtab: true,
    valid_elements: "*[*]",
    link_list: [{
        title: 'My page 1',
        value: 'https://www.tiny.cloud'
    },
    {
        title: 'My page 2',
        value: 'http://www.moxiecode.com'
    }
    ],
    image_list: [{
        title: 'My page 1',
        value: 'https://www.tiny.cloud'
    },
    {
        title: 'My page 2',
        value: 'http://www.moxiecode.com'
    }
    ],
    image_class_list: [{
        title: 'None',
        value: ''
    },
    {
        title: 'Some class',
        value: 'class-name'
    }
    ],
    importcss_append: true,
    file_picker_callback: function (cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');
        input.onchange = function () {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);
                cb(blobInfo.blobUri(), {
                    title: file.name
                });
            };
            reader.readAsDataURL(file);
        };
        input.click();
    },
    templates: [{
        title: 'New Table',
        description: 'creates a new table',
        content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
    },
    {
        title: 'Starting my story',
        description: 'A cure for writers block',
        content: 'Once upon a time...'
    },
    {
        title: 'New list with dates',
        description: 'New List with dates',
        content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
    }
    ],
    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
    height: 300,
    image_caption: true,
    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
    noneditable_noneditable_class: 'mceNonEditable',
    toolbar_mode: 'sliding',
    contextmenu: 'link image imagetools table',
    skin: useDarkMode ? 'oxide-dark' : 'oxide',
    content_css: useDarkMode ? 'dark' : 'default',
    // content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

// Pikaday
$('.pikadatepicker').pikaday({
    format: 'YYYY-MM-DD',
    theme: 'triangle-theme'
});
