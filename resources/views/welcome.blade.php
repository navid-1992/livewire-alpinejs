@extends('layout.app')
@section('content')
    <div class="container card mt-5">
        <button class="btn btn-primary w-10 m-2" onclick="createPost()">Add Post</button>
        <div class="container-md mt-5" x-data="fetchData">
            <table class="table table-striped" wire:loading.class="d-none" wire:loading.error="Error loading posts">
                <thead>
                <tr>
                    <th scope="row">ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>User Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <template x-for="(post,index) in posts" :key="index">
                    <tr>
                        <td x-text="post.id"></td>
                        <td x-text="post.title"></td>
                        <td x-text="post.body"></td>
                        <td x-text="post.user_by"></td>
                        <td>
                            <button class="btn btn-success" @click="window.location.href = '/view-post/'+post.id">
                                <i class="fa fa-eye"></i>
                            </button>
                            <button class="btn btn-info" x-on:click="updatePost(post.id)">
                                <i class="fa fa-edit"></i>
                            </button>

                        </td>
                    </tr>
                </template>
                </tbody>
            </table>
        </div>
    </div>
    @livewire('modals.create-post')
    @livewire('modals.update-post')
@endsection

