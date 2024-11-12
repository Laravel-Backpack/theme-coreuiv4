<?php

namespace Backpack\ThemeCoreuiv4;

use Backpack\Basset\Facades\Basset;
use Backpack\CRUD\ThemeServiceProvider;

class AddonServiceProvider extends ThemeServiceProvider
{
    protected string $vendorName = 'backpack';
    protected string $packageName = 'theme-coreuiv4';

    public function boot(): void
    {
        $this->autoboot();
        Basset::map('bp-coreui4-css', 'https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.6/dist/css/coreui.min.css', ['integrity' => 'sha256-DQQL5S0Nr+FBPc95hePjvggeC3fQuIoNOffaAS/W5dU=', 'crossorigin' => 'anonymous']);
        Basset::map('bp-coreui4-js', 'https://unpkg.com/@coreui/coreui@4.2.6/dist/js/coreui.min.js', ['integrity' => 'sha384-7z/8kRsWn+JzUhcmd/7if4xTkhFHSa91GbgPGNPuOACOF6hhbxLeSAX0OhEy5ug9', 'crossorigin' => 'anonymous']);
        Basset::map('bp-simplebar-css', 'https://cdn.jsdelivr.net/npm/simplebar@6.2.7/dist/simplebar.min.css', ['integrity' => 'sha256-plFwFf/3EkfLQVO1lfLsgE+e95PitSEiMV9kjUEE+kg=', 'crossorigin' => 'anonymous']);
        Basset::map('bp-simplebar-js', 'https://unpkg.com/simplebar@6.2.7/dist/simplebar.min.js', ['integrity' => 'sha384-IiaRtt+2y5xh3HH+L4JkT7GRvNJgAnAHTOPt2/WWXW4sWqqQcBmQNlVFTWUQhkEp', 'crossorigin' => 'anonymous']);
    }
}
