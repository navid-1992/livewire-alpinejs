@extends('layout.app')
@section('content')
    <style>
        .card-header{
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }
    </style>
    <div x-data="fetchPost" class="card mt-5" style="width: 20rem;margin: 0 auto">
        <div class="card-header">
            <span>View Post</span>
            <span class="btn btn-primary"><a href="{{url('/')}}" style="color: white">Go Back</a></span>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>ID: </label>
                <h4 class="card-title" x-text="post.id"></h4>
            </div>
            <div class="form-group">
                <label>Title: </label>
                <h4 class="card-title" x-text="post.title"></h4>
            </div>

            <div class="form-group">
                <label>Content: </label>
                <h5 class="card-text" x-text="post.body"></h5>
            </div>

            <div class="form-group">
                <label>Posted By: </label>
                <h5 class="card-text" x-text="post.user_by"></h5>
            </div>

        </div>

    </div>
    <script>
        let id = window.location.pathname.split('/').pop();;
        document.addEventListener('alpine:init', () => {
            Alpine.data('fetchPost', () => ({
                post: null,
                init() {
                    axios.get(`{{url('api/posts')}}/${id}`)
                        .then(res => {
                            this.post = res.data
                        })
                }
            }))
        });
    </script>
@endsection
