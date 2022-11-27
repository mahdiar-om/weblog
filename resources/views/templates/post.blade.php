<div class="row d-flex justify-content-center">
    <div class="col-md-8 col-lg-6">
      <div class="card shadow-0 border" style="background-color: #f0f2f5;">
        <div class="card-body p-4">
          <div class="form-outline mb-4">
            <input type="text" id="addANote" class="form-control" placeholder="Type comment..." />
            <label class="form-label" for="addANote">+ Add a note</label><br>
            <button type="submit" style="background-color: #19cc55;">Post</button>
            @yield('posts')
          </div>        
        </div>
      </div>
    </div>
  </div>