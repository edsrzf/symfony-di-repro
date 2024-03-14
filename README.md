This is a reproduction case for an issue in the Symfony service container: https://github.com/symfony/symfony/issues/54294

Steps to reproduce:

* Run `composer install`
* Run `bin/console app:repro`

You should see the error:

```
In Container.php line 240:

  The "App\Service1" service or alias has been removed or inlined when the container was compiled. You should either make it public, or stop using the container directly and use dependency
   injection instead.
```

However the error message is incorrect. Only dependency injection is used. `App\Service1` appears to have been incorrectly inlined into `App\Service2`, even though it's also required by `App\PublicService`.

Examining the output of `var/cache/dev/App_KernelDevDebugContainerCompiler.log`, we can see:

```
Symfony\Component\DependencyInjection\Compiler\InlineServiceDefinitionsPass: Inlined service "App\Service1" to "App\Service2".
```
