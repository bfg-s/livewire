# Extension livewire

Extension for the [`Livewire`](https://laravel-livewire.com/) package. 
Adds fidder for components and extend with [alpine](https://alpinejs.dev/) and [turbolink](https://laravel-livewire.com/).

## Usage

### View
```html
@extends('livewire::document')

@section('head')
    <title>Main</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
@endsection

@section('body')
    @yield('content')
@endsection

@section('footer')
    
@endsection
```

### Turbolinks

* @turbolinks(false) - [Disabling Turbolinks on Specific Links](https://github.com/turbolinks/turbolinks#disabling-turbolinks-on-specific-links)
* @turbolinksEval - [Working with Script Elements](https://github.com/turbolinks/turbolinks#working-with-script-elements)
* @turbolinksPermanent - [Persisting Elements Across Page Loads](https://github.com/turbolinks/turbolinks#persisting-elements-across-page-loads)
* @turbolinksTrackReload - [Reloading When Assets Change](https://github.com/turbolinks/turbolinks#reloading-when-assets-change)
* @turbolinksActionReplace - [Application Visits](https://github.com/turbolinks/turbolinks#application-visits)

### Extending

For inject folder you can do this:
```php
Bfg\Livewire\LivewireComponentsFinder::directory('Admin\\Pages', __DIR__.'/../Pages');
```
```php
LivewireComponentsFinder::directory(string $namespace, string $path);
```
