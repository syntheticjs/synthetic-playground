<html>
    <link href="/app.css" rel="stylesheet">
    @vite('resources/js/app.jsx')

    <h1 class="title">React</h1>

    <div id="react-root"></div>

    <script>
        window.rawCounter = @js(synthetic(new Counter))
    </script>
</html>
