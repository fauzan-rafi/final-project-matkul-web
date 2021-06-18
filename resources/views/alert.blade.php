@if(session()->get('success'))
      <div class="container">
            <div class="d-flex">
                  <div class="alert alert-success">
                        {{ session()->get('success') }}
                  </div>
            </div>
      </div>
@endif