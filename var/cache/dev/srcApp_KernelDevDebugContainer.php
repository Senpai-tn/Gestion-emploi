<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX07ZEyg\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX07ZEyg/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX07ZEyg.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX07ZEyg\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerX07ZEyg\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'X07ZEyg',
    'container.build_id' => '2ba3e461',
    'container.build_time' => 1591482922,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX07ZEyg');