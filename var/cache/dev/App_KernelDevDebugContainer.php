<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAlC4icf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAlC4icf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAlC4icf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAlC4icf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAlC4icf\App_KernelDevDebugContainer([
    'container.build_hash' => 'AlC4icf',
    'container.build_id' => 'b0e52426',
    'container.build_time' => 1595224428,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAlC4icf');
