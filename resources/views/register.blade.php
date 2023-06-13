<!DOCTYPE html>
<html>
    @include("common.css")
<body>
<section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-lg-4 offset-md-1 offset-lg-2">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Now For Work
              </h2>
            </div>
            <form action="regester_new_user" method="post">
            @csrf
              <div>
                <input type="text" placeholder="Full_name" name="full_name" required/>
              </div>
              <div>
                <input type="text" name="contact_no" placeholder="Contact" required>
              </div>
              <div>
                <input type="email" name="email" placeholder="Email"required>
              </div>
              <div>
                <input type="password" name="password" placeholder="Password"required>
              </div>
              <div>
                    <select name="role" id="id">
                         @foreach($response_data as $i=> $data)
                            <option value="{{$data->id}}">{{$data->name}}</option>
                         @endforeach
                     </select>
              </div>
              <div class="d-flex ">
                        <button type="submit">
                        SEND
                        </button>
                </div>
            </form>
          </div>
        </div>
       
      </div>
    </div>
  </section>
</body>
@include("common.js")
</html>
