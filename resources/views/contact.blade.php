<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<style>
    .container{
        padding: 20px 30px;
    }
    button{
        margin-top: 1rem
    }
</style>
<body>
{{-- <section style="padding-top:60px;">
    <div class="container"> --}}


{{-- <div class="row">
<div class="col-m-i-6 offset-md-3">
    <div class="card">
        <div class="card-header">
            Contact
        </div>
        <div class="card-body">
            @if (Session::get('message_send'))
        {{Session::get('message_send')}}
            @endif
            <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-controller">
                </div>
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-controller">
                </div>
                    <div class="form-group">
                    <label for="decs">Message</label>
                    <textarea type="text" name="decs" class="form-controller"></textarea>
                </div>
                <div class="form-group">
                    <label for="decs">Message</label>
                    {{-- <input type="file" name="decs" class="form-controller"></textarea> --}}
                {{-- </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>  --}}
<div class="container">
<div class="input-group mb-3">

        <form  action="{{route('contact.send')}}" enctype="multipart/form-data">
            @csrf

    <input type="text" class="form-control" name="name" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
  </div>

  <div class="input-group mb-3">
    <input type="text" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2" required>
    <span class="input-group-text"  id="basic-addon2">Email</span>
  </div>

  <div class="input-group mb-3">
    <input type="text" class="form-control" name="imageUrl" placeholder="Image Url" aria-label="Image Url" aria-describedby="basic-addon2" >
    <span class="input-group-text"  id="basic-addon2">Image Url</span>
  </div>


  <div class="input-group">
    <span class="input-group-text">Message</span>
    <textarea class="form-control" name="decs" aria-label="With textarea" required></textarea>
  </div>

  <div class="input-group mb-3">
    <input type="file" class="form-control" name="file" placeholder="File" aria-label="File" aria-describedby="basic-addon2">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
{{-- </section> --}}
</form>
@if (Session::get('message_send'))
<div class="alert alert-success" role="alert">
    Thank you for the message
  </div>
{{Session::get('message_send')}}
    @endif
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
