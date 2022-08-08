<html>
    <link href="/app.css" rel="stylesheet">
    <script src="//cdn.alpinejs.dev" defer></script>

    <h1 class="title">Alpine</h1>

    <div class="counter" x-data="{ counter: @synthetic(new Counter) }">
        <span id="count" x-text="counter.count"></span>

        <button id="increment" @click="counter.increment()">+</button>
    </div>
</html>
