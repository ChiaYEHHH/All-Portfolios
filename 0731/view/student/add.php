<form action="../../api/student/store.php" method="get" id="myForm" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 mt-3">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="name" id="">
                </div>
                <div class="col-12 mt-3">
                    <label for="">mobile</label>
                    <input type="text" class="form-control" name="mobile" id="">
                </div>
                <div class="col-12 mt-3">
                    <input type="hidden" class="form-control" name="address" id="" value="taipei input">
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Button</button>
                    </div>
                </div>
            </div>
        </form>
    <!-- js or jqery -->
    <script>
        $(document).ready(function() {
            // bind
            const myForm = $('#myForm');
            console.log('myForm', myForm);

            // action
            myForm.submit(function(e) {
                e.preventDefault();
                console.log('submit ok');

                // let data = $(this).serialize();
                let data = $(this).serializeArray();
                // console.log('data', data);
                // console.log('typeof(data)', typeof(data));

                // 方法一 xxx
                let tmpObj = {
                    'name': 'address',
                    'mobile': 'taipei'
                };
                data.push(tmpObj);
                // console.log(data);;

                // 方法二
                // html form hidden
                console.log('data', data);

                // ajax
                url = "../../api/student/store.php";
                $.ajax({
                    type: "get",
                    url: url,
                    data: data,
                    dataType: "json",
                    success: function(res) {
                        console.log('res', res);
                        let result = res.msg;
                        if (result = "ok") {
                            console.log('ajax insert ok');
                            header("location:../view/index.php");
                        }
                    }
                });
                // ajax end

            });



        });
        // jquery end
    </script>