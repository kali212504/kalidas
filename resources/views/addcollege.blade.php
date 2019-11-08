 @include('includeview.head')
@include('includeview.sidebar') 
  <div class="content-wrapper">
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" name="colleges" id="colleges" novalidate="novalidate" method="post">
                      @csrf
                <input name="id" type="hidden" value="{{isset($data['id']) ? $data['id'] : ''}}"/>
                <div class="card-body">
                  <div class="form-group">

                    <label for="exampleInputEmail1">Name</label>
                    <input type="input-group-text" class="form-control" id="name" id="name" value="{{isset($data['name']) ? $data['name'] : ''}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                       <select class="form-control" name="status" id="status">
                          <option value="Active" {{ isset($data['status']) && $data['status']=='Active' ? 'selected' : ''}}> Active</option>
                          <option value="Inactive" {{ isset($data['status']) && $data['status']=='Inactive' ? 'selected' : ''}}>Inactive</option>
                        </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="submit" id="submitbutton"  class="btn btn-primary"value="Save"/>
                </div>
              </form>
            </div>
            </div>
            </div>
            </div>
            </section>
                  </div>
            <!-- /.card -->

                        @include('includeview.footer')
  <script type="text/javascript">

    $(document).ready(function(){
      $("#colleges").validate({
        onkeydown:false,
        onkeyup:false,
        onfocusin:false,
        onfocusout:false,
        errorElement:"div",
        rules:{
          name:"required",
          status:"required",
        },
        messages:{
          name:"Please enter name",
          status:"Please select status",
        },

      })
    //             name: "Please enter name",
    //             status: "Please select status",
    //         },
    //         submitHandler: function (form) {
    //             queryString = $('#colleges').serialize();
    //             $.post("/colleges/save", queryString, function (data) {
    //                 commonStatusMessage(data, '/colleges');
    //             }, "json");
    //             return false;
    //         },
    //         errorPlacement: function (error, element) {
    //             showError(error, element);
    //         }
    //     });
        
    //     $("#submitbutton").click(function () {
    //         $("#colleges").submit();
    //         return false;
    //     });
    // });
    })            
  </script>
