<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $item = App\Models\Item::create([
        'name' => 'Test Item',
        'quantity' => 10,
        'price' => 5000,
        'category_id' => 1 // Assuming 1 exists
    ]);
    echo "Item created: " . $item->id;
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage() . "\n" . $e->getTraceAsString();
}
