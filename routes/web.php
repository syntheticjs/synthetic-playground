<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'vanilla');

Route::view('/vanilla', 'vanilla');
Route::view('/alpine', 'alpine');
Route::view('/react', 'react');
Route::view('/vue', 'vue');

class Counter extends \Synthetic\Component {
    /**
     * In a "Synthetic" object, all public properties are exposed to the front-end
     * as standard properties on an object. However, they are reactive, meaning
     * JS is tracking changes to them and will react when they are changed.
     *
     * Ex: counter.count++
     */
    public $count = 0;

    /**
     * Methods are callable from JavaScript directly on the Synthetic object as if
     * they were native JavaScript methods. They are async and will fire off an
     * AJAX request, call the PHP method, and return its value to the caller.
     *
     * Ex: let newCount = await counter.increment()
     */
    public function increment()
    {
        return ++$this->count;
    }

    /**
     * Computed properties are evaluated initially and exposed to JS as standard
     * data properties. However, they are only re-evaluated when one of their
     * dependencies changes, because "Synthetic" intelligently tracks them.
     *
     * Ex: console.log(counter.double)
     */

    /** @computed */
    public function double()
    {
        return $this->count * 2;
    }

    /**
     * By marking a method with "@js", Synthetic will take the returned string and
     * send it to the front-end. In JavaScript it will be turned into an actual
     * method on the Synthetic object and be callable with the proper scope.
     *
     * Ex: counter.tripple()
     */

    /** @js */
    public function tripple()
    {
        return <<<JS
            () => this.count = this.count * 3;
        JS;
    }
}

