import { useSynthetic } from '../../vendor/syntheticjs/synthetic/js/react';

export function ReactApp() {
    let { count, increment } = useSynthetic(window.rawCounter)

    return (
        <div class="counter">
            <span id="count">{ count }</span>

            <button id="increment" onClick={() => increment()}>+</button>
        </div>
    )
}
