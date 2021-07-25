# Extension livewire

Extension for the [`Livewire`](https://laravel-livewire.com/) package. 
Adds fidder for components.

## Usage
For inject folder you can do this:
```php
Bfg\Livewire\LivewireComponentsFinder::directory('Admin\\Pages', __DIR__.'/../Pages');
```
```php
LivewireComponentsFinder::directory(string $namespace, string $path);
```
