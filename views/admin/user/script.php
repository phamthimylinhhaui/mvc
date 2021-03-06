<script>
    // $.ajaxSetup({
    //     dataFilter: function(data){
    //         console.log('layout');
    //     }
    // });

    function initDatepicker(picker){

        picker.datepicker({
            todayHighlight: !0,
            format        : 'dd-mm-yyyy',
            autoclose     : true,
        });

        return picker;
    }

    function initImageFile(image, inputFile){
        image.click(function(){
            inputFile.trigger('click');
        });
        inputFile.change(function(){
            var reader = new FileReader();
            reader.onload = function (e) {
                var img = image[0];
                img.src = e.target.result;
            };
            reader.readAsDataURL(inputFile[0].files[0]);
        });
    }

    //    datatable
    function initDatatable(tableElement, showAll=false, config={}){ // table jquery element

        var datatableConfig = {
            bSort: false,
            responsive: !0,
            language  : {
                'sProcessing'  : 'Đang xử lý',
                'sLengthMenu'  : 'Xem _MENU_bản ghi',
                'sZeroRecords' : 'Không tìm thấy dòng nào phù hợp',
                'sInfo'        : 'Đang xem _START_ đến _END_ trong tổng số _TOTAL_ bản ghi',
                'sInfoEmpty'   : 'Đang xem 0 đến 0 trong tổng số 0 bản ghi',
                'sInfoFiltered': '(được lọc từ _MAX_ bản ghi)',
                'sInfoPostFix' : '',
                'sSearch'      : 'Tìm kiếm',
                'sUrl'         : '',
                'oPaginate'    : {
                    'sFirst'       : 'Đầu',
                    'sPrevious': 'Trước',
                    'sNext'    : 'Tiếp',
                    'sLast'    : 'Cuối',

                },
                'select': {
                    rows: {
                        _: 'Đã chọn %d bản ghi',
                        1: 'Đã chọn 1 bản ghi',
                    },
                },
            },

            aLengthMenu: [
                [2, 50, 100, 200, -1],
                [2, 50, 100, 200, 'All'],
            ],

            iDisplayLength: 25,
        };

        Object.assign(datatableConfig,config);
        var table = $('#list-users').DataTable(datatableConfig);


        // init mark index for rows
        table.on('order.dt search.dt', function () {
            table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

        // init search in column table
        table.columns().every(function () {
            var that = this;

            $('input', this.header()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });

        if(showAll){
            showAllRowsDatatable(table)
        }

        return table;
    }

    function showAllRowsDatatable(table){ // datatable element
        var setting                    = table.settings();
        setting[0]._iDisplayLength = setting[0].fnRecordsTotal();
        table.draw();
    }

    function showFormEdit(userId){
        //call ajax
        $.ajax({
            url:"<?php echo Route::name('admin.users.show-form-edit')?>",
            type:"POST",
            data:{
                user_id:userId,
            },
            success: function (data){
                if (data.message==undefined){
                    $('#edit-user').find('.modal-content').html(data);
                }
            },
            error: function (){

            },
        });
    }

    function showFormCreateUser(){

       // call ajax
        $.ajax({
            url:"<?php echo Route::name('admin.users.show-form-create')?>",
            type:"POST",
            data:{
            },
            success: function (data){
                if (data.message==undefined){
                    $('#create-user').find('.create-user').html(data);
                }
            },
            error: function (){

            },
        });
    }

    function alert(message, type='info', detail ){
        Swal.fire(
            message,
            detail,
            type
        )
    }

    function confirm(title, runFunction, dismissFunction, type, text) {

        var type = type == undefined ? 'warning' : type;

        var dismissFunction = dismissFunction === undefined ?
            function () {
                return false;
            }
            : dismissFunction;

        Swal.fire({
            title: title,
            text: text,
            icon: type,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có',
            cancelButtonText: 'Không'
        }).then(function (e) {
            e.value ?
                runFunction() :
                'cancel' === e.dismiss
                && dismissFunction();
        });

    }

    function deleteUser(userId){
        var runFunction = function(){
            //alert("đã thực hiện",'success');
            $.ajax({
                url: "<?php echo Route::name('admin.users.delete');?>",
                type: "POST",
                data: {
                    user_id: userId
                },
                dataType:'JSON',
                success: function (data) {
                    if(data.code == 200){
                        alert("xóa người dùng thành công", "success");
                       $('#user-row-'+userId).remove();
                    }else{
                        alert(data.message, "warning");
                    }
                },
                error: function (e) {
                    alert("Vui lòng thực hiện lại", "error");
                }
            });
        };
        confirm("Bạn muốn xóa người dùng này ? ",runFunction);
    }
</script>
