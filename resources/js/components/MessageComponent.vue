<template>
    <div>
        <li class="list-group-item" :class="className">
            <slot></slot>
        </li>
        <span id="time">{{ time }}</span>
        <small class="badge float-right">{{ user }}</small>
    </div>
</template>

<script>

export default {
    name: "MessageComponent",
    props: ['color','user','time'],
    computed: {
        className(){
            return "list-group-item-" + this.color;
        }
    }
}
</script>

<style scoped>
#time {
    font-size: 9px;
}
</style>
