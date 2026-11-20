<?php

it('can render', function () {
    $contents = $this->view('show', [
        //
    ]);

    $contents->assertSee('');
});
