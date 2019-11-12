<template>
    <div id="main" v-on:mousemove="countUp">
        <p>x:{{ txtx }} y:{{ txty }}</p>
        <img v-bind:src="map" width="800px" height="auto">
    </div>
</template>

<script>
export default {

    data: function() {
        return {
            txtx: 0,
            txty: 0,
            map: "http://map.laravel.com/storage/map/0015F.jpg"
        }
    },
    methods: {
        countUp: function(e) {
            this.txtx = e.pageX;
            this.txty = e.pageY;
        }
    }
}
</script>

