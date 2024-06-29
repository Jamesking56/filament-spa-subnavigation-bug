<?php

namespace App\Filament\Pages;

use Filament\Navigation\NavigationItem;
use Filament\Pages\Page;

class TestPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.test-page';

    public ?int $id;

    public function getSubNavigation(): array
    {
        return [
            NavigationItem::make()
                ->label('Test')
                ->url('test/123')
        ];
    }

    public static function getSlug(): string
    {
        return '/test/{id?}';
    }
}
