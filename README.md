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

### Livewire Events
Simple Swal access:
```php
class MyComponent extends \Livewire\Component
{
    ...
    public function submit() {
        $this->emit('swal', [
            'icon' => 'error',
            'title' => 'Oops...',
            'text' => 'Something went wrong!',
            'footer' => '<a href="">Why do I have this issue?</a>'
        ]);
    }
    ...
}
```
Swal confirm access:
```php
...
    $this->emit('swal:confirm', [
        'title' => 'Do you want to save the changes?',
        'text' => 'Save changes',
        'confirmEvent' => 'livewireEvent', // You livewire event
        'confirmParams' => ['user_id' => 1], // You livewire event parameters
    ]);
...
```
Swal message access:
```php
...
    $this->emit('swal:success', [
        'title' => 'Changes saved!',
        'text' => 'All you changes is saved'
    ]);
    // Or
    $this->emit('swal:success', [ // Can be: success, error, warning, info 
        'Changes saved!', 
        'All you changes is saved'
    ]);
...
```
Toastr message access:
```php
...
    $this->emit('toastr:success', 'Changes saved!');
    $this->emit('toastr:success', [ // Can be: success, error, warning, info 
        'Changes saved!', 
        'All you changes is saved',
        ['timeOut' => 5000]
    ]);
...
```
Turbolinks visit access:
```php
...
    $this->emit('visit', '/edit');
    // Or
    $this->emit('visit', [
        '/edit', ['action' => 'replace']
    ]);
...
```

### Extending

For inject folder you can do this:
```php
Bfg\Livewire\LivewireComponentsFinder::directory('Admin\\Pages', __DIR__.'/../Pages');
```
```php
LivewireComponentsFinder::directory(string $namespace, string $path);
```
