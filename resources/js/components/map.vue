<template>
    <div id="main" v-on:dblclick="facilityAdd($event, 'floor', 'post')">
        <p>x:{{ txtx }} y:{{ txty }}</p>
        <img v-bind:src="map" width="800px" height="auto">
         <form name="floor" style="display:inline" v-bind:action="route" method="post">
            @csrf
        </form>
    </div>
</template>

<script>
export default {
    props: [ 'route' ],

    data: function() {
        return {
            txtx: 0,
            txty: 0,
            map: "http://map.laravel.com/storage/map/0015F.jpg"
        }
    },
    methods: {
        facilityAdd: function(e, formName, method) {
            this.txtx = e.pageX;
            this.txty = e.pageY;
            var f = document.forms[formName];

            f.method = this.method;
            f.action = this.route;
            f.submit();
            return true;
        }
    }
}
</script>

