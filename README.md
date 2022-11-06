# Extension livewire

Extension for the [`Livewire`](https://laravel-livewire.com/) package. 
Adds fidder for components and extend with: 
* [Alpine](https://alpinejs.dev/) 
* [Turbolink](https://github.com/turbolinks/turbolinks)
* [SweetAlert2](https://sweetalert2.github.io/)
* [Toastr](https://github.com/CodeSeven/toastr)

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

Access:
```javascript
window.Turbolinks.visit("/edit", { action: "replace" })
```

### SweetAlert2
Access:
```javascript
window.Swal.fire('Any fool can use a computer')
```
### Toastr
Access:
```javascript
window.Toastr.info('Are you the 6 fingered man?')
```

### Extending

For inject folder you can do this:
```php
Bfg\Livewire\LivewireComponentsFinder::directory('Admin\\Pages', __DIR__.'/../Pages');
```
```php
LivewireComponentsFinder::directory(string $namespace, string $path);
```
