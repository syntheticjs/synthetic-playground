<html>
    <link href="/app.css" rel="stylesheet">

    <h1 class="title">Vanilla</h1>

    <div class="counter">
        <span id="count"></span>

        <button id="increment">+</button>
    </div>

    <script>
        let updateCount = value => document.querySelector('#count').textContent = value

        document.addEventListener('DOMContentLoaded', () => {
            let counter = @synthetic(new Counter)

            counter.$watchEffect(() => {
                updateCount(counter.count)
            })

            document.querySelector('#increment').addEventListener('click', async () => {
                counter.increment()
            })
        })
    </script>
</html>
