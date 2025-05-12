<template>
    <div id="home" class="container-fluid">
        <p>TEMPLATE</p>
    </div>
</template>
<script>
export default {
    name: 'AppLayout',
    data() {
        return {
            // Define your component data here
            // appName: AppName,
            pageTitle: appName + " | Bienvenue sur TIMETABLE!",
        };
    },
    watch: {
        pageTitle(newTitle) {
            document.title = newTitle;
        }
    },
    mounted() {
        // Set the initial document title
        document.title = this.pageTitle;
    },
    methods: {
        // Define your component methods here
    },
};
</script>