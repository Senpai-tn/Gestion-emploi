<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIVMDTlQ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIVMDTlQ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIVMDTlQ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIVMDTlQ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerIVMDTlQ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'IVMDTlQ',
    'container.build_id' => '0cffc9f0',
    'container.build_time' => 1591839917,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIVMDTlQ');
