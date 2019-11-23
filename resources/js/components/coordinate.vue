<script>
export default {
    data: function() {
        return {
            x: 0,
            y: 0,
        }
    },
    methods: {
        getCoordinate: function(e) {
            this.x = e.pageX;
            this.y = e.pageY;
        }
    }
}
</script>
