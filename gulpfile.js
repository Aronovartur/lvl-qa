

function defaultTask(cb) {
    // place code for your default task here
    const elixir = require('laravel-elixir');
    elixir(function(mix) {
        mix.sass([
            'app.scss',
            'controllers.scss',
            'style.scss'
        ], 'public/assets/css');
    });
    cb();
}

exports.default = defaultTask
