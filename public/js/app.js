document.addEventListener('alpine:init', () => {
    Alpine.data('fetchData', () => ({
        posts: [],
        init() {
            this.getData()

            Livewire.on('postCreated', post => {
                this.posts.unshift(post);
            });
            Livewire.on('postUpdated', __ => {
                console.log("asdfsad")
                this.getData()
            });

        },
        getData(){
            axios.get('api/posts')
                .then(res => {
                    this.posts = res.data
                });
        }
    }))
    //

});
function viewPost(){
    window.location.href = '/view-post'
}
function createPost() {
 Livewire.emit('createPost')
}

function updatePost(id) {
    Livewire.emit('update-post',id)
}


