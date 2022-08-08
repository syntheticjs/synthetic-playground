<html>
    <link href="/app.css" rel="stylesheet">
    @vite('resources/js/app.jsx')

    <h1 class="title">Vue</h1>

    <div id="vue-root"></div>

    <script>
        window.rawCounter = @js(synthetic(new Counter))
    </script>
</html>
