<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4lKbxsx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4lKbxsx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4lKbxsx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4lKbxsx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4lKbxsx\App_KernelDevDebugContainer([
    'container.build_hash' => '4lKbxsx',
    'container.build_id' => 'c9447b1a',
    'container.build_time' => 1626593744,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4lKbxsx');
