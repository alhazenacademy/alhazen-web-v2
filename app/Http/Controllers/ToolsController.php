<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\SalesNumber;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    private function getSalesPhone(): ?string
    {
        return optional(SalesNumber::active()->inRandomOrder()->first())->phone_number;
    }

    private function getFooterData(): array
    {
        $settings = SiteSetting::companySettings();

        return [
            'whatsapp' => $settings['whatsapp'] ?? null,
            'email' => $settings['email'] ?? null,
            'website' => $settings['website'] ?? null,
            'address' => $settings['address'] ?? null,
            'socials' => collect($settings['socials'] ?? [])
                ->where('is_active', true)
                ->sortBy('sort_order'),
        ];
    }

    private function getProgramLinks(): array
    {
        return Program::active()
            ->ordered()
            ->get()
            ->map(fn (Program $program) => [
                'label' => $program->name,
                'url' => match (strtolower($program->name)) {
                    'coding', 'coding anak', 'kursus coding' => 'kursus-coding-anak',
                    'roblox', 'roblox studio' => 'kursus-roblox',
                    default => 'program',
                },
                'key' => $program->key,
            ])
            ->all();
    }

    public function ruang_tulis()
    {
        $salesPhone = $this->getSalesPhone();
        $footerData = $this->getFooterData();
        $programLinks = $this->getProgramLinks();
        $starterPath = resource_path('views/pages/tools/ruang_tulis_starter.md');
        $starterText = file_exists($starterPath) ? file_get_contents($starterPath) : '';

        return view('pages.tools.ruang_tulis', [
            'salesPhone' => $salesPhone,
            'whatsapp' => $footerData['whatsapp'],
            'email' => $footerData['email'],
            'website' => $footerData['website'],
            'address' => $footerData['address'],
            'socials' => $footerData['socials'],
            'programLinks' => $programLinks,
            'starterText' => $starterText,
        ]);
    }
}
