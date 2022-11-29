
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @extends('templates.app')
<section style="background-color: #dede1c;">
  <div class="container my-5 py-5 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card">
          <div class="card-body p-4">
            <div class="d-flex flex-start w-100">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(21).webp" alt="avatar" width="65"
                height="65" />
              <div class="w-100">
                <h5>Add a post</h5>
                  {{-- comment --}}
                  <form action="{{route('posts.store')}}" method="post">
                    @csrf
                    <div class="form-outline">
                      <input class=" d-flex justify-content-between mb-3"  type="text" name="title" placeholder="Title">  
                      <textarea class="form-control" name="text" rows="4" placeholder="Type your post ..."></textarea>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                      <button class="btn btn-success btn-lg active" type="submit " aria-pressed="true"> Send </button>
                      <a href="" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">
                        Delet <i class="fas fa-long-arrow-alt-right ms-1"></i>
                      </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    

</body>
</html>
