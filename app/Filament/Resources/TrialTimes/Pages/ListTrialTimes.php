<?php

namespace App\Filament\Resources\TrialTimes\Pages;

use App\Filament\Resources\TrialTimes\TrialTimeResource;
use App\Models\TrialTime;
use Carbon\Carbon;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\EmbeddedTable;
use Filament\Schemas\Components\RenderHook;
use Filament\Schemas\Components\View;
use Filament\Schemas\Schema;
use Filament\View\PanelsRenderHook;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Livewire\Attributes\Url;

class ListTrialTimes extends ListRecords
{
    protected static string $resource = TrialTimeResource::class;

    #[Url(as: 'day')]
    public ?int $day = null;

    public function content(Schema $schema): Schema
    {
        if (! $this->day) {
            return $schema
                ->components([
                    View::make('filament.resources.trial-times.pages.list-trial-times-days'),
                ]);
        }

        return $schema
            ->components([
                $this->getTabsContentComponent(),
                RenderHook::make(PanelsRenderHook::RESOURCE_PAGES_LIST_RECORDS_TABLE_BEFORE),
                View::make('filament.resources.trial-times.pages.trial-times-header'),
                EmbeddedTable::make(),
                RenderHook::make(PanelsRenderHook::RESOURCE_PAGES_LIST_RECORDS_TABLE_AFTER),
            ]);
    }

    public function selectDay(?int $day): void
    {
        $this->redirect(static::getUrl($day ? ['day' => $day] : []), navigate: true);
    }

    public function getDayName(): ?string
    {
        return match ($this->day) {
            1 => 'Senin',
            2 => 'Selasa',
            3 => 'Rabu',
            4 => 'Kamis',
            5 => 'Jumat',
            6 => 'Sabtu',
            default => null,
        };
    }

    protected function getTableQuery(): Builder|Relation|null
    {
        $query = parent::getTableQuery();

        if ($this->day) {
            $query->where('day_of_week', $this->day);
        }

        return $query;
    }

    protected function getHeaderActions(): array
    {
        if (! $this->day) {
            return [
                Action::make('info')
                    ->label('Pilih Hari untuk Mengelola Jam')
                    ->color('gray')
                    ->hidden(true)
                    ->disabled(),
            ];
        }

        return [
            Action::make('back_to_days')
                ->label('Kembali ke Daftar Hari')
                ->color('gray')
                ->icon('heroicon-o-arrow-left')
                ->url(static::getUrl()),

            CreateAction::make()
                ->label('Tambah Jam '.$this->getDayName())
                ->fillForm(fn (): array => [
                    'day_of_week' => $this->day,
                    'is_active' => true,
                    'sort_order' => (TrialTime::where('day_of_week', $this->day)->max('sort_order') ?? 0) + 1,
                ])
                ->mutateFormDataUsing(function (array $data): array {
                    $data['day_of_week'] = $this->day;

                    return $data;
                })
                ->slideOver(),
        ];
    }

    public function getDaysData(): array
    {
        $days = [
            1 => 'Senin',
            2 => 'Selasa',
            3 => 'Rabu',
            4 => 'Kamis',
            5 => 'Jumat',
            6 => 'Sabtu',
        ];

        $allTimes = TrialTime::all()->groupBy('day_of_week');

        $result = [];
        foreach ($days as $id => $name) {
            $times = $allTimes->get($id, collect());
            $activeTimes = $times->where('is_active', true)->sortBy('sort_order');
            $result[] = [
                'id' => $id,
                'name' => $name,
                'total_count' => $times->count(),
                'active_count' => $activeTimes->count(),
                'times' => $activeTimes->pluck('time')->map(fn ($t) => Carbon::parse($t)->format('H:i'))->values()->all(),
            ];
        }

        return $result;
    }
}
