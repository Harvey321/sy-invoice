@extends('admin.user.layout')
@section('content-wrapper')

    <!-- 标题栏 -->
    <section class="content-header"></section>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">新增产品</h3>
                </div>
                <form role="form">
                    <div class="card-body">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="exampleInputEmail1">产品id/序列号:</label>
                            <input type="text" id="sn" name="sn" value=""
                                   class="form-control" placeholder="请输入设备序列号" maxlength="100" onkeyup="this.value=this.value.trim()">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">产品名:</label>
                            <input type="text" id="product_name" name="product_name" value=""
                                   class="form-control" placeholder="请输入设备名称" maxlength="100" onkeyup="this.value=this.value.trim()">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">设备型号:</label>
                            <input type="text" id="model" name="model" value=""
                                   class="form-control" placeholder="请输入设备型号" maxlength="100" onkeyup="this.value=this.value.trim()">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">安装地:</label>
                            <input type="text" id="address" name="address" value=""
                                   class="form-control" placeholder="请输入安装地" maxlength="100" onkeyup="this.value=this.value.trim()">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">带宽:</label>
                            <input type="text" id="rate" name="rate" value=""
                                   class="form-control" placeholder="请输入带宽" maxlength="100" onkeyup="this.value=this.value.trim()">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ip:</label>
                            <input type="text" id="ip" name="ip" value=""
                                   class="form-control" placeholder="例:eth0:192.168.0.1,eth3:192.168.1.1" maxlength="100" onkeyup="this.value=this.value.trim()">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">备注:</label>
                            <input type="text" id="description" name="description" value=""
                                   class="form-control" placeholder="请输入备注信息" maxlength="240" onkeyup="this.value=this.value.trim()">
                        </div>
                    </div>
   
                    <div class="card-footer"
                         style="display: flex;flex-direction: row;justify-content: space-around">
                        <div id="getDate" class="btn btn-block btn-primary">提交</div>
                        <button type="reset" class="btn btn-block btn-outline-secondary" style="margin-top:0;">
                            重置
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $("#getDate").click(function () {
            //表单验证
            let res = formVerification()
            if (res == false) {
                return false;
            }

            let data = $('form').serializeArray();

            $.ajax({
                type: "post",
                url: "/admin/product/create",
                dataType: 'json',
                data: data,
                success: function (data) {
                    if (data.status == 1) {
                        toastr.success(data.message)
                        $("button[type=reset]").trigger("click");//触发清空表单
                        timeOut('/admin/product')
                    }
                    if (data.status == 0) {
                        toastr.error(data.message)
                    }
                },
                error: function (data) {
                    console.log(data)
                }
            })
        })


        function formVerification() {

            //表单验证
            if ($('#sn').val() == '') {
                toastr.error('请输入产品id/序列号')
                return false;
            }
            if ($('#product_name').val() == '') {
                toastr.error('请输入产品名称')
                return false;
            }
            if ($('#model').val() == '') {
                toastr.error('请输入产品型号')
                return false;
            }
            if ($('#address').val() == '') {
                toastr.error('请输入安装地')
                return false;
            }
            if ($('#rate').val() == '') {
                toastr.error('请输入带宽')
                return false;
            }
            return true;
        }

    </script>

@endsection