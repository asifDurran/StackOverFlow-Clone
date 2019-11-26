<template>
    <div class="float-right">
     <span class="text-muted"> {{postDate}}</span>
    <div class="media mt-2">
    <a href=""  class="pr-2">
    <img :src="user.avatar" alt="">
    </a>
        <div class="media-body mt-1">
        <a href="" class="">{{user.name}}</a>
        </div>
    </div>
</div>
</template>
<script>
export default {
    props: ['model', 'label'],

    computed: {
        postDate()
        {
            this.label + " " + this.model.created_date;
        }
    },

    data() 
    {
        return {
            user: this.model.user
        }
    }
}
</script>
